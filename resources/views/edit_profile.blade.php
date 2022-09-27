@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Profile') }} {{$profile ->fist_name}}</div>
                <div>
                    <div class="card">

                        <div class="card-header">แบบฟอร์ม</div>
                        <div class="card-body">
                            <form action="updateprofile" method="post">
                                @csrf
                                <input type = "hidden" value = "{{$profile -> id}}" name = "id">
                                <div class="form-group">
                                    <label for="fist_name">ชื่อ</label>
                                    <input type="text" class="form-control" name="fist_name" value="{{$profile ->fist_name}}" required>
                                </div>
                                @error('fist_name')
                                    <div class="my-1">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="last_name">นามสกุล</label>
                                    <input type="text" class="form-control" name="last_name" value="{{$profile ->last_name}}"required>
                                </div>
                                @error('last_name')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="email">อีเมล</label>
                                    <input type="text" class="form-control" name="email" value="{{$profile ->email}}"required>
                                </div>
                                @error('email')
                                    <div class="my-3">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="phone">เบอร์โทร</label>
                                    <input type="text" class="form-control" name="phone" value="{{$profile ->phone}}"required>
                                </div>
                                @error('phone')
                                    <div class="my-4">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>
                               
                    
                                <input type="submit" value="Update" class="btn btn-primary">
                        <div class="card-body">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
