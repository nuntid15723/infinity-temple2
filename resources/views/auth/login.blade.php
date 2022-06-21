<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Mitr:wght@200&family=Prompt:wght@300&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row ">

            {{-- ***********image body************** --}}

            <div class="col-md-6">

                <img src="/images/photoLogin.svg" class="rounded float-left" alt="">

            </div>
            <div class="col-md-6">
                <div class="col-md-4 offset-md-3">
                    <br />
                    <br />
                    <br />
                    <a  href="{{ url('home') }}"><img src={{ '/images/infinityV2.png' }} style="width: 220px;" alt=""></a>
                </div>

                <div class="col-md-4 offset-3 ">
                    <div class="card-header bg-white">
                        <h1 style="margin: 10px; font-family: 'Kanit', sans-serif; font-weight:600; ">
                            {{ __('เข้าสู่ระบบ') }}</h1>
                    </div>
                </div>

                <br />
                <br />
                <div class="col" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                    {{-- <div class="card-body"> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4" style="margin: auto;">
                            <div class="col-md-6 offset-md-2">
                                <input id="numberPhone" type="text"
                                    class="form-control @error('numberPhone') is-invalid @enderror"
                                    placeholder="เบอร์โทร" name="numberPhone" value="{{ old('numberPhone') }}"
                                    required autocomplete="numberPhone" autofocus>
                                @error('numberPhone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4" style="margin: auto;">
                            <div class="col-md-6 offset-2">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    placeholder="รหัสผ่าน" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="margin: auto;">
                            <div class="col-md-6 offset-2 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember"
                                        style="font-family: 'Prompt', sans-serif; font-weight:400;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div>
                                <div class="col-md-4 offset-md-3" style="margin: auto;">
                                    <button type="submit" class="btn btn-info"
                                        style="color: #fff;background-color: #164176;border-color: #164176;  border-radius: 30px; width: 150px; height: 40px;">
                                        {{ __('เข้าสู่ระบบ') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
