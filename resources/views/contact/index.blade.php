<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

  <style>
  body{
    margin: 0;
  }
  .contact{
    width:55%;
    margin:0 auto;
    padding:20px 0;
  }
  .contact-ttl{
    font-size:20px;
    font-weigth:bold;
    margin-bottom:20px;
    text-align:center;
  }
  .contact-table{
    width:100%;
    margin-bottom:15px;
  }
  .contact-td{
    display:f;
    padding: 4px;
    
  }
  .form-text{
    width: 100%;
    height: 30px;;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    
  }
  .contact-sex + .contact-sex {
    margin-left: 10px;
}

.contact-sex-txt {
    margin-left: 5px;
}
.form-textarea {
    width: 100%;
    padding: 10px;
    height: 200px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
.etc{
  font-size:14px;
  color: #bbb;
  margin:7px;
}
.span-ttl{
  margin-left:10px;
  color:red;
}
.btn{
  width: 180px;
  height: 40px;
  background-color:black;
  color:white;
  border: 1px solid black;
  font-size:15px;
  font-weight: bold;
  margin:auto;
  display:block;
  border-radius: 3px;
}
  </style>
</head>
<body>
  <div class="contact">
  <h1 class="contact-ttl">お問い合わせ</h1>
  <form action="/contact/confirm" method="POST">
  @csrf
    <table class="contact-table">
      <tr>
       <th class="contact-item">お名前<span class="span-ttl">※</span></th>
       <td class="contact-td">
       <input type="text" name="fullname" class="form-text"　value="<?php if(isset($_SESSION['fullname'])){echo $_SESSION['fullname'];} ?>">
       <p class="etc">例）山田　太郎</p>
       @if ($errors->has('fullname'))
        <p class="error-message">{{ $errors->first('fullname') }}</p>
    @endif
       </td>
      </tr>
      <th class="contact-item">性別<span class="span-ttl">※</span></th>
  <td class="contact-td">
    <label class="contact-sex">
      <input type="radio" name="gender" checked="checked"　value="3" />
      <span class="contact-sex-txt">男性</span>
    </label>
    <label class="contact-sex">
      <input type="radio" name="gender" value="2" />
      <span class="contact-sex-txt">女性</span>
    </label>
    @if ($errors->has('gender'))
        <p class="error-message">{{ $errors->first('gender') }}</p>
    @endif
  </td>
  <tr>
  <th class="contact-item">メールアドレス<span class="span-ttl">※</span></th>
  <td class="contact-td">
    <input type="email" name="email" class="form-text" value="<?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?>"/>
    <p class="etc">例）test@example.com</p>
    @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
    @endif
  </td>
  </tr>
  <tr>
  <th class="contact-item">郵便番号<span class="span-ttl">※</span></th>
  <td class="contact-td">
  <input 　type="text" name="postcode"  onKeyUp="AjaxZip3.zip2addr('postcode', '', 'address', 'address');" class="form-text" value="<?php if(isset($_SESSION['postcode'])){echo $_SESSION['postcode'];} ?>"/>
    <p class="etc">例）123-4567</p>
    @if ($errors->has('postcode'))
        <p class="error-message">{{ $errors->first('postcode') }}</p>
    @endif
  </td>
  </tr>
  <tr>
  <th class="contact-item">住所<span class="span-ttl">※</span></th>
  <td class="contact-td">
    <input type="text" name="address" class="form-text" value="<?php if(isset($_SESSION['address'])){echo $_SESSION['address'];} ?>"/>
    <p class="etc">例）東京都渋谷区千駄ヶ谷1-2-3</p>
    @if ($errors->has('address'))
        <p class="error-message">{{ $errors->first('address') }}</p>
    @endif
  </td>
  </tr>
  <tr>
  <th class="contact-item">建物名</th>
  <td class="contact-td">
    <input type="text" name="building_name" class="form-text" />
    <p class="etc">例）千駄ヶ谷マンション101</p>
  </td>
  </tr>
  <tr>
  <th class="contact-item">ご意見<span class="span-ttl">※</span></th>
  <td class="contact-td">
    <textarea name="opinion" class="form-textarea" value="<?php if(isset($_SESSION['opinion'])){echo $_SESSION['opinion'];} ?>"></textarea>
    @if ($errors->has('opinion'))
        <p class="error-message">{{ $errors->first('opinion') }}</p>
    @endif
  </td>
</tr>
    </table>
    <input type="submit" class="btn" value="確認">
    
  </form>
  <?php session_destroy(); ?>
  </div>
</body>
</html>