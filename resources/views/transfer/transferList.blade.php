@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
  

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Transfer List</h4>
                <h6>List of Transfered Products</h6>
            </div>
            <div class="page-btn">
                <a href="{{url('addtransfer')}}" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Transfer</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Product Name</th>
                                <th>Transfer From </th>
                                <th>Transfer To</th>
                                <th>Product Transfer Quantity</th>
                                <th>Date of Transfer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                         @foreach ($transfers as $transfer)    
                          <tr>
                                <td>{{ $transfer->user}}</td>
                                <td>{{ $transfer->productName }}</td>   
                                <td>{{ $transfer->transferFrom }}</td>   
                                <td>{{ $transfer->transferTo }}</td>   
                                <td>{{ $transfer->transferQuantity}}</td> 
                                <td>{{ $transfer->created_at}}</td> 
                                <td>
                                    <a href="{{url('removeTransfer', $transfer->id)}}" class="fas fa-trash text text-danger"></a>
                                    <a href="{{ url('updateTransfer', $transfer->id)}}" class="fas fa-pen text text-success"></a>
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