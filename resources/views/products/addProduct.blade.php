@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">

    @if (session()->has('message'))
    <div class="alert alert-warning alert-dismissible fade show w-25" role="alert">
      <strong>{{session()->get('message')}}</strong>
      <button type="button" class="btn-close p-1" data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@endif
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product Add</h4>
                        <h6>Create new product</h6>
                    </div>
                </div>

                <form action="{{ url('addProduct') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="productName" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        

                                        <select class="select form-control" name="productCategory" required>
                                            <option>Choose Category</option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->categoryName }}">{{ $category->categoryName}}</option>
                                            @endforeach
                                        </select>

                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Brand</label>
                                       
                                        <select class="select form-control" name="productBrand" >
                                            @foreach ($brand as $brand)
                                                <option>Choose Brand</option>
                                                <option value="{{ $brand->brandName }}">{{ $brand->brandName }}</option>
                                            @endforeach 
                                        </select>                                     
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Location</label>
                                        <select class="select form-control" name="productLocation" required>
                                            <option value="WareHouse">WareHouse</option>
                                            <option value="Shop One">Shop One</option>
                                            <option value="Shop Two">Shop Two</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                                
                                
                            <div class="row" ng-app="">   
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="productPrice" class="form-control" ng-model="prodPrice" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" name="productQuantity" class="form-control" ng-model="prodQuantity" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" name="total_Amount" class="form-control" value="@{{ prodPrice * prodQuantity }}" readonly>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label> Status</label>
                                        <select class="select form-control" name="productStatus" required>
                                            <option value="Open">Open</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-submit me-2 bg-success" value="Submit">
                                    <a href="{{url('productList')}}" class="btn btn-cancel bg-info">Cancel</a>
                                </div>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>

@endsection