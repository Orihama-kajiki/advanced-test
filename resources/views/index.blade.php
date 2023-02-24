<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css" />
  <link rel="stylesheet" href="/css/style.css" />
  <title>お問い合わせフォーム</title>
</head>
<body>
  <header class="header">
    <div class="header_title">
      <h1>お問い合わせ</h1>
    </div>
  </header>
  <div class="form-group">
    <form method="POST" action="{{ route('contact.confirm')}}">
      @csrf
      <div class="form-name">
        <div class="form-item">
          <label for="fullname">お名前<span class="required">※</span></label>
        @error('fullname')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="input_last_name">
          <input type="text" class="input_last" id="lastname" name="lastname" value="{{ old('lastname') }}">
        </div>
        <div class="input_first_name">
          <input type="text" class="input_first" id="firstname" name="firstname" value="{{ old('firstname') }}">
        </div>
      </div>
      <div class="form-gender">
        <div class="form-item">
          <label for="gender">性別<span class="required">※</span></label>
        @error('gender')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="radio-btn">
          <input type="radio" id="gender-male" name="gender" value="1" {{ old('gender','1')=='1' ? 'checked' : '' }}>
          <span class="radio-btn-DummyInput"></span>
          <label for="gender-male" class="label-text">男性</label>
          <input type="radio" id="gender-female" name="gender" value="2" {{ old('gender')=='2' ? 'checked' : '' }}>
          <span class="radio-btn-DummyInput"></span>
          <label for="gender-female" class="label-text">女性</label> 
        </dev>
      </div>
      </div>
      <div class="form-email">
        <div class="form-item">
          <label for="email">メールアドレス<span class="required">※</span></label>
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="input_email_form">
          <input type="text" class="input_email" id="email" name="email" value="{{ old('email') }}">
        </div>
      </div>
      <div class="form-postcode">
        <div class="form-item">
          <label for="postcode">郵便番号<span class="required">※</span></label>
        @error('postcode')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <p class="post-mark">〒</p>
        <div class="input_postcode_form">
          <input type="text" class="input_postcode" id="postcode" name="postcode" value="{{ old('postcode') }}">
        </div>
      </div>
      <div class="form-address">
        <div class="form-item">
          <label for="address">住所<span class="required">※</span></label>
        @error('address')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="input_address_form">
          <input type="text" class="input_address" id="address" name="address" value="{{ old('address') }}">
        </div>
      </div>
      <div class="form-building_name">
        <div class="form-item">
          <label for="building_name">建物名</label>
        @error('building_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="input_building_name_form">
          <input type="text" class="input_building_name" id="building_name" name="building_name" value="{{ old('building_name') }}">
        </div>
      </div>     
      <div class="form-opinion">
        <div class="form-item">
          <label for="opinion" >ご意見<span class="required">※</span></label>
        @error('opinion')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <textarea class="input_opinion" id="opinion" name="opinion" cols="30" rows="4" maxlength="120">{{ old('opinion') }}</textarea>
      </div>
      <fotter class="fotter">
        <input class="next-btn" type="submit" value="確認">
      </fotter>
    </form>
  </div>
</body>
</html>