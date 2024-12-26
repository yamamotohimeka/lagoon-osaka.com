<?php 
$templete = 'form';
  
session_start();
$token = sha1(uniqid(rand(), true));
$_SESSION['key'] = $token;

?>


<div class="form">
  <form method="post" class="validationForm" id="the-form">

    <div class="form-box ">
      <label class="form-box-label-text hissu">お名前（仮名可）</label>
      <input type="text" name="name" value="" class="maxlength" data-maxlength="10">
    </div>


    <div class="form-box">
      <label class="form-box-label-text">電話番号</label>
      <input type="text" class="telephone required" name="tel" value="" size="40" id="tel">
    </div>

    <div class="form-box">
      <label class="form-box-label-text hissu">メールアドレス</label>
      <input type="email" class="required email" name="email" value="" id="email">
    </div>

    <div class="form-box">
      <label>年齢</label>
      <div class="form-box-input">
        <input type="number" class="age" name="age" value="" min="18">
      </div>
    </div>

    <div class="form-box form-box-select">
      <label class="form-box-label-text hissu">身分証明書</label>
      <div class="form-box-input">
        <select name="myid[]">
          <option value="">下記より選択ください▽</option>
          <option value="免許証">免許証</option>
          <option value="マイナンバーカード">マイナンバーカード</option>
          <option value="パスポート">パスポート</option>
          <option value="住基カード">住基カード</option>
          <option value="その他">その他</option>
        </select>
      </div>
    </div>


    <div class="form-box form-box-select">
      <label class="form-box-label hissu">希望勤務地</label>
      <div class="form-box-input">
        <select name="workplace[]">
          <option value="">下記より選択ください▽</option>
          <option value="日本橋">日本橋</option>
          <option value="梅田">梅田</option>
          <option value="難波">難波</option>
          <option value="京橋">京橋</option>
          <option value="谷九">谷九</option>
          <option value="天王寺">天王寺</option>
        </select>
      </div>
    </div>

    <div class="form-box">
      <label>質問等</label>
      <textarea name="text" cols="40" rows="10"></textarea>
    </div>


    <div class="form-submit">
      <input type="submit" value="送信" class="submit-btn" id="submit">
      <input type="hidden" name="token" value="<?= $token ?>">
    </div>
  </form>
</div>


<div id="form-load">
  <div class="load">
  </div>
  <div class="load1">
    <br>
    <div class="loader"></div>
    <p>送信中</p>
  </div>
</div>

<!-- 結果メッセージ -->
<div id="result"></div><!-- /#result -->

<script type="module" src="php_mailer/js/form.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcgBDkkAAAAAKHj4aObrK7ovarE4jLvtsb_EGLS"></script>