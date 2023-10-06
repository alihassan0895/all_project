@extends('dashboard.layouts.app')
@section('page_name')
    Edit Experience
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
                        <x-page_header name="Edit Experience"/>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <x-alert/>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('experience.update',['experience'=>$data->id])}}" method="post" >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        @error('name')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Name  </label>
                                        <input type="text" value="{{$data->name}}" class="form-control"
                                               name="name" required placeholder="">
                                    </div>


                                    <div class="form-group">
                                        @error('date_st')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Date Start  </label>
                                        <input type="date" value="{{$data->date_st}}" class="form-control"
                                               name="date_st" required placeholder="">
                                    </div>
                                    <div class="form-group">
                                        @error('date_end')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Date End  </label>
                                        <input type="date" value="{{$data->date_end}}" class="form-control"
                                               name="date_end" required placeholder="">
                                    </div>


                                    <div class="form-group">
                                        @error('description')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>description </label>
                                        <textarea type="text" style="height: 100px" class="form-control"
                                                  name="description"  placeholder="">
                                            {{$data->description}}
                                        </textarea>

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

