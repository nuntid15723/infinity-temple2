@extends('layouts.admin')
@section('content')
    {{-- <style>
    body{
        font-family: 'Kanit', sans-serif; font-weight:600;
    }
</style> --}}


    <head>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            < link href = "css/bootstrap-datetimepicker.css"
            rel = "stylesheet" >
                <
                script src = "js/bootstrap-datetimepicker.min.js" >
                <
                /> <link rel = "stylesheet"
            href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
            integrity = "sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
            crossorigin = "anonymous"
            referrerpolicy = "no-referrer" >
                <
                script src = "https://kit.fontawesome.com/a076d05399.js"
            crossorigin = "anonymous" >
                <
                />
            {{-- js --}}
                <
                script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" >
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
                integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js"
                integrity="sha512-cp+S0Bkyv7xKBSbmjJR0K7va0cor7vHYhETzm2Jy//ZTQDUvugH/byC4eWuTii9o5HN9msulx2zqhEXWau20Dg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/plugins-init/bootstrap-input-spinner.js"></script>

        </script>
        <style>
            ..btn-primary:active,
            .btn-primary:focus,
            .btn-primary:hover {
                background: #030051;
                color: #fff;
                border-color: #030063;
            }
        </style>
    </head>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid mt-2">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <div>
                        <h1 class="m-0"
                            style="font-family: 'Kanit', sans-serif; font-weight:600; color: #164176;"><img
                                src="{{ asset('images/person.png') }}" alt="" class="mr-3">รายชื่อพนักงาน
                        </h1>
                    </div>
                </div><!-- /.col -->
                <!-- Button trigger modal -->
                <div class="col-sm-6">
                    <div class="offset-7">
                        <button type="button" class="btn btn-primary rounded-pill text-white px-5" data-toggle="modal"
                            data-target="#exampleModalLong" style="padding: 12px 21px;background: #164176;"> <i
                                class=" bi bi-person-plus"></i> เพิ่มพนักงาน</button>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="card" style="font-family: 'Prompt', sans-serif; font-weight:400;">
            <div class="col-lg-12">

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"
                                    style="font-family: 'Prompt', sans-serif; font-weight:600;"> <img
                                        src="{{ asset('images/person.png') }}" alt="" class="mr-3">เพิ่มพนักงาน
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{-- action="{{ route('add') }}" method="POST" --}}
                                <form action="{{ route('addCustomer') }}" enctype="multipart/form-data " method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputName">ชื่อ</label>
                                            <input type="text" class="form-control" id="inputName" name="name"
                                                placeholder="ชื่อ">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputLastname">นามสกุล</label>
                                            <input type="text" class="form-control" id="inputLastname" name="lastName"
                                                placeholder="นามสกุล">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail">Email</label>
                                            <input type="text" class="form-control" id="inputEmail" name="email"
                                                placeholder="infinity@example.com">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPhone">เบอรโทรศัพท์</label>
                                            <input type="text" class="form-control" id="inputPhone" name="numberPhone"
                                                placeholder="1234567890">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPersoncard">เลขประจำตัวบัตรประชาชน</label>
                                            <input type="text" class="form-control" id="inputPersoncard"
                                                name="PersoncardID" placeholder="1212121212121">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword">รหัสผ่าน</label>
                                            <input type="password" class="form-control" id="inputPassword" name="password"
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form row">
                                        <div class="form-group col-md-6">
                                            <label for="inputBanknumber">เลขบัญชีธนาคาร</label>
                                            <input type="text" class="form-control" id="inputBanknumber" name="Banknumber"
                                                placeholder="123456789">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="ImgBank">รูปสมุดบัญชีธนาคาร</label>
                                            <input type="file" class="form-control-file" id="ImgBank" name="ImgBank"
                                                style="margin-top: 10px;">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputSalary">ฐานเงินเดือน</label>
                                        <input type="text" class="form-control" id="inputSalary" name="Salary"
                                            placeholder="25000">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputDepartment">แผนก</label>
                                            <select id="inputDepartment" class="form-control" name="Department">
                                                <option selected>เลือกแผนก</option>
                                                <option>UX/UI</option>
                                                <option>Frontend</option>
                                                <option>Backend</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputSex">เพศ</label>
                                            <select id="inputSex" class="form-control" name="Sex">
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
                                            <input type="text" class="form-control" id="datepicker1" name="startwork"
                                                value="<?= date('y-m-d', strtotime(date('Y-m-d'))) ?>">


                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary" style="margin-right: 65px;
                                                                                margin-left: 128px;   border-radius: 15px;"
                                        id="save">บันทึก</button>
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close"
                                        style="margin-right: 54px; border-radius: 15px;color: #5e5e5e;
                                                                            background-color: #fff;
                                                                            border-color: #a3a3a3;
                                                                          }">ยกเลิก</button>

                                    {{-- <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary" style="margin-right: 123px;"
                                            id="save">บันทึก</button>
                                    </div> --}}
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <form class="form-inline" style="float: right; margin-top: 5px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary my-2 my-sm-0" type="submit"
                        style="padding: 10px 21px;background: #fff;border-color: #fff;"><i class="bi bi-search"
                            style="font-size: 1.5rem;color: #000;"></i></button>
                </form>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-primary" style="font-family: 'Kanit', sans-serif; font-weight:600;">#
                                </th>
                                <th class="text-warning" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    เลขประจำตัวบัตรประชาชน</th>
                                <th class="text-primary" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    ชื่อ-นามสกุล</th>
                                <th class="text-warning" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    Email</th>
                                <th class="text-primary" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    เบอร์โทร</th>
                                <th class="text-warning" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    แผนก</th>
                                <th class="text-primary" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    ฐานเงินเดือน</th>
                                <th class="text-warning" style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                    วันที่เริ่มงาน</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                {{-- <td>{{ $name }}</td> --}}
                                <td>name</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <!-- Modal -->
                                            <a class="dropdown-item" data-target="#exampleModal"
                                                data-toggle="modal">รายละเอียด
                                            </a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title" id="exampleModalLabel"><i
                                                                class="bi bi-search"></i> ข้อมูลพนักงาน</h3>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <fieldset disabled>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="disabledTextInput">ชื่อ</label>
                                                                        <input type="text" class="form-control"
                                                                            id="disabledTextInput" placeholder="สุดสวย">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputLastname">นามสกุล</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputLastname" placeholder="สวยที่สุด">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputEmail">Email</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputEmail"
                                                                            placeholder="infinity@example.com">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPhone">เบอรโทรศัพท์</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPhone" placeholder="0659867562">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label
                                                                            for="inputPersoncard">เลขประจำตัวบัตรประชาชน</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPersoncard"
                                                                            placeholder="1212121212121">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputPassword">รหัสผ่าน</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputPassword" placeholder="123456">
                                                                    </div>
                                                                </div>
                                                                <div class="form row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="inputBanknumber">เลขบัญชีธนาคาร</label>
                                                                        <input type="text" class="form-control"
                                                                            id="inputBanknumber" placeholder="123456789">
                                                                    </div>
                                                                    <form>
                                                                        <div class="form-group col-md-6">
                                                                            <label
                                                                                for="exampleFormControlFile1">รูปสมุดบัญชีธนาคาร</label>
                                                                            <input type="file" class="form-control-file"
                                                                                id="exampleFormControlFile1"
                                                                                style="margin-top: 10px;">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputSalary">ฐานเงินเดือน</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputSalary" placeholder="25000">
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputDepartment">แผนก</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputDepartment" placeholder="UX/UI">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputSex">เพศ</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputSex" placeholder="หญิง">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputStart">วันที่เริ่มงาน</label>
                                                                    <input type="text" class="form-control"
                                                                        id="inputStrat" placeholder="21/05/2021">
                                                                </div>
                                                            </fieldset>
                                                        </form>

                                                        </fieldset>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button"
                                                            class="badeg badge-pill btn btn-secondary btn btn-white "
                                                            data-dismiss="modal">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <td>
                                    <!-- Example single danger button -->
                                    <div class="btn-group">
                                        <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                            <a class="dropdown-item" href="#">แก้ไข</a>
                                            <a class="dropdown-item" href="#">ลบ</a>
                                        </div>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1212121212121</td>
                                <td>สุดสวย สวยที่สุด</td>
                                <td>tisot@example.com</td>
                                <td>0645987321</td>
                                <td>UX/UI</td>
                                <td>25000</td>
                                <td>05/05/2021</td>
                                <div class="modal-dialog modal-sm">
                                    <td>
                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button class="btn btn-white" style="background-color: rgb(255, 255, 255)"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">ดูรายละเอียด</a>
                                                <a class="dropdown-item" href="#">แก้ไข</a>
                                                <a class="dropdown-item" href="#">ลบ</a>
                                            </div>
                                    </td>
                                </div>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.content-header -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#save').on('click', function(e) {
            console.log("asdsadsada")
        })
    </script>
    <script>
        {
            $("input[type='number']").inputSpinner();
        } {
            var date_start = new Date(2018);
            // console.log(date_start);
            date_start.setDate(date_start.getDate());
            $('#datepicker1').datepicker({
                format: 'yyyy-mm-dd',
                language: 'th',
                startDate: date_start,

            });
        }
    </script>
    <script>
        {
            $("selector").datepicker({
                altField: "#datepicker1"
                altFormat: "yyyy-mm-dd"
            });
        }
    </script>
@endsection
