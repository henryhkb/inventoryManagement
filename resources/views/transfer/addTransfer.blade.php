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
                        <h4>Make Transfer</h4>
                        <h6>Transfer Product from On Location to Another</h6>
                    </div>
                </div>

                <form action="{{ url('addTransfer') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <select name="product_Name" id="">
                                            @foreach ($products as $product)
                                            <option value="">{{ $product->product_Name }}</option>
                                            @endforeach                                          
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Transfer From</label>
                                        <select class="select form-control" name="transfer_From" required>
                                            <option value="WareHouse">WareHouse</option>
                                            <option value="Shop One">Shop One</option>
                                            <option value="Shop Two">Shop Two</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label>Transfer To</label>
                                        <select class="select form-control" name="transfer_To" required>
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
                                        <label>Product Quantity To Transfer</label>
                                        <input type="number" id="transferQuantity" name="transfer_Quantity"  class="form-control" onkeyup="add_number()" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                
                            </div>

                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-submit me-2 bg-success" value="Submit">
                                    <a href="{{url('transferList')}}" class="btn btn-cancel bg-info">Cancel</a>
                                </div>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>

@endsection