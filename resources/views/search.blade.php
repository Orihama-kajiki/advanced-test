<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384"/>

  <title>管理システム</title>
</head>
<body>
  <header class="header">
    <div class="header_title">
      <h1>管理システム</h1>
    </div>
  </header>
    <div class="container">
      <form action="" method="get">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">お名前</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name">
          </div>
        </div>
        <div class="form-group row">
          <label for="created_at_from" class="col-sm-2 col-form-label">登録日</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="created_at_from" name="created_at_from">
          </div>
          <span class="col-sm-1 text-center">~</span>
          <div class="col-sm-4">
            <input type="date" class="form-control" id="created_at_to" name="created_at_to">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">メールアドレス</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">性別</label>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="all-gender" value="all" checked>
              <label class="form-check-label" for="all-gender">全て</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male-gender" value="male">
              <label class="form-check-label" for="male-gender">男性</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female-gender" value="female">
              <label class="form-check-label" for="female-gender">女性</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-primary">検索</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>