@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
@if (session()->has('message'))
    <div class="alert alert-warning alert-dismissible fade show w-25" role="alert">
      <strong>{{session()->get('message')}}</strong>
      <button type="button" class="btn-close p-1" data-bs-dismiss="alert" aria-label="Close"><b>X</b></button>
    </div>
@endif  
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Update Product</h4>
                        <h6>Update selected Product</h6>
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
                                       
                                        <select class="select form-control" name="productBrand">
                                            @foreach ($brand as $brand)
                                            <option value="{{ $product->product_Brand }}">{{ $product->product_Brand }}</option>
                                            <option value="{{ $brand->brandName }}">{{ $brand->brandName }}</option>
                                            @endforeach
                                        </select>
                                                                            
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
                                        <label>Current Quantity</label>
                                        <input type="number" name="productQuantity" id="productQuantity" class="form-control" value="{{ $product->product_Quantity }}">
                                    </div>
                                </div>


                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="productPrice" class="form-control"  value="{{ $product->product_Price }}">
                                </div>
                            </div>


                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Total Amount</label>
                                    <input type="text" name="total_Amount" id="totalAmount" class="form-control"value="{{ $product->total_Amount }}" readonly>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Status</label>
                                    <select class="select form-control" name="productStatus">
                                        <option value="{{ $product->product_Status }}">{{ $product->product_Status }}</option>
                                        <option value="Open">Open</option>
                                        <option value="Closed">Closed</option>
                                    </select>
                                </div>
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

        <script>
        function updateProduct(){
            let productQuantity = parseFloat(document.getElementById("productQuantity").value);
            if(isNaN(productQuantity)) productQuantity = 0; 
            let productPrice = parseFloat(document.getElementById("productPrice").value);
            if(isNaN(productPrice)) productPrice = 0;
            let updateQuantity = documentlgetElementById("UpdateQuantity").value;
            if(isNaN(updateQuantity)) updateQuantity = 0;
        }


        </script>

@endsection