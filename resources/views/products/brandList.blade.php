@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Brand List</h4>
                <h6>Manage your Brand</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('addBrand')}}" class="btn btn-added"><img src="assets/img/icons/plus.svg" class="me-2"
                        alt="img">Add Brand</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                
                <div class="card" id="filter_inputs">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Brand Name">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Brand Description">
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img
                                            src="assets/img/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table datanew">
                        <thead>
                            <tr>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productBrandlist as $item)
                                <tr>
                                    <td>{{ $item->brandName }}</td>
                                    <td>{{ $item->brandDescription }}</td>
                                    <td>
                                        <a href="" class="text text-danger fas fa-trash"></a>
                                        <a href="" class="text text-success fas fa-pen"></a>
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