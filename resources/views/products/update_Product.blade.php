@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Product Add</h4>
                        <h6>Create new product</h6>
                    </div>
                </div>

                <form action="{{ url('updateProductConfirm', $product->id) }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="productName" class="form-control" value="{{ $product->product_Name }}">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        

                                        <select class="select form-control" name="productCategory">
                                            <option value="{{ $product->product_Category }}">{{ $product->product_Category }}</option>
                                            @foreach ($category as $category)
                                                <option value="{{ $category->categoryName }}">{{ $category->categoryName}}</option>
                                            @endforeach
                                        </select>

                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Brand</label>
                                        @foreach ($brand as $brand)
                                        <select class="select form-control" name="productBrand">
                                            <option value="{{ $product->product_Brand }}">{{ $product->product_Brand }}</option>
                                            <option value="{{ $brand->brandName }}">{{ $brand->brandName }}</option>
                                        </select>
                                        @endforeach                                      
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Location</label>
                                        <select class="select form-control" name="productLocation">
                                            <option value="{{ $product->product_Location }}">{{ $product->product_Location }}</option>
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
                                        <input type="text" name="productPrice" class="form-control"   value="{{ $product->product_Price }}" ng-model="prodPrice">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="text" name="productQuantity" class="form-control"  value="{{ $product->product_Quantity }}" ng-model="prodQuantity">
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" name="total_Amount" class="form-control" value="@{{ prodPrice * prodQuantity }}" value="{{ $product->total_Amount }}" readonly>
                                    </div>
                                </div>



                                
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Status</label>
                                    <select class="select form-control" name="productStatus">
                                        <option value="{{ $product->product_Status }}">{{ $product->product_Status }}</option>
                                        <option value="Closed">Closed</option>
                                    </select>
                                </div>
                            </div>

                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-submit me-2 bg-success" value="Update">
                                    <a href="{{url('productList')}}" class="btn btn-cancel">Cancel</a>
                                </div>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>

@endsection