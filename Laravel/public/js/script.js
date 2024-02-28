
//画像アップロード///////////////
$("#image").on("change", function (e) {

  // 2. 画像ファイルの読み込みクラス
  var reader = new FileReader();

  // 3. 準備が終わったら、id=sample1のsrc属性に選択した画像ファイルの情報を設定
  reader.onload = function (e) {
    $("#create_image").attr("src", e.target.result);
  }

  // 4. 読み込んだ画像ファイルをURLに変換
  reader.readAsDataURL(e.target.files[0]);
});


//メニュー//////////////
// $('.header_menu').click(function () {
//   $(this).next('.menu').toggleClass('active');
// });

$(function () {
  //クリックで動く
  $('.header_menu').click(function () {
    $(this).toggleClass('active_icon');
    $('.menu').toggleClass('active');
  });
});
