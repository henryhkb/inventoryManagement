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
                            
                                
                                
                            <div class="row" >   
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" id="productPrice" name="productPrice" step="any" class="form-control"  onkeyup="add_number()" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input type="number" id="productQuantity" name="productQuantity" step="any" class="form-control" onkeyup="add_number()" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" id="totalAmount" name="total_Amount" class="form-control" value="0"  readonly>
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

                            <div class="row">
                                
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

<script>
    function add_number(){
        let productPrice = parseFloat(document.getElementById("productPrice").value);
        if(isNaN(productPrice)) productPrice = 0;
        let productQuantity = parseFloat(document.getElementById("productQuantity").value);
        if(isNaN(productQuantity)) productQuantity = 0;
        
        let result = productPrice * productQuantity;
        document.getElementById("totalAmount").value = result;
    }
</script>

@endsection