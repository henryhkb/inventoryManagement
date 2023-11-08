@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Add Sale</h4>
                <h6>Add your new sale</h6>
            </div>
        </div>
        
                
                <form action="{{ url('addProduct') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="text" name="salesDate" class="form-control" required>
                                    </div>
                                </div>              

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
                                        <label>Product Quantity</label>
                                        <input type="text" name="productQuantity" placeholder="product Quantity" class="form-control" required>
                                    </div>
                                </div>

                            </div>
                            
                                
                                
                            <div class="row">   
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Total Amount</label>
                                        <input type="text" name="totalAmount" name="totalAmount" class="form-control" required>
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
                                        <label>Amount Due</label>
                                        <input type="text" placeholder="Amount Due" name="amountDue" class="form-control" required>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Biller</label>
                                        <input type="text" placeholder="Biller" name="biller" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-submit me-2" value="Submit">
                                <a href="{{ url('saleslist')}}" class="btn btn-cancel">Cancel</a>
                            </div>                   
                </form>
                   
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection