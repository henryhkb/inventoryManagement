@extends('layouts.adminSideMenu')
@section('content')


<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Product List</h4>
                <h6>Manage your products</h6>
            </div>
            <div class="page-btn">
                <a href="{{url('addProduct')}}" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Product Name</th>
                                <th>Category </th>
                                <th>Brand</th>
                                <th>Location</th>
                                <th>Price GH₵</th>
                                <th>Quantity</th>
                                <th>Total GH₵</th>
                                <th>Product Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                         @foreach ($products as $product)    
                          <tr>
                                <td>{{ $product->user_name}}</td>
                                <td>{{ $product->product_Name }}</td>   
                                <td>{{ $product->product_Category }}</td>   
                                <td>{{ $product->product_Brand }}</td>   
                                <td>{{ $product->product_Location}}</td>   
                                <td>{{ $product->product_Price }}</td> 
                               

                                @if ($product->product_Quantity < 60)
                                <td class="text text-danger">{{ $product->product_Quantity }}</td>  
                                @endif

                                <td>{{ $product->total_Amount }}</td>   
                                <td>{{ $product->product_Status }}</td>
                                <td>
                                    <a href="{{url('removeProduct', $product->id)}}" class="fas fa-trash text text-danger"></a>
                                    <a href="{{ url('updateProduct', $product->id)}}" class="fas fa-pen text text-success"></a>
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