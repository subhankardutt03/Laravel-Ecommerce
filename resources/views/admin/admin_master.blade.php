<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}">

    <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

  <!-- Semantic Ui link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />

  {{-- toastr Link --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />
     
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">


    @include('admin.body.header');
  
  <!-- Left side column. contains the logo and sidebar -->
 

  @include('admin.body.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    @yield('admin_content')

  </div>
  <!-- /.content-wrapper -->

  @include('admin.body.footer');

  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>	
	<script src="{{ asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="{{ asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
  <script src="{{ asset('../assets/vendor_components/datatable/datatables.min.js') }}"></script>
	<script src="{{ asset('backend/js/pages/data-table.js')}}"></script>
	
	<!-- Sunny Admin App -->
	<script src="{{ asset('backend/js/template.js') }}"></script>
	<script src="{{ asset('backend/js/pages/dashboard.js') }}"></script>

  <!-- inputs tags -->
<script src="{{ asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>

<!-- CK editor-->
<script src="{{ asset('../assets/vendor_components/ckeditor/ckeditor.js')}}"></script>
	<script src="{{ asset('../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
	<script src="{{ asset('backend/js/pages/editor.js') }}"></script>

  <!-- Semantic Ui link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>

  {{-- toastr JS Link --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

    {{-- sweetalert Link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
     
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}";

        switch(type){
            case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

            case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

            case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

            case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        }
        @endif
    </script>

    <script>

      //// This alert For Delete/////
        $(document).on("click", "#delete", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you want to delete?",
            text : "Once Delete, This will be Permanently Delete !!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Safe Data !!");
            }
          });
        });



        ////// This Alert for Confirm Order //////
        $(document).on("click", "#confirm", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to confirm?",
            text : "Once Confirm, You will not be able to Pending again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Confirmed !!");
            }
          });
        });


            ////// This Alert for Processing Order //////
        $(document).on("click", "#processing", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to Processing?",
            text : "Once Processing, You will not be able to back again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Processed !!");
            }
          });
        });



             ////// This Alert for Picked Order //////
        $(document).on("click", "#picked", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to Picked?",
            text : "Once Picked, You will not be able to back again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Picked !!");
            }
          });
        });


            ////// This Alert for Shipped Order //////
        $(document).on("click", "#shipped", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to shipped?",
            text : "Once shipped, You will not be able to back again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Shipped !!");
            }
          });
        });


           ////// This Alert for Delivered Order //////
        $(document).on("click", "#delivered", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to delivered?",
            text : "Once delivered, You will not be able to back again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Delivered !!");
            }
          });
        });


              ////// This Alert for Cancel Order //////
        $(document).on("click", "#cancel", function(e){
          e.preventDefault();
          var link = $(this).attr("href");
          swal({
            title : "Are you sure to cancel?",
            text : "Once Cancel, You will not be able to back again!!",
            icon : "warning",
            buttons: true,
            dangerMode : true,
          })
          .then((willDelete)=>{
            if(willDelete){
              window.location.href = link;
            }
            else{
              swal("Your Order is not Canceled !!");
            }
          });
        });
    </script>
	
	
</body>
</html>
