<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container" style="margin-top:50px;">
      <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="{{ url('/')}}">検索と一覧</a>
    </li>
  </ul>
      @yield('content')
    </div>
</body>
</html>