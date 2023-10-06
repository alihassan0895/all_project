@extends('dashboard.layouts.app')
@section('page_name')
    Form skiles
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
                        <x-page_header name="Home"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
<x-alert/>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('skile.store')}}" method="post" >
                                    @csrf
                                    <div class="form-group">
                                        @error('name')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Name sklies </label>
                                        <input type="text" value="{{old('name')}}" class="form-control"
                                               name="name" required placeholder="">
                                    </div>


                                    <div class="form-group">
                                        @error('rate')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                            @enderror
                                        <label>rate </label>
                                        <input type="number" value="{{old('rate')}}" class="form-control"
                                               name="rate" required placeholder="">
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

