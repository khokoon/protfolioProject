@extends('layouts.admin_layout')


@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Main Page</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">DASHBOARD</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
               
            
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    <img style="height: 30vh" src=" {{ asset('assets/img/bg-masthead.jpg') }} " class="img-thumbnail" alt="">
                    <input type="file" class="mt-3" id="bc_img" name="bc_img">
                </div>

                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-5">
                        <label for="sub_title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" name="sub_title" id="sub_title">
                    </div>

                    <div>
                        <h4>Upload Resume</h4>
                        <input type="file" class="mt-2" id="resume" name="resume">
                    </div>
                </div>
             </div>   
        </div>

        </div>



    </main>
    
@endsection



               