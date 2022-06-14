<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Mitr:wght@200&family=Prompt:wght@300&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js"
integrity="sha512-cp+S0Bkyv7xKBSbmjJR0K7va0cor7vHYhETzm2Jy//ZTQDUvugH/byC4eWuTii9o5HN9msulx2zqhEXWau20Dg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-body">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 ">
                        <div style="font-family: 'Kanit', sans-serif; font-weight:600;">
                            <h1 class="m-0" style="color: "><img src="{{ asset('pubilc/images/person.png') }}"
                                    alt="" class="mr-3">รายชื่อพนักงาน</h1>
                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Employee</a></li>
                    </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        {{-- ตารางรายชื่อพนักงาน --}}
        <div class="container">
            <div class="card" style="font-family: 'Prompt', sans-serif; font-weight:400;">
                <div class="col-lg-12">
                    <br>
                    <!-- Button trigger modal -->
                    <div class="offset-10">
                        <button type="button" class="btn btn-primary rounded-pill text-white px-5" data-toggle="modal"
                            data-target="#exampleModalLong"> <i class=" bi bi-person-plus"></i> เพิ่มพนักงาน</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle"
                                        style="font-family: 'Prompt', sans-serif; font-weight:600;">
                                        <img src="{{ asset('pubilc/images/person.png') }}"
                                            class="mr-3">เพิ่มพนักงาน
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputName">ชื่อ</label>
                                                <input type="text" class="form-control" id="inputName" name="name"
                                                    placeholder="ชื่อ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputLastname">นามสกุล</label>
                                                <input type="text" class="form-control" id="inputLastname"
                                                    placeholder="นามสกุล">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail">Email</label>
                                                <input type="text" class="form-control" id="inputEmail"
                                                    placeholder="infinity@example.com">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPhone">เบอรโทรศัพท์</label>
                                                <input type="text" class="form-control" id="inputPhone"
                                                    placeholder="1234567890">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputPersoncard">เลขประจำตัวบัตรประชาชน</label>
                                                <input type="text" class="form-control" id="inputPersoncard"
                                                    placeholder="1212121212121">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword">รหัสผ่าน</label>
                                                <input type="text" class="form-control" id="inputPassword"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form row">
                                            <div class="form-group col-md-6">
                                                <label for="inputBanknumber">เลขบัญชีธนาคาร</label>
                                                <input type="text" class="form-control" id="inputBanknumber"
                                                    placeholder="123456789">
                                            </div>
                                            <form>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleFormControlFile1">รูปสมุดบัญชีธนาคาร</label>
                                                    <input type="file" class="form-control-file"
                                                        id="exampleFormControlFile1">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSalary">ฐานเงินเดือน</label>
                                            <input type="text" class="form-control" id="inputSalary" placeholder="25000">
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
                                                <script type="text/javascript">
                                                    var date_start = new Date();
                                                    date_start.setDate(date_start.getDate());
                                                    $('#datepicker4').datepicker({
                                                        format: 'dd-mm-yyyy',
                                                        language: 'th',
                                                        startDate: date_start,
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">ยกเลิก</button>
                                    <button type="button" class="btn btn-primary">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <br><br>

                    <form class="form-inline" style="float: right">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="bi bi-search"></i></button>
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
                                    <td>สุดสวย สวยที่สุด</td>
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
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
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
                                                                            <label
                                                                                for="inputBanknumber">เลขบัญชีธนาคาร</label>
                                                                            <input type="text" class="form-control"
                                                                                id="inputBanknumber"
                                                                                placeholder="123456789">
                                                                        </div>
                                                                        <form>
                                                                            <div class="form-group col-md-6">
                                                                                <label
                                                                                    for="exampleFormControlFile1">รูปสมุดบัญชีธนาคาร</label>
                                                                                <input type="file"
                                                                                    class="form-control-file"
                                                                                    id="exampleFormControlFile1">
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
                                                                                    id="inputDepartment"
                                                                                    placeholder="UX/UI">
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
                    <th>
                        <nav aria-label="Page navigation example" style="float: right">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </th>

                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
@endsection
