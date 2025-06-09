// アコーディオン機能の実装
document.addEventListener("DOMContentLoaded", function () {
  // 全てのアコーディオンボタンを取得
  const accordionButtons = document.querySelectorAll(".accordion__button");

  // 各ボタンにクリックイベントを追加
  accordionButtons.forEach((button) => {
    button.addEventListener("click", function () {
      // クリックされたボタンの親要素（.accordion）を取得
      const accordion = this.closest(".accordion");
      // 対応するinner要素を取得
      const accordionInner = accordion.querySelector(".accordion__inner");

      // 現在の状態を確認
      const isOpen = accordion.classList.contains("is-open");

      // 他の開いているアコーディオンを閉じる（オプション）
      // 複数同時に開きたい場合は以下のコードをコメントアウト
      accordionButtons.forEach((otherButton) => {
        if (otherButton !== this) {
          const otherAccordion = otherButton.closest(".accordion");
          const otherInner = otherAccordion.querySelector(".accordion__inner");
          otherAccordion.classList.remove("is-open");
          otherInner.style.maxHeight = null;
        }
      });

      // クリックされたアコーディオンの開閉を切り替え
      if (isOpen) {
        // 閉じる
        accordion.classList.remove("is-open");
        accordionInner.style.maxHeight = "0px";
        // 少し遅延してからnullに設定（アニメーション完了後）
        setTimeout(() => {
          if (!accordion.classList.contains("is-open")) {
            accordionInner.style.maxHeight = null;
          }
        }, 400);
      } else {
        // 開く
        accordionInner.style.maxHeight = "0px";
        accordion.classList.add("is-open");

        // 次のフレームで高さを設定（レンダリング後）
        requestAnimationFrame(() => {
          accordionInner.style.maxHeight = accordionInner.scrollHeight + "px";

          // アニメーション完了後にautoに設定（コンテンツが動的に変わる場合の対応）
          setTimeout(() => {
            if (accordion.classList.contains("is-open")) {
              accordionInner.style.maxHeight = "none";
            }
          }, 400);
        });
      }
    });
  });
});
