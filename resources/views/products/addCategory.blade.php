@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product Add Category</h4>
                <h6>Create new product Category</h6>
            </div>
        </div>

        <div class="card">
            <form action="{{ url('addProductCategory') }}" method="post">
                @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="productCategoryName">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="productCategoryDescription"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <input type="submit" value="SUBMIT" class="btn btn-submit me-2 bg-success">
                        <a href="{{url('categoryList')}}" class="btn btn-cancel bg-info">Cancel</a>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>


@endsection