@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Store List</h4>
                <h6>View all Stores</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('addStore')}}" class="btn btn-added">
                    <img src="assets/img/icons/plus.svg" class="me-1" alt="img">Add Store
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Store name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($shops as $shop)
                                <tr>
                                    <td>{{ $shop->Shopname }}</td>
                                    <td>{{ $shop->Description}}</td>
                                    <td>
                                        <a href="{{ url('deleteShop', $shop->id) }}" class="text text-danger fas fa-trash"></a>
                                        <a href="{{ url('updateShop', $shop->id)}}" class="text text-success fas fa-pen"></a>
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