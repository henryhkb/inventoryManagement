@extends('layouts.adminSideMenu')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Sales List</h4>
                <h6>Manage your sales</h6>
            </div>
            <div class="page-btn">
                <a href="{{ url('newSales')}}" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img"
                        class="me-1">Add Sales</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Paid</th>
                                <th>Due</th>
                                <th>Biller</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection