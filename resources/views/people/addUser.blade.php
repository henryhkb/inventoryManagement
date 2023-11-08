@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Add User</h6>
            </div>
        </div>

        <form action="{{ url('addUser')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            <span class="text text-danger">@error('name'){{ $message}} @enderror</span>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
                            <span class="text text-danger">@error('username') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control" name="password" value="{{ old('password')}}">
                                <span class="fas toggle-password fa-eye-slash"></span>
                                <span class="text text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Phonenumber</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}">
                            <span class="text text-danger">@error('phonenumber') {{ $message }} @enderror</span>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Role</label>
                            <select class="select form-control"  name="usertype" value="{{ old('usertype') }}">
                                <option>Select</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                            <span class="text text-danger">@error('usertype') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>User Station</label>
                            <select class="select form-control"  name="userStation" value="{{ old('userStation') }}">
                                <option>Select</option>
                                <option value="WareHouse">WareHouse</option>
                                <option value="Shop 1">Shop 1</option>
                                <option value="Shop 2">Shop 2</option>
                            </select>
                            <span class="text text-danger">@error('userStation') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <input type="submit" value="SUBMIT" class="btn btn-submit me-2 bg-warning">
                        <a href="{{ url('userList') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>
</div>


@endsection