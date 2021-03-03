
@extends('layouts.index')
@section('ss')
    <form method="post" action="/dashboard/users/save">
        @csrf
        @if (session()->has('massage'))
          <div class="alert alert-success">
         {{session()->get('massage')}}
          </div>
        @endif
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>اضافة طالب جديد</strong>

            </div>

            <div class="card-block">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">اسم الطالب </label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" placeholder="Enter your name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">البريد الالكتروني </label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"  placeholder="Enter your name">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">كلمة المرور</label>
                            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  placeholder="Enter your name">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name">اعادة كلمة المرور</label>
                            <input name="conf_password" type="text" class="form-control @error('conf_password') is-invalid @enderror" value="{{ old('conf_password') }}" placeholder="Enter your name">
                            @error('conf_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">اضافة طالب جديد</button>
        </div>
    </form>

@endsection
