@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User Management</h4>
                <h6>Add/Update User</h6>
            </div>
        </div>

        <form action="{{ url('updateUserConfirmed', $user->id)}}" method="post">
            @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Update FullName</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            <span class="text text-danger">@error('name'){{ $message}} @enderror</span>
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Update Username</label>
                            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                            <span class="text text-danger">@error('username') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Update Password</label>
                            <div class="pass-group">
                                <input type="password" class="pass-input form-control" name="password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Update Phonenumber</label>
                            <input type="text" class="form-control" name="phonenumber" value="{{ $user->phonenumber }}">
                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Update Role</label>
                            <select class="select form-control"  name="usertype">
                                <option value="{{$user->usertype}}">{{$user->usertype}}</option>
                                <option value="User">User</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>User Station</label>
                            <select class="select form-control"  name="userStation" value="{{ old('userStation') }}">
                                <option value="{{$user->userStation}}">{{ $user->userStation }}</option>
                                <option value="WareHouse">Ware House</option>
                                <option value="Shop 1">Shop 1</option>
                                <option value="Shop 2">Shop 2</option>
                            </select>    
                        </div>
                    </div>
                    

                    
                    <div class="col-lg-12">
                        <input type="submit" value="UPDATE" class="btn btn-submit me-2 bg-warning">
                        <a href="{{ url('userList') }}" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

    </div>
</div>


@endsection