@extends('layouts.admin')
@section('content')

    <head>
        {{-- css --}}
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
            integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        {{-- js --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
                integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js"
                integrity="sha512-cp+S0Bkyv7xKBSbmjJR0K7va0cor7vHYhETzm2Jy//ZTQDUvugH/byC4eWuTii9o5HN9msulx2zqhEXWau20Dg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid mt-2">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <div>
                        <h1 class="m-0"><img src="{{ asset('images/absent.png') }}" alt="Infinity"
                                class="mr-3">เเบบฟอร์มใบลา</h1>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- start form --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card">
                    <form style="margin: 30px">
                        <div class="form-group row offset-1 mt-1">
                            <label for="exampleInputUsername" class="col-sm-3 col-form-label">ชื่อ - นามสกุล</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputUsername"
                                    placeholder="ชื่อ - นามสกุล">
                            </div>

                        </div>

                        <div class="form-group row offset-1">
                            <label for="exampleInputEmail" class="col-sm-3 col-form-label">อีเมล</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="อีเมล">
                            </div>
                        </div>

                        <div class="form-group row offset-1">
                            <label for="exampleInputType" class="col-sm-3 col-form-label">ประเภทการลา</label>
                            <div class="col-sm-7">
                                <select class="form-control">
                                    <option>ประเภทการลา</option>
                                    <option>ลากิจ</option>
                                    <option>ลาพักร้อน</option>
                                    <option class="btn btn-primary" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">ลาป่วย</option>
                                </select>
                                {{-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a> --}}
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="form-group row offset-1">
                                <label for="exampleInputType" class="col-sm-3 col-form-label">ใบรับรองเเพทย์</label>
                                <div class="col-sm-7">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">เลือกไฟล์</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group row offset-1">
                            <label for="exampleInputType" class="col-sm-3 col-form-label">ใบรับรองเเพทย์</label>
                            <div class="col-sm-7">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">เลือกไฟล์</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div> --}}


                        <div class="form-group row offset-1">
                            <label class="col-sm-3 col-form-label">วันที่ต้องการลา</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="datepicker1"
                                    value="<?= date('d-m-y', strtotime(date('Y-m-d'))) ?>">
                                <script type="text/javascript">
                                    var date_start = new Date();
                                    date_start.setDate(date_start.getDate());
                                    $('#datepicker1').datepicker({
                                        format: 'dd-mm-yyyy',
                                        language: 'th',
                                        startDate: date_start,
                                    });
                                </script>
                            </div>
                            <div class="input-group-addon mx-1">ถึง
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="datepicker2"
                                    value="<?= date('d-m-y', strtotime(date('Y-m-d'))) ?>">
                                <script type="text/javascript">
                                    var date_start = new Date();
                                    date_start.setDate(date_start.getDate());
                                    var date_end = new Date();
                                    date_end.setDate(date_end.getDate() + 30);
                                    $('#datepicker2').datepicker({
                                        format: 'dd-mm-yyyy',
                                        language: 'th',
                                        startDate: date_start,
                                        endDate: date_end
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="form-group row offset-1">
                            <div class="col-lg-3">
                                <label class="col-form-label">เหตุผลการลา</label>
                            </div>
                            <div class="col-lg-7">
                                <textarea id="maxlength-textarea" class="form-control" maxlength="100" rows="3" placeholder="เหตุผลการลา"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row offset-4">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollable" style="background-color: #144076;">
                                ยืนยัน
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('dist/img/finished.png') }}" width="450" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <button type="button" class="btn btn-outline-secondary">ยกเลิก</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    {{-- stop form --}}

    <!-- Main content -->
    <section class="content">





    </section>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
