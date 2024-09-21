@extends('layouts.admin_layout')


@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Admin Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Services</li>
            </ol>
                                             

        </div>
        <div>
            <h1>Services Page</h1>
        </div>
    </main>
    
@endsection



               