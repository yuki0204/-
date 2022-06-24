$(window).on("load", function () {
  // slick
  $(".c-slider").slick({
    arrows: false,
    autoplay: true,
  });

  // fv超えたらレイアウト変更
  const fvHeight = $(".l-top").outerHeight() - $(".l-header").outerHeight();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() >= fvHeight) {
      $(".l-header").addClass("is-under-fv");
    } else {
      $(".l-header").removeClass("is-under-fv");
    }
  });

  // スムーススクロール
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    console.log(position);
    // 固定ヘッダーの高さ分、遷移先をずらす
    position = position - $(".l-header").outerHeight();
    console.log(position);
    $("html, body").delay(200).animate({ scrollTop: position }, 400, "swing");
    return false;
  });

  // ドロワーメニュー
  $(".c-drawer-toggle").click(function () {
    $(".c-drawer-toggle,.c-header-right").toggleClass("is-open");
  });

  // ドロワーのメニューをクリックしたらドロワー閉じる
  $(".c-header-menu__link").click(function () {
    $(".is-open").removeClass("is-open");
  });
});
