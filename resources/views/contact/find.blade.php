<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  .blade{
    
    width:60%;
    position: absolute;
      
      left: 50%;
      transform: translate(-50%, 0%);
  }
  .td{
    border:1px solid black;
    margin-bottom: 20px;
  }
  label{
    font-weight:bold;
  }
  .form-item{
    width: 500px;
    display: flex;
    justify-content:space-between;
    margin: 20px;
    height: 40px;

  }
  .name{

    width: 200px;
  }
  .ttl{
    text-align:center;
    font-size:25px;
  }
  .btn{
  width: 180px;
  height: 50px;
  background-color:black;
  color:white;
  border: 1px solid black;
  font-size:18px;
  font-weight: bold;
  margin:auto;
  display:block;
  border-radius: 3px;
  }
  .btnn{
    text-align:center;
    display:block;
    margin-top: -16px;
  }
  .o{
    border-bottom: 1px solid #cccccc;
  }
  svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    }
  table{
    width: 100%;
    margin-top: 40px;
    border-collapse: collapse;
  }
  td{
    text-align:center;
    padding: 5px;
  }
  th{
    
    border-bottom: 1px solid black;
  }
.button-delete{
  background-color:black;
  color:white;
  border: 1px solid black;
  font-size:13px;
  font-weight: bold;
  padding: 6px;
  border-radius: 3px;
}
  </style>
</head>
<body>

  <div class="blade">
  <h1 class="ttl">管理システム</h1>
  <div class="td">
  <form action="/contact/find" method="POST">
  @csrf
  <div class="form-item">
  <label>名前</label>
  <input type="text" class="name" name="fullname">
  </div>
  <div class="form-item">
  <label>登録日</label>
  <input type="date" class="name" name="before"><span class="date">~</span><input type="date" class="name" name="after">
  </div>
  <div class="form-item">
  <label for="">メールアドレス</label>
  <input type="text" class="name" name="email">
  </div>
  <div class="form-item">
<label for="">性別</label>
  <div class="radio">
  <label for="">全部</label>
  <input type="radio" class="" name="gender"></div>
  <div class="radio">
  <label for="">男性</label>
  <input type="radio" class="" name="gender"></div>
  <div class="radio">
  <label for="">女性</label>
  <input type="radio" class="" name="gender"></div>
  </div>
  <button type="submit" class="btn">検索</button></br>
  <a href="/contact/find" class="btnn">リセット</a>
  
  </form>
  </div>


<table class="table">
{{ $contacts->links() }}
@if(!empty($contacts))
  <tr class="o">
    <th>ID</th><th colspan="1">お名前</th><th colspan="1">性別</th><th colspan="1">メールアドレス</th><th colspan="1">ご意見</th><th></th>
  </tr>
  @foreach($contacts as $contact)
  <tr>
  <td>{{$contact -> id}}</td><td>{{$contact -> fullname}}</td><td>{{$contact -> gender}}</td><td>{{$contact -> email}}</td><td><?php echo mb_strimwidth("{$contact -> opinion}", 0, 25, "...");?></td>
  <td><form action="{{ route('contact.delete', ['id' => $contact->id]) }}" method="post">
                @csrf
                <button class="button-delete">削除</button></td>
  </tr>
  @endforeach
</table>
@endif
</div>
</div>
</body>
</html>
