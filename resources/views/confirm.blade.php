<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>内容確認</title>
</head>
<body>
  <header class="header">
    <div class="header_title">
      <h1>内容確認</h1>
    </div>
  </header>
  <div class="form-confirm">
      <div class="confirm-item">
        <div class="form-item">
          <label for="fullname">お名前</label>
        </div>
        <div class="input_data">
          {{ $inputs['lastname'] }} {{ $inputs['firstname'] }}
          <input type="hidden" name="fullname" value="{{ $inputs['lastname'] }}. .{{ $inputs['firstname'] }} " >
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="gender">性別</label>
        </div>
        <div class="input_data">
          @if (!empty($inputs['gender'])) 
            @if ($inputs['gender'] === '1')
              男性
            @elseif ($inputs['gender'] === '2')
              女性
            @endif
          @else
            男性
          @endif
          <input type="hidden" id="gender" name="gender" value="{{ isset($inputs['gender']) ? $inputs['gender'] : '' }}">
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="email">メールアドレス</label>
        </div>
        <div class="input_data">
          {{ $inputs['email'] }}
          <input type="hidden" name="email" value="{{ $inputs['email'] }}" >
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="postcode">郵便番号</label>
        </div>
        <div class="input_data">
          {{ $inputs['postcode'] }}
          <input type="hidden" name="postcode" value="{{ $inputs['postcode'] }}" >
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="address">住所</label>
        </div>
        <div class="input_data">
          {{ $inputs['address'] }}
          <input type="hidden" name="address" value="{{ $inputs['address'] }}" >
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="building_name">建物名</label>
        </div>
        <div class="input_data">
          {{ $inputs['building_name'] }}
          <input type="hidden" name="building_name" value="{{ $inputs['building_name'] }}" >
        </div>
      </div>
      <div class="confirm-item">
        <div class="form-item">
          <label for="opinion" >ご意見</label>
        </div>
        <div class="input_data">
          {!! nl2br(e($inputs['opinion'])) !!}
          <input type="hidden" name="opinion" value="{{ $inputs['opinion'] }}" >
        </div>
      </div>
      <fotter class="fotter">
        <form method="POST" action="/contact/confirm">
          @csrf
          @method('POST')
          <!-- input fields -->
        <input class="next-btn" type="submit" value="送信"/>
        <input class="fix-btn" type="button" value="修正する"/>
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </form>
      </fotter>
  </div>
</body>

</html>