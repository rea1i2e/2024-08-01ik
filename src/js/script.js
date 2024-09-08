/* ------------------------------
スクロールバーの幅をカスタムプロパティ--scrollbar-widthに格納
------------------------------ */
// スクロールバーの幅をCSSに格納する関数
const updateScrollBarWidth = () => {
  const scrollBarWidth = window.innerWidth - document.documentElement.clientWidth
  document.documentElement.style.setProperty('--scrollbar-width', `${scrollBarWidth}px`)
}

// debounce関数（指定された時間内に何度も呼び出された場合に、最後の呼び出しのみを実行）
function debounce(callback, delay) {
  let timeout = null;

  return function(...args) {
    if (timeout !== null) {
      cancelAnimationFrame(timeout);
    }
    timeout = requestAnimationFrame(() => {
      callback.apply(this, args);
    });
  };
}

window.addEventListener('resize', debounce(updateScrollBarWidth))
window.addEventListener('load', updateScrollBarWidth)

/* ------------------------------
ドロワーメニュー
------------------------------ */
const menuButton = document.getElementById("js-menu");
const drawerMenu = document.getElementById("js-drawer");
const body = document.body;

function openDrawerMenu() {
  menuButton.setAttribute("aria-expanded", "true");
  drawerMenu.setAttribute("aria-hidden", "false");
  body.classList.add("is-drawerActive");
  body.style.overflow = "hidden";
}

function closeDrawerMenu() {
  menuButton.setAttribute("aria-expanded", "false");
  drawerMenu.setAttribute("aria-hidden", "true");
  body.classList.remove("is-drawerActive");
  body.style.overflow = "visible";
}

menuButton.addEventListener("click", function () {
  if (menuButton.getAttribute("aria-expanded") === "true") {
    closeDrawerMenu();
  } else {
    openDrawerMenu();
  }
});

const anchorLinks = document.querySelectorAll('a[href^="#"]');

anchorLinks.forEach(function (link) {
  link.addEventListener("click", function () {
    closeDrawerMenu();
  });
});

document.addEventListener("click", function (event) {
  if (
    (!drawerMenu || (drawerMenu && !drawerMenu.contains(event.target))) &&
    (!menuButton || (menuButton && !menuButton.contains(event.target)))
  ) {
    closeDrawerMenu();
  }
});

window.addEventListener('resize', function() {
  if (window.innerWidth >= 768) {
    closeDrawerMenu();
  }
});

/* ------------------------------
トップ・スライダー
------------------------------ */
const mvSwiper = new Swiper(".js-mv-swiper", {
  loop: true,
  // autoplay: {
  //   delay: 2000 // 2秒ごに次のスライド
  // },
  effect: "fade",
  fadeEffect: {
    crossFade: true
  },
  speed: 3000 // 3秒かけて切り替え
});

