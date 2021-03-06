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
        <script src="./js/plugins-init/bootstrap-input-spinner.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script> --}}


        {{-- <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/css/bootstrap-datetimepicker.css"
            integrity="sha512-iuhluKb/Iizb36mRW+XEZXJKw77cPMhQSYumnnNjIerzAh4UFuIEwXymSVxhKKtQlpi3S7J0UmMZA8H7OF1dvg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/js/bootstrap-datetimepicker.min.js"
                integrity="sha512-qad7VVBX2sj5mYsP19Jr3sWBvdd3ONe6iSU1qtyXrrvhejmE8oXzPm2fJUuyO21qqtiMOZsCvmwDFCKKsXyk7g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


        {{-- <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" /> --}}
        {{-- <script>
            $(document).ready(function() {
                var date_input = $('input[name="date"]'); //our date input has the name "date"
                var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script> --}}
        {{-- <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="./css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js">
        </script> --}}
        {{-- <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="./js/demo.js"></script> --}}
    </head>

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid mt-2">
            <div class="row mb-2">
                <div class="col-sm-6 ">
                    <div>
                        <h1 class="m-0"
                            style="font-family: 'Kanit', sans-serif; font-weight:600; color: #164176;"><img
                                src="{{ asset('images/absent.png') }}" alt="Infinity" class="mr-3">???????????????????????????????????????
                        </h1>
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
        <div class="row" style="font-family: 'Prompt', sans-serif; font-weight:600;">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card">
                    {{-- <form style="margin: 30px" action="{{ route('addd') }}" enctype="multipart/form-data " method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary" style="margin-right: 123px;" id="save">??????????????????</button>
                    </form> --}}
                    <form style="margin: 30px" action="{{ route('insertform') }}" enctype="multipart/form-data " method="post">
                        @csrf
                        <div class="form-group row offset-1 mt-1">
                            <label for="exampleInputUsername" class="col-sm-3 col-form-label">???????????? - ?????????????????????</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputUsername" name="Fullname"
                                    placeholder="???????????? - ?????????????????????">
                            </div>

                        </div>


                        <div class="form-group row offset-1">
                            <label for="exampleInputEmail" class="col-sm-3 col-form-label">???????????????</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="exampleInputEmail" name="email"
                                    placeholder="???????????????">
                            </div>
                        </div>

                        <div class="form-group row offset-1">
                            <label for="exampleInputType" class="col-sm-3 col-form-label">?????????????????????????????????</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="Typeofleave">
                                    <option>?????????????????????????????????</option>
                                    <option class="btn btn-primary" data-toggle="collapse" href="#collapseExample1"
                                        role="button" aria-expanded="false" name="" aria-controls="collapseExample">???????????????
                                    </option>
                                    <option>???????????????????????????</option>
                                    <option class="btn btn-primary" data-toggle="collapse" name="" href="#collapseExample"
                                        role="button" aria-expanded="false" name="" aria-controls="collapseExample">??????????????????
                                    </option>
                                </select>
                                {{-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a> --}}
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="form-group row offset-1">
                                <label for="exampleInputType" class="col-sm-3 col-form-label">??????????????????????????????????????????</label>
                                <div class="col-sm-7">
                                    <div class="custom-file">
                                        <input type="file" name="lafile" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">???????????????????????????</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group row offset-1">
                            <label for="exampleInputType" class="col-sm-3 col-form-label">??????????????????????????????????????????</label>
                            <div class="col-sm-7">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                    <label class="custom-file-label" for="validatedCustomFile">???????????????????????????</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div> --}}


                        <div class="form-group row offset-1">
                            <label class="col-sm-3 col-form-label">?????????????????????????????????????????????</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="datepicker1" name="startla"
                                    value="<?= date('d-m-y', strtotime(date('Y-m-d'))) ?>">
                            </div>
                            <div class="input-group-addon mx-1">?????????
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" id="datepicker2" name="endla"
                                    value="<?= date('d-m-y', strtotime(date('Y-m-d'))) ?>">
                            </div>
                        </div>

                        <div class="form-group row offset-1">
                            <label class="col-sm-3 col-form-label"
                                style="font-family: 'Kanit', sans-serif; font-weight:600;">????????????????????????????????????????????????</label>
                            <input type="number" name="hour" value="2" min="0" max="4" step="1" data-decimals="2" />
                        </div>

                        <div class="form-group row offset-1">
                            <div class="col-lg-3">
                                <label class="col-form-label">?????????????????????????????????</label>
                            </div>
                            <div class="col-lg-7">
                                <textarea type="text" name="reasonla" id="maxlength-textarea" class="form-control" maxlength="100" rows="3"
                                    placeholder="?????????????????????????????????"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row offset-4">
                            <!-- Button trigger modal -->
                            <button  type="submit" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollable" id="save"
                                style="background-color: #164176;font-family: 'Kanit', sans-serif; font-weight:600;border-radius: 30px;width: 100;height: 40px;">
                                ??????????????????
                            </button>
                            {{-- <button type="submit" class="btn btn-primary" style="margin-right: 123px;"
                                id="save">??????????????????</button> --}}

                            <!-- Modal -->
                            {{-- <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
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
                                            <img src="{{ asset('images/finished.png') }}" width="450" height="400">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-2"></div>
                            {{-- <button type="submit" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalScrollable"  id="save"
                                style="background-color: #144076;font-family: 'Kanit', sans-serif; font-weight:600;border-radius: 30px;width: 100;height: 40px;">
                                ??????????????????
                            </button> --}}
                            {{-- <button type="submit" class="btn btn-primary" style="margin-right: 123px;" id="save">??????????????????</button> --}}
                            <button type="button" class="btn btn-outline-secondary"
                                style="font-family: 'Kanit', sans-serif; font-weight:600;border-radius: 30px;width: 100;height: 40px;">??????????????????</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        {
            $("input[type='number']").inputSpinner();
        } {
            var date_start = new Date();
            date_start.setDate(date_start.getDate());
            var date_end = new Date();
            date_end.setDate(date_end.getDate() + 30);
            $('#datepicker2').datepicker({
                format: 'yyyy-mm-dd',
                language: 'th',
                startDate: date_start,
                endDate: date_end
            });
        } {
            var date_start = new Date();
            date_start.setDate(date_start.getDate());
            $('#datepicker1').datepicker({
                format: 'yyyy-mm-dd',
                language: 'th',
                startDate: date_start,
            });
        }
    </script>

@endsection
