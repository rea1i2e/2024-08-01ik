const LAST_STEP_NUMBER = 3;

$(document).ready(function() {
  $(".form-button").click(function() {
    $(".tooltip-wrapper").remove();

    if (!$(this).hasClass("submit")) {
      const currentStepItem = $(".form-step-item.current");

      const currentStepNumber = parseInt(currentStepItem.text());

      if ($(this).hasClass("next")) {
        $(".form-button").prop("disabled", true);

        if (validation(currentStepNumber)) {
          currentStepItem.removeClass("current");

          removeIe11PreventOffToTheRight();

          moveNextStep(currentStepNumber);
        } else {
          $(".tooltip").show(200, function() {
            hideToolTip();

            $(".form-button").prop("disabled", false);
          });

          addIe11PreventOffToTheRight();
        }
      } else {
        currentStepItem.removeClass("current");

        movePrevStep(currentStepNumber);

        $(".form-button").prop("disabled", false);
      }
    } else {
      submitIfLastCheckOk();
    }
  });

  $(".form-select-box").on("change", function() {
    $(".form-select-box").val()
      ? $(".form-select-box").css("color", "#070707")
      : $(".form-select-box").css("color", "#CDCDCD");
  });
});

function submitIfLastCheckOk() {
  if (!validation(LAST_STEP_NUMBER)) {
    $(".tooltip").show(200, function() {
      hideToolTip();
    });
    return false;
  } else {
    $("#registration-form").submit();
  }
}

function addIe11PreventOffToTheRight() {
  $('label[for="desired_employment_form1"]').addClass(
    "ie11-prevent-off-to-the-right"
  );

  $('label[for="desired_job_change_season1"]').addClass(
    "ie11-prevent-off-to-the-right"
  );
}

function removeIe11PreventOffToTheRight() {
  $('label[for="desired_employment_form1"]').removeClass(
    "ie11-prevent-off-to-the-right"
  );

  $('label[for="desired_job_change_season1"]').removeClass(
    "ie11-prevent-off-to-the-right"
  );
}

function moveNextStep(currentStepNumber) {
  disableTabIndex();
  const nextStepNumber = currentStepNumber + 1;

  changeTabIndex(nextStepNumber);

  $("#step-" + nextStepNumber).addClass("current");

  $(".form-button.prev").show();

  $(".form-content").animate(
    {
      scrollLeft: $(".form-content").width() * currentStepNumber
    },
    400,
    function() {
      $(".form-button").prop("disabled", false);
      changeTabIndex(nextStepNumber);
    }
  );

  if (nextStepNumber === 3) {
    $(".form-button.next").hide();

    $(".submit").show();
  } else {
    $(".submit").hide();

    $(".form-button.next").show();
  }
}

function movePrevStep(currentStepNumber) {
  disableTabIndex();
  const prevStepNumber = currentStepNumber - 1;

  $("#step-" + prevStepNumber).addClass("current");

  const prevScrollValue =
    parseInt($(".form-content").width() * currentStepNumber) -
    parseInt($(".form-content").width() * 2);

  if (currentStepNumber === 2) {
    $(".submit").hide();

    $(".form-button.prev").hide();

    $(".form-button.next").show();
  } else {
    $(".submit").hide();

    $(".form-button.next").show();

    $(".form-button.prev").show();
  }

  $(".form-content").animate(
    {
      scrollLeft: prevScrollValue
    },
    400,
    function() {
      changeTabIndex(prevStepNumber);
    }
  );

  $(".form-button.next").text("次へ ▶︎");
}

function validation(currentStepNumber) {
  const inputErrorItem = [];

  switch (currentStepNumber) {
    case 1:
      //必須チェック

      if (checkRequireItemForStep1(inputErrorItem).length) {
        for (let i = 0; i < inputErrorItem.length; i++) {
          $("[name=" + inputErrorItem[i] + "]")
            .first()
            .before(
              '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">必須入力項目です</span></span></div>'
            );
        }

        return false;
      }

      return true;

    case 2:
      //必須チェック

      if (checkRequireItemForStep2(inputErrorItem).length) {
        for (let i = 0; i < inputErrorItem.length; i++) {
          $("[name=" + inputErrorItem[i] + "]").before(
            '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">必須入力項目です</span></span></div>'
          );
        }

        return false;
      }

      //ふりがなチェック

      if (!isFurigana($("[name=furigana]").val())) {
        $("[name=furigana]").before(
          '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">正しく入力してください</span></span></div>'
        );

        return false;
      }

      //電話番号チェック

      if (
        !isTelephoneNumber(removeHyphen($("[name=telephone_number]").val()))
      ) {
        $("[name=telephone_number]").before(
          '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">正しく入力してください</span></span></div>'
        );

        return false;
      }

      //スパマーチェック

      if (isSpammer(spammerList, $("[name=applicant_name]").val())) {
        $("[name=applicant_name]").before(
          '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">正しく入力してください</span></span></div>'
        );

        return false;
      }

      return true;

    case 3:
      //メールアドレスチェック

      if ($("[name=email_address]").val() !== "") {
        if (!isEmail($("[name=email_address]").val())) {
          $("[name=email_address]").before(
            '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">正しく入力してください</span></span></div>'
          );

          return false;
        }
      }

      //スパムチェック

      if (isSpam(spamList, $("[name=email_address]").val())) {
        $("[name=email_address]").before(
          '<div class="tooltip-wrapper"><span class="tooltip"><span class="text">正しく入力してください</span></span></div>'
        );

        return false;
      }

      return true;
  }
}

function checkRequireItemForStep1(inputErrorItem) {
  if (isEmpty($("[name=desired_employment_form]:checked").val()))
    inputErrorItem.push("desired_employment_form");

  if (isEmpty($("[name=desired_job_change_season]:checked").val()))
    inputErrorItem.push("desired_job_change_season");

  return inputErrorItem;
}

function checkRequireItemForStep2(inputErrorItem) {
  if (isEmpty($("[name=applicant_name]").val()))
    inputErrorItem.push("applicant_name");

  if (isEmpty($("[name=furigana]").val())) inputErrorItem.push("furigana");

  if (isEmpty($("[name=telephone_number]").val()))
    inputErrorItem.push("telephone_number");

  return inputErrorItem;
}

function isEmpty(value) {
  return !value;
}

function removeHyphen(tel) {
  return tel.replace(/[━.*‐.*―.*－.*\-.*ー.*\-]/gi, "");
}

function isTelephoneNumber(tel) {
  if (!tel.match(/^(0[5-9]0[0-9]{8}|0[1-9][1-9][0-9]{7})$/)) {
    return false;
  }

  return true;
}

function isEmail(email) {
  return email.match(/.+@.+\..+/) ? true : false;
}

function isSpam(spamList, email) {
  for (let i = 0; i < spamList.length; i++) {
    if (~email.indexOf(spamList[i])) {
      return true;
    }
  }

  return false;
}

function isSpammer(spammerList, applicantName) {
  for (let i = 0; i < spammerList.length; i++) {
    if (~applicantName.indexOf(spammerList[i])) {
      return true;
    }
  }

  return false;
}

function isFurigana(furigana) {
  return furigana.match(/[^ぁ-んァ-ンー　\s]+/) ? false : true;
}

function hideToolTip() {
  setTimeout(function() {
    $(".tooltip").hide(200);
  }, 2000);
}

function changeTabIndex(stepNumber) {
  switch (stepNumber) {
    case 1:
      $(":radio").prop("tabindex", "0");
      $(":button").prop("tabindex", "0");
      break;

    case 2:
      $("[name='applicant_name']").prop("tabindex", "0");
      $("[name='furigana']").prop("tabindex", "0");
      $("[name='telephone_number']").prop("tabindex", "0");
			$(":button").prop("tabindex", "0");
      break;

    case 3:
      $("[name='email_address']").prop("tabindex", "0");
      $("[name='desired_workplace']").prop("tabindex", "0");
      $("[name='other']").prop("tabindex", "0");
			$(":button").prop("tabindex", "0");
      break;
  }
}

function disableTabIndex() {
  $(":input").prop("tabindex", "-1");
  $(":radio").prop("tabindex", "-1");
}
