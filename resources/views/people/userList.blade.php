@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>User List</h4>
                <h6>View/Search UserList</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('addUser')}}" class="btn btn-added">
                    <img src="assets/img/icons/plus.svg" class="me-1" alt="img">Add User
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                

                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Usertype</th>
                                <th>Phonenumber</th>
                                <th>Password</th>
                                <th>UserStation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->usertype }}</td>
                                    <td>{{ $user->phonenumber }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->userStation }}</td>
                                    <td>
                                        <a href="{{ url('delete', $user->id)}} " class="text text-danger fas fa-trash"></a>
                                        <a href="{{ url('updateUser', $user->id)}}" class="text text-success fas fa-pen"></a>
                                    </td>
                                </tr>
                            @endforeach
          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection