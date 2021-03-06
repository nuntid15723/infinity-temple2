<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Mitr:wght@200&family=Prompt:wght@300&family=Roboto+Condensed&display=swap"
    rel="stylesheet">
@extends('layouts.users')
@section('content')
    {{-- <style>
    body{
        font-family: 'Kanit', sans-serif; font-weight:600;
    }
</style> --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <div style="font-family: 'Kanit', sans-serif; font-weight:600;">
                        <h1 class="m-0" style=" color:#164176"><img src="{{ asset('images/homeuser.png') }}"
                                alt="" class="mr-3">หน้าหลัก</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        {{-- <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Employee</a></li>
                </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container-fluid mt-2 ">
            <div class="row ">
                <div class="col-lg-4 col-sm-4 ">
                    <a class="has" href="#" alt="">
                        <div class="card gradient-1 "
                            style="background-image: linear-gradient(230deg, #49B7F4, #C4E1F5, #C4E1F5 );">
                            <div class="card-body ">
                                <b class="logo-abbr" style="margin-left: 120px;"></b>
                                <div class="d-inline-block ">
                                    {{-- <h2 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                รออนุมัติ</h2> --}}
                                    <h2 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                        ลากิจ
                                        <h4 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:400;">1 ครั้ง</h4>
                                    </h2>
                                </div>
                                {{-- <span class="float-right display-5 opacity-5 "><i class="bi bi-graph-up"></i></span> --}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-4 ">
                    <a class="has" href="#" alt="">
                        <div class="card gradient-2"
                            style="background-image: linear-gradient(230deg, #ABDCFF, #8293F1,#5E53E5 );">
                            <div class="card-body ">
                                <b class="logo-abbr" style="margin-left: 120px;"></b>
                                <div class="d-inline-block ">
                                    <h2 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                        ลาป่วย
                                        <h4 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:400;">1 ครั้ง</h4>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-4 ">
                    <a class="has" href="#" alt="">
                        <div class="card gradient-3 "
                            style="background-image: linear-gradient(230deg, #FBFFCB, #FDD972, #FFA903);">
                            <div class="card-body ">
                                <b class="logo-abbr" style="margin-left: 100px;"></b>
                                <div class="d-inline-block">
                                    <h2 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:600;">
                                        ลาพักร้อน</h2>
                                    <h4 class="text-white " style="font-family: 'Kanit', sans-serif; font-weight:400;">1 ครั้ง</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="card " style="margin: 25px;">
                    <div class="card-body ">
                        <div class="active-member ">
                            <div class="table-responsive " style="font-family: 'Prompt', sans-serif; font-weight:400;">
                                <table class="table table-xs mb-0 ">
                                    <thead>
                                        <h2 style="font-family: 'Kanit', sans-serif; font-weight:600; color: #164176;">
                                            ประวัติการลา</h2>
                                        <tr>
                                            <th style="font-family: 'Kanit', sans-serif; font-weight:600;color: #FFD027;">#
                                            </th>
                                            <th style="font-family: 'Kanit', sans-serif; font-weight:600;color: #164176;">
                                                ชื่อ</th>
                                            <th style="font-family: 'Kanit', sans-serif; font-weight:600;color: #FFD027;">
                                                วันที่ลา</th>
                                            <th style="font-family: 'Kanit', sans-serif; font-weight:600;color: #164176;">
                                                วันที่สิ้นสุด</th>
                                            <th style="font-family: 'Kanit', sans-serif; font-weight:600;color: #FFD027;">
                                                ประเภทการลา</th>
                                            <th
                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;color: #164176;">
                                                สถานะการลา</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">1</td>
                                            <td><img src="./images/avatar/1.jpg " class=" rounded-circle mr-3 " alt="">Sarah
                                                Smith</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">นักพัฒนาโปรแกรม
                                            </td>
                                            <td>
                                                <span style="font-family: 'Prompt', sans-serif; font-weight:400;">United
                                                    States</span>
                                            </td>
                                            <td>
                                                <span style="font-family: 'Prompt', sans-serif; font-weight:400;">United
                                                    States</span>
                                            </td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #F8A8FF, #FD6585, #FC76A3 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 1px;">
                                                            <h4 class="text-white"
                                                                style="margin-top: 5px; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                ไม่อนุมัติ</h4>
                                                        </div>

                                                        {{-- <input id="chck" type="checkbox">
                                                <label for="chck" class="check-trail">
                                                    <span class="check-handler"></span>
                                                </label> --}}
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">2</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;"><img
                                                    src="./images/avatar/1.jpg " class=" rounded-circle mr-3 " alt=" ">Sarah
                                                Smith</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">iPhone X</td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #FF8E8E, #FFC107, #fcff31 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 1px;">
                                                            <h4 class="text-white "
                                                                style="margin-top: 5px; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                รออนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">3</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;"><img
                                                    src="./images/avatar/1.jpg " class=" rounded-circle mr-3 " alt=" ">Sarah
                                                Smith</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">iPhone X</td>
                                            <td>
                                                <span style="font-family: 'Prompt', sans-serif; font-weight:400;">United
                                                    States</span>
                                            </td>
                                            <td>
                                                <span style="font-family: 'Prompt', sans-serif; font-weight:400;">United
                                                    States</span>
                                            </td>
                                            <td><a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #C6F6CB, #06C360,#1CF38C ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                อนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">4</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;"><img
                                                    src="./images/avatar/1.jpg " class=" rounded-circle mr-3 " alt=" ">Sarah
                                                Smith</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">iPhone X</td>
                                            <td style="font-family: 'Prompt', sans-serif; font-weight:400;">
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <span>United States</span>
                                            </td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #C6F6CB, #06C360,#1CF38C ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                อนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img src="./images/avatar/2.jpg " class=" rounded-circle mr-3 "
                                                    alt=" ">Walter
                                                R.</td>
                                            <td>Pixel 2</td>
                                            <td><span>Canada</span></td>
                                            <td><span>Canada</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #F8A8FF, #FD6585, #FC76A3 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                ไม่อนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><img src="./images/avatar/3.jpg " class=" rounded-circle mr-3 "
                                                    alt=" ">Andrew
                                                D.</td>
                                            <td>OnePlus</td>
                                            <td><span>Germany</span></td>
                                            <td><span>Germany</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #FF8E8E, #FFC107, #fcff31 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                รออนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><img src="./images/avatar/6.jpg " class=" rounded-circle mr-3 " alt=" ">
                                                Megan
                                                S.</td>
                                            <td>Galaxy</td>
                                            <td><span>Japan</span></td>
                                            <td><span>Japan</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #F8A8FF, #FD6585, #FC76A3 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                ไม่อนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><img src="./images/avatar/4.jpg " class=" rounded-circle mr-3 " alt=" ">
                                                Doris
                                                R.</td>
                                            <td>Moto Z2</td>
                                            <td><span>England</span></td>
                                            <td><span>England</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #FF8E8E, #FFC107, #fcff31 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                รออนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><img src="./images/avatar/5.jpg " class=" rounded-circle mr-3 "
                                                    alt=" ">Elizabeth W.</td>
                                            <td>Notebook Asus</td>
                                            <td><span>China</span></td>
                                            <td><span>China</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #F8A8FF, #FD6585, #FC76A3 ); margin-bottom: 1px;">

                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                ไม่อนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td><img src="./images/avatar/5.jpg " class=" rounded-circle mr-3 "
                                                    alt=" ">Elizabeth W.</td>
                                            <td>Notebook Asus</td>
                                            <td><span>China</span></td>
                                            <td><span>China</span></td>
                                            <td>
                                                <a class="has" href="#" alt="">
                                                    <div class="card"
                                                        style="background-image: linear-gradient(230deg, #FF8E8E, #FFC107, #fcff31 ); margin-bottom: 1px;">
                                                        <div class="d-inline-block" style="margin: auto;margin-top: 5px;">
                                                            <h4 type="text/css" class="text-white "
                                                                style="text-align: center; font-family: 'Kanit', sans-serif; font-weight:600;">
                                                                รออนุมัติ</h4>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" style="float: right">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
