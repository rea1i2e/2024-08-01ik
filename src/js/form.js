$(document).ready(function () {
  function isEmpty(value) {
    return !value;
  }

  function showErrorMessage(fieldName, message) {
    $("[name=" + fieldName + "]").before(
      '<div class="error-message">' + message + "</div>"
    );
  }

  function normalizePhoneNumber(phoneNumber) {
    return phoneNumber.replace(/[━.*‐.*―.*－.*\-.*ー.*\-]/gi, "");
  }

  function scrollToContactSection() {
    var offsetTop = $("#contact-section").offset().top;
    $("html, body").animate({ scrollTop: offsetTop });
    $("#submit-button").prop("disabled", false);
  }

  $("#submit-button").click(function () {
    $("#submit-button").prop("disabled", true);
    $(".error-message").remove();

    // Validate required fields
    [
      "applicant_name",
      "furigana",
      "email_address",
      "telephone_number",
      "corporate_name",
      "consideration",
      "message",
    ].forEach(function (field) {
      if (isEmpty($("[name=" + field + "]").val())) {
        showErrorMessage(field, "必須入力項目です");
      }
    });

    // Validate furigana
    if (
      $("[name=furigana]")
        .val()
        .match(/[^ぁ-んァ-ンー　\s]+/)
    ) {
      showErrorMessage(
        "furigana",
        "ひらがな、またはカタカナで入力してください"
      );
    }

    // Validate telephone number
    var normalizedPhoneNumber = normalizePhoneNumber(
      $("[name=telephone_number]").val()
    );
    if (
      normalizedPhoneNumber &&
      !normalizedPhoneNumber.match(/^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/)
    ) {
      showErrorMessage("telephone_number", "正しく入力してください");
    }

    // Validate applicant name against spammer list
    if (spammerList.includes($("[name=applicant_name]").val())) {
      showErrorMessage("applicant_name", "正しく入力してください");
    }

    // Validate email address
    var emailAddress = $("[name=email_address]").val();
    if (emailAddress !== "" && !emailAddress.match(/.+@.+\..+/)) {
      showErrorMessage("email_address", "正しく入力してください");
    }

    // Validate email address against spam list
    if (spamList.includes(emailAddress)) {
      showErrorMessage("email_address", "正しく入力してください");
    }

    // Validate privacy policy acceptance
    if (!$("#privacy-policy").is(":checked")) {
      showErrorMessage("privacy_policy", "個人情報保護方針に同意してください");
    }

    // Submit form if no errors
    if ($(".error-message").length === 0) {
      $("#registration-form").submit();
    } else {
      scrollToContactSection();
    }
  });

  $("#top-cta").click(function () {
    scrollToContactSection();
  });

/* ------------------------------
セレクトボックスの初期値スタイル変更
------------------------------ */
$(".js-select-box").on("change", function () {
  if ($(".js-select-box").val()) {
    $(".js-select-box").css("color", "#222");
  } else {
    $(".js-select-box").css("color", "rgba(34, 34, 34, 0.3)");
  }
});
});
