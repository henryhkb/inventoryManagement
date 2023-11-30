<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link href="{{asset('assets/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">	
	<link href="{{asset('assets/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>

    <div class="main-wrapper">
        <div class="sidebar" id="sidebar">
           
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="{{ url('userDashboard')}}"><img src="{{ asset('assets/img/icons/dashboard.svg')}}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                       
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src={{asset("assets/img/icons/sales1.svg")}}
                                    alt="img"><span> Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('saleslist') }}">Sales List</a></li>
                                <li><a href="{{ url('newSales')}}">New Sales</a></li>
                                <li><a href="{{ url('salesReturnLists')}}">Sales Return List</a></li>
                                <li><a href="{{ url('createSalesReturns')}}">New Sales Return</a></li>
                            </ul>
                        </li>
                       
                        
                        {{-- <li class="submenu">
                            <a href="javascript:void(0);"><img src={{asset("assets/img/icons/transfer1.svg")}}
                                    alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ url('transferlist') }}">Transfer List</a></li>
                                <li><a href="{{ url('addtransfer')}}">Add Transfer </a></li>
                            </ul>
                        </li> --}}

                       
  
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src={{url("assets/img/icons/time.svg")}} alt="img"><span>
                                    Report</span> <span class="menu-arrow"></span></a>
                            <ul>
                                {{-- <li><a href="{{ url('purchaseOrderReport') }}">Purchase order report</a></li> --}}
                                <li><a href="{{ url('inventoryReport') }}">Inventory Report</a></li>
                                <li><a href="{{ url('salesReport') }}">Sales Report</a></li>
                                <li><a href="{{ url('invoiceReport')}}">Invoice Report</a></li>
                                {{-- <li><a href="{{ url('purchaseReport')}}">Purchase Report</a></li>
                                <li><a href="{{ url('supplierReport')}}">Supplier Report</a></li>
                                <li><a href="{{ url('customerReport')}}">Customer Report</a></li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <x-app-layout>
        @yield('content')
        </x-app-layout>

        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
    
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js')}}"></script>
    
        <script src="{{ asset('assets/js/script.js')}}"></script>

        <script src="{{asset('assets/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/dataTables.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/responsive.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/jquery.dataTables.js')}}"></script>
		<script src="{{asset('assets/datatable/js/dataTables.bootstrap4.js')}}"></script>
		<script src="{{asset('assets/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/buttons.bootstrap4.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/jszip.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/pdfmake.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/vfs_fonts.js')}}"></script>
		<script src="{{asset('assets/datatable/js/buttons.html5.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/buttons.print.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/buttons.colVis.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/datatable/js/responsive.bootstrap4.min.js')}}"></script>
		<!-- datatable js -->
		<script src="{{asset('assets/js/table-data.js')}}"></script>
    </body>
    
    </html>
    