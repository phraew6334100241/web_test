@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                    <div class="card">

                        <div class="card-header">แบบฟอร์ม</div>
                        <div class="card-body">
                            <form action="postcustomers" method="post">
                        
                                <div class="form-group">
                                    <label for="fist_name">ชื่อ</label>
                                    <input type="text" class="form-control" name="fist_name">
                                </div>
                                @error('fist_name')
                                    <div class="my-1">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="last_name">นามสกุล</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                                @error('last_name')
                                    <div class="my-2">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="email">อีเมล</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                                @error('email')
                                    <div class="my-3">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>

                                <div class="form-group">
                                    <label for="phone">เบอร์โทร</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                @error('phone')
                                    <div class="my-4">
                                        <span class="text-danger">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>
                               
                    
                                <input type="submit" value="บันทึก" class="btn btn-primary">
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
