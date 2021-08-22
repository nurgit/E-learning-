@extends('student.backend.layouts.master')
@section('page_header','Dashboard')
@section('page_links')
    <link rel="stylesheet" href="{{ asset('backend/assets/js/datatables/datatables.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/js/select2/select2.css') }}">
    <style>
        .page-body .select2-drop {z-index: 10052;}
        .select2-drop-mask {z-index: 10052;}
        .datepicker.datepicker-dropdown{
            z-index: 10052 !important;
        }
    </style>
@endsection
@section('page_breadcrumb')
    <ol class="breadcrumb bc-3" >
        <li class="active">
            <a href="#"><i class="fa fa-home"></i></a>
        </li>
{{--                <li class="active">--}}
{{--                    <strong>{{$sub_menu}}</strong>--}}
{{--                </li>--}}
    </ol>
@endsection
@section('page_content')
<div class="row">
        <div class="col-sm-3">
            <div class="tile-stats tile-blue" >
                <a class="clear" href="{{url('student/assignment')}}">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="num" data-start="0" data-end="{{$assignment}}" data-prefix="" data-postfix="" data-duration="1500" data-delay="0">&dollar; 0 </div>
                    <h3>Assignment</h3>
                    <p></p>
                </a>
            </div>

        </div>
        <div class="col-sm-3">
            <div class="tile-stats tile-aqua">
                <a class="clear" href="{{url('student/teacher')}}">
                <div class="icon"><i class="entypo-book"></i></div>
                    <div class="num" data-start="0" data-end="{{$courses}}" data-prefix="" data-postfix="" data-duration="1500" data-delay="0">&dollar; 0 </div>
                <h3>Courses</h3>
                <p></p>
                </a>
            </div>
        </div>
        <div class="col-sm-3">

            <div class="tile-stats tile-cyan">
                <a class="clear" href="{{url('student/lectureNote')}}">
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="num" data-start="0" data-end="{{$lectures}}" data-prefix="" data-postfix="" data-duration="1500" data-delay="0">$ 0 </div>
                    <h3>Lectures</h3>
                    <p></p>
                </a>
            </div>

        </div>
    </div>
@endsection
@section('page_scripts')
            <script type="text/javascript">
                // $(".agregarPago").click(function(){
                //     $("#idventa").val($(this).data("id"))
                //     $("#modal-pagos").modal("show");
                // });

                // $("#cancelar").click(function(){
                //     $("#modal-pagos").modal("hide");
                // });
            </script>
@endsection
