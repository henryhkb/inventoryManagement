@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Category list</h4>
                <h6>View/Search product Category</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('addCategory')}}" class="btn btn-added">
                    <img src="assets/img/icons/plus.svg" class="me-1" alt="img">Add Category
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($productCategoryList as $items)
                                <tr>
                                    <td>{{ $items->categoryName }}</td>
                                    <td>{{ $items->categoryDescription }}</td>
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