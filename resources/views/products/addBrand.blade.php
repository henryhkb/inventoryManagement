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
        @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show w-25" role="alert">
          <strong>{{session()->get('message')}}</strong>
          <button type="button" class="btn-close p-1" data-bs-dismiss="alert" aria-label="Close">&times;</button>
        </div>
    @endif
        <div class="page-header">
            <div class="page-title">
                <h4>Brand ADD</h4>
                <h6>Create new Brand</h6>
            </div>
        </div>

        <div class="card">
            <form action="{{ url('addBrand')}} " method="post">
                @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Brand Name</label>
                            <input type="text" name="productBrandName" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="productBrandDescription"></textarea>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-submit me-2  bg-success" value="SUBMIT">
                        <a href="{{url('brandList')}}" class="btn btn-cancel bg-info">Cancel</a>
                    </div>
                </div>
            </div>
            </form>
        </div>

    </div>
</div>

@endsection