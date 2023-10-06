@extends('dashboard.layouts.app')
@section('page_name')
    Form Social
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
                        <x-page_header name="Social"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <x-alert/>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('social.update',['social'=>$data->id])}}" method="post" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        @error('name')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Name </label>
                                        <input type="text" value="{{$data->name}}" class="form-control"
                                               name="name" required placeholder="">
                                    </div>
                                    <div class="form-group">
                                        @error('url')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Url </label>
                                        <input type="url" value="{{$data->url}}" class="form-control"
                                               name="url" required placeholder="">
                                    </div>
                                    <div class="form-group">
                                        @error('icon')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Icon </label>
                                        <input type="text" value="{{$data->icon}}" class="form-control"
                                               name="icon" required placeholder="">
                                        <small><a href="https://boxicons.com/">Choose icon</a></small>
                                    </div>



                                    <button type="submit" name="submit" class="btn btn-default">save</button>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

