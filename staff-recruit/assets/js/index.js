document.addEventListener("DOMContentLoaded", function () {
  setupPageTopButton();
});

// ページトップボタン処理
function setupPageTopButton() {
  const pageTopBtn = document.querySelector(".pagetop-button");
  if (pageTopBtn) {
    pageTopBtn.addEventListener("click", function (event) {
      event.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
}
