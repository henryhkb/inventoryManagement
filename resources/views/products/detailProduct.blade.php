@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="page-title">
                        <h4>Details of Selected Product</h4>
                        <h6>Below show clearly the details of your selected product</h6>
                    </div>
                </div>

                <form action="{{ url('detailProduct', $detail->id) }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text"  class="form-control" value="{{ $detail->product_Name }}" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" class="form-control" value="{{$detail->product_Category}}" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Brand</label>
                                       <input type="text" class="form-control" value="{{$detail->product_Brand}}" readonly>                                     
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Location</label>
                                        <input type="text" class="form-control" value="{{$detail->product_Location}}" readonly>
                                    </div>
                                </div>

                            </div>
                            
                                
                            <div class="row">
                            
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Current Quantity</label>
                                        <input type="text" class="form-control" value="{{ $detail->product_Quantity }}" readonly>
                                    </div>
                                </div>



                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Previous Quantity</label>
                                        <input type="text" class="form-control" value="" readonly>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Update Quantity By</label>
                                        <input type="text" class="form-control" value="{{ $detail->Updated_Stock }}" readonly>
                                    </div>
                                </div>    
                           

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label> Status</label>
                                    <input type="text" class="form-control" value="{{$detail->product_Status}}" readonly>
                                </div>
                            </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control"   value="{{ $detail->product_Price }}" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" class="form-control" step="any" value="{{ $detail->total_Amount }}" readonly>
                                    </div>
                                </div>


                            </div>



                                <div class="col-lg-12">
                                    <a href="{{url('productList')}}" class="btn btn-cancel">Cancel</a>
                                </div>
                            
                        </div>
                    </div>
                </form>



            </div>
        </div>



</div>

@endsection