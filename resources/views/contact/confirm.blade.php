<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contact</title>
  <style>
  .contact{
    width:55%;
    margin:0 auto;
    padding:20px 0;
  }
  .contact-ttl{
    font-size:20px;
    font-weigth:bold;
    margin-bottom:40px;
    text-align:center;
  }
  .contact-table{
    width:100%;
    margin-bottom:20px;
  }
  .contact-td{
    display:f;
    padding: 13px;
    
  }
  .form-text{
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    height: 20px;
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
.top{
  display: block;
  text-align:center;
  font-size:14px;
}
  </style>
</head>
<body>
  <div class="contact">
  <h1 class="contact-ttl">内容確認</h1>
  <form action="/contact/thanks" method="POST">
  　　@csrf
    <table class="contact-table">
    
      <tr>
      
       <th class="contact-item">お名前<</th>
       <td class="contact-td">
       {{$inputs['fullname']}}
       <input type="hidden" name="fullname" value="{{ old('fullname') }}"/>
       </td>
      </tr>
      <tr>
      <th class="contact-item">性別</th>
  <td class="contact-td">
    {{$inputs['gender']}}
    <label><input type="hidden" name="gender" value="{{ old('gender') }} <?php if($inputs['gender'] == "1")?>">男性　</label>
    <label><input type="hidden" name="gender" value="{{ old('gender') }} <?php if($inputs['gender']== "2")?>">女性　</label>
    
  </td></tr>
  <tr>
  <th class="contact-item">メールアドレス</th>
  <td class="contact-td">
    {{$inputs['email']}}
    <input type="hidden" value="{{$inputs['email']}}" name="email">
  </td>
  </tr>
  <tr>
  <th class="contact-item">郵便番号</th>
  <td class="contact-td">
  {{$inputs['postcode']}}
  <input type="hidden" value="{{$inputs['postcode']}}" name="postcode">
  </td>
  </tr>
  <tr>
  <th class="contact-item">住所</th>
  <td class="contact-td">
    {{$inputs['address']}}
  <input type="hidden" value="{{$inputs['address']}}" name="address">
  </td>
  </tr>
  <tr>
  <th class="contact-item">建物名</th>
  <td class="contact-td">
    {{$inputs['building_name']}}
  <input type="hidden" value="{{$inputs['building_name']}}" name="building_name">
  </td>
  </tr>
  <tr>
  <th class="contact-item">ご意見</th>
  <td class="contact-td">
    {{$inputs['opinion']}}
  <input type="hidden" value="{{$inputs['opinion']}}" name="opinion">
  </td>
</tr>

    </table>
    <input type="submit" class="btn" value="送信">
    <div class="top">
    
    <a type="submit" onclick=history.back()>修正する</a></div>
  </form>
  
</body>
</html>