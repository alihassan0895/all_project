@extends('dashboard.layouts.app')
@section('page_name')
    Table Experience
@endsection
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here {{ Auth::user()->name }}</span></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <x-page_header name="Table Experience"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <x-alert/>
                        <div class="card-body">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export"
                                           class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Data Start</th>
                                            <th>Date End</th>
                                            <th> Description</th>

                                            <th> Option</th>

                                        </tr>
                                        </thead>
                                        @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->date_st}}</td>
                                                <td>{{$row->date_end}}</td>
                                                <td>{{$row->description}}</td>
                                                <td>
                                                    {{--                                                    <a  href="{{route('skile.edit',[$row->id])}} "  class="btn btn-info"--}}

                                                    {{--                                                    ><i--}}
                                                    {{--                                                            class="fa fa-cog"></i>--}}
                                                    {{--                                                    </a>--}}
                                                    <x-button-form name="experience" id="{{$row->id}}"/>

                                                </td>
                                            </tr>
                                            <div class="modal fade none-border"
                                                 id="add-category{{$row->id}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">
                                                                <strong>Are You Sure Delete </strong>
                                                            </h4>
                                                            <button type="button" class="close"
                                                                    data-dismiss="modal"
                                                                    aria-hidden="true">&times;
                                                            </button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('experience.destroy',[$row->id])}}"
                                                                  method="post"
                                                                  enctype="multipart/form-data">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="form-group">
                                                                    <h2>{{$row->name}}</h2>

                                                                </div>




                                                                <button type="submit" name="submit"
                                                                        class="btn btn-danger">
                                                                    Delete
                                                                </button>

                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('table')
    <script src="{{asset("Dash/js/lib/data-table/datatables.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/buttons.flash.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/jszip.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/pdfmake.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/vfs_fonts.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/buttons.html5.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/buttons.print.min.js")}}"></script>
    <script src="{{asset("Dash/js/lib/data-table/datatables-init.js")}}"></script>
@endsection

