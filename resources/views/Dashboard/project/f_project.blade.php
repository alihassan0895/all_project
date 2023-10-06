@extends('dashboard.layouts.app')
@section('page_name')
    Form Project
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
                        <x-page_header name="Project"/>

                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12 ">
                        <x-alert/>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        @if($errors->any())

{{--                                            @dd($errors->all())--}}
                                            @foreach($errors->all() as $error)
                                                <small style="color:red;">{{$error}}</small>
                                                <br>
                                            @endforeach
                                        @endif
                                        @error('name')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Name </label>
                                        <input type="text" value="{{old('name')}}" class="form-control"
                                               name="name" required placeholder="">
                                    </div>

                                    <div class="form-group">
                                        @error('date')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Date </label>
                                        <input type="date" value="{{old('date')}}" class="form-control"
                                               name="date" required placeholder="">
                                    </div>
                                    <div class="form-group">
                                        @error('link')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Url </label>
                                        <input type="url" value="{{old('link')}}" class="form-control"
                                               name="link" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        @error('description')
                                        <span style="color: darkred">
{{--                                            {{$message}}--}}
                                        </span>
                                        @enderror
                                        <label>Description </label>
                                        <textarea type="text" style="height: 100px" class="form-control"
                                                  name="description" placeholder="">
                                            {{old('description')}}
                                        </textarea>

                                    </div>

                                    <div class="form-group">


                                        @error('files')
                                        {{--                                        @foreach($errors->files as $er)--}}
                                        {{--                                            {{$er}}--}}

                                        {{--                                        @endforeach--}}
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Choose images </label>
                                        <input type="file" value="{{old('files')}}"
                                               class="form-control @error('files') is-invalid @enderror"
                                               name="files[]" multiple accept="image/*" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        @error('status')
                                        <span style="color: darkred">
                                            {{$message}}
                                        </span>
                                        @enderror
                                        <label>Show </label>
                                        <br>
                                        <input type="radio"
                                               name="status" @if(old('status')==0) checked @endif value="0" placeholder=""> No
                                        <input type="radio"
                                               name="status"  @if(old('status')==1) checked @endif  value="1" placeholder=""> Yes
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

