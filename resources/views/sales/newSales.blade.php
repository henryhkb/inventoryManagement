@extends('layouts.userSideMenu')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Sale</h4>
                <h6>Add your new sale</h6>
            </div>
        </div>
        
                
                <form action="{{ url('addSales') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="row m-1">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Customer Name</label>
                                        <input type="text" name="customerName" placeholder="Customer Name" class="form-control" required>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" name="productName" placeholder="Product Name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Available Product Quantity</label>
                                        <input type="text" name="productQuantity" placeholder="product Quantity" class="form-control" readonly>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Customer  Quantity</label>
                                        <input type="text" name="productQuantity" placeholder="product Quantity" class="form-control">
                                    </div>
                                </div>

                            </div>
                            
                                
                                
                            <div class="row m-1">   
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" name="productPrice" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" name="productPrice" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Amount Paid</label>
                                        <input type="text" placeholder="Amount Paid" name="amountPaid" class="form-control" required>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Balance</label>
                                        <input type="text" placeholder="Amount Due" name="amountDue" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-submit bg-primary me-2" value="Submit">
                                <a href="{{ url('saleslist')}}" class="btn btn-cancel">Cancel</a>
                            </div>                   
                </form>
                   
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection