{{-- <!DOCTYPE html>
<html class="h-100" lang="en"> --}}
@extends('layouts.admin')
@section('content')

    <head>
        {{-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1"> --}}
        {{-- <title>soengsouy.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png"> --}}
        {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>

    </head>

    {{-- <body class="h-100"> --}}

    <!--*******************
                                Preloader start
                            ********************-->
    {{-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div> --}}
    <!--*******************
                                Preloader end
                            ********************-->

    <div class="login-form-bg ">
        <div class="content-header">
            <div class="container-fluid mt-2">
                <div class="row mb-2">
                    <div class="col-sm-6 ">
                        <div>
                            <h1 class="m-0"
                                style="font-family: 'Kanit', sans-serif; font-weight:600; color: #164176;"><img
                                    src="{{ asset('images/absent.png') }}" alt="Infinity"
                                    class="mr-3">เพิ่มพนักงาน
                            </h1>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="form-input-content">
            <div class="card login-form mb-0" style="margin-left: 200px;margin-right: 200px;margin-top: 20px">
                <div class="card-body pt-5 " style="margin-left: 80px;">
                    {{-- error --}}
                    @if (\Session::has('error'))
                        <div id="error" class="text-danger">
                            {!! \Session::get('error') !!}
                        </div>
                    @endif
                    <form class="mt-5 mb-5 login-input" action="{{ route('registerApi') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputName">ชื่อ</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="ชื่อ">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputLastname">นามสกุล</label>
                                <input type="text" class="form-control @error('lastName') is-invalid @enderror"
                                    name="lastName" value="{{ old('lastName') }}" placeholder="นามสกุล">
                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputemail">email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputnumberPhone">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control @error('numberPhone') is-invalid @enderror"
                                name="numberPhone" value="{{ old('numberPhone') }}" placeholder="เบอร์โทรศัพท์">
                            @error('numberPhone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputPersoncardID">เลขประจำตัวบัตรประชาชน</label>
                            <input type="text" class="form-control @error('PersoncardID') is-invalid @enderror"
                                name="PersoncardID" value="{{ old('PersoncardID') }}"
                                placeholder="เลขประจำตัวบัตรประชาชน">
                            @error('PersoncardID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="inputpassword">รหัสผ่าน</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                name="password" value="{{ old('password') }}" placeholder="รหัสผ่าน">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputc_password">ยืนยันรหัสผ่าน</label>
                            <input type="password" class="form-control  @error('c_password') is-invalid @enderror"
                                name="c_password" value="{{ old('c_password') }}" placeholder="ยืนยันรหัสผ่าน">
                            @error('c_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputBanknumber">เลขบัญชีธนาคาร</label>
                            <input type="text" class="form-control @error('Banknumber') is-invalid @enderror"
                                name="Banknumber" value="{{ old('Banknumber') }}" placeholder="เลขประจำตัวบัตรประชาชน">
                            @error('Banknumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputImg-bank">รูปสมุดบัญชีธนาคาร</label>
                            {{-- <input type="file" class="form-control-file" name="exampleFormControlFile1" style="margin-top: 10px;"> --}}
                            <input type="file" class="form-control-file  @error('Imgbank') is-invalid @enderror"
                                id="Imgbank" name="Imgbank" value="{{ old('Imgbank') }}"
                                placeholder="รูปสมุดบัญชีธนาคาร">
                            @error('Imgbank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputSalary">ฐานเงินเดือน</label>
                            <input type="text" class="form-control @error('Salary') is-invalid @enderror" name="Salary"
                                value="{{ old('Salary') }}" placeholder="10000">
                            @error('Salary')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputDepartment">แผนก</label>
                                <select id="inputDepartment" class="form-control">
                                    <option selected>เลือกแผนก</option>
                                    <option>UX/UI</option>
                                    <option>Frontend</option>
                                    <option>Backend</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSex">เพศ</label>
                                <select id="inputSex" class="form-control">
                                    <option selected>เลือกเพศ</option>
                                    <option>ชาย</option>
                                    <option>หญิง</option>
                                    <option>LGBTQ+</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row offset-1">
                            <label class="col-sm-3 col-form-label"
                                style="margin-bottom:8px; font-family: 'Kanit', sans-serif; font-weight:600;">วันที่เริ่มงาน</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="datepicker4"
                                    value="<?= date('d-m-y', strtotime(date('Y-m-d'))) ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div style="width: 130px; margin-left: 100px;">
                                <button class="btn login-form__btn submit w-100">บันทึก</button>
                            </div>
                            <div style="width: 130px;margin-left: 50px;">
                                <button class=" btn  w-100">ยกเลิก</button>
                            </div>
                        </div>
                    </form>
                    {{-- <p class="mt-5 login-form__footer">Have account <a href="{{ route('login') }}"
                            class="text-primary">Sign Up </a> now</p>
                    </p> --}}
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
                                Scripts
                            ***********************************-->
    {{-- <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script> --}}
    <script type="text/javascript">
        var date_start = new Date();
        date_start.setDate(date_start.getDate());
        $('#datepicker4').datepicker({
            format: 'dd-mm-yyyy',
            language: 'th',
            startDate: date_start,
        });
    </script>
    </body>

    </html>
@endsection
