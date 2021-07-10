<!DOCTYPE html>
<html lang="en">

@php
    $seo = App\Models\SeoSetting::find(1);
@endphp

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="{{ $seo->meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="{{ $seo->meta_author }}">
<meta name="keywords" content="{{ $seo->meta_keyword }}">
<meta name="robots" content="all">
<title>@yield('title')</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-select.min.css') }}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.css') }}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Semantic Ui link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />

{{-- toastr Link --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />

  <!----Payment stripe Link ---->
  <script src="https://js.stripe.com/v3/"></script>
  
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->

@include('frontend.body.header')

<!-- ============================================== HEADER : END ============================================== -->

@yield('content')

<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->

@include('frontend.body.footer')

<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{ asset('frontend/assets/js/jquery-1.11.1.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-hover-dropdown.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/echo.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.easing-1.3.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-slider.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/jquery.rateit.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/bootstrap-select.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script> 
<script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>

 <!-- Semantic Ui link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>

 {{-- toastr JS Link --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" ></script>

    {{-- sweetalert Link --}}
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     
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
    </script>


    <!------------ Modal ------------->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><strong><span id="p_name"></span></strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">

          <div class="col-md-4">

            <div class="card" style="width: 18rem;">
              <img src="" class="card-img-top" id="p_image" style="height:200px;width:200px;">
            </div>

          </div> <!---- End Col-4------>

          <div class="col-md-4">

            <ul class="list-group">
              <li class="list-group-item">Product Price: <strong class="text-danger">
                $<span id="pPrice"></span></strong>
              <del id="oldPrice">$</del>
              </li>
              <li class="list-group-item">Product Code: <strong id="p_code"></strong></li>
              <li class="list-group-item">Category: <strong id="p_category"></strong></li>
              <li class="list-group-item">Brand: <strong id="p_brand"></strong></li>
              <li class="list-group-item">Stock:<span class="badge badge-pill badge-success" id="available"></span>
              <span class="badge badge-pill badge-danger" id="stockout"></span>
              </li>
            </ul>

          </div><!------- End col-4 ------>

          <div class="col-md-4">

          <div class="form-group">
            <label for=""> Choose Color </label>
            <select class="form-select form-control" id="color" name="color">
            
            </select>
          </div>

          <div class="form-group" id="sizeArea">
            <label for=""> Choose Size </label>
            <select class="form-select form-control" id="size" name="size">
              <option selected>Open this select menu</option>
            </select>
          </div>

          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" value="1" min="1">
          </div>

          <input type="hidden" id="product_id">
          <button type="submit" class="btn btn-info mb-2" onclick="addToCart()">Add to Cart</button>
            
          </div><!---------End col-4 -------->

        </div> <!-----End Row -------------->


      </div>
        <!-------- End Modal body--------->
      
    </div>
  </div>
</div>

<!-------------- End Modal ------------------->


<script type="text/javascript">
      $.ajaxSetup({
        headers:{
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
      })


      // Start Product View With Modal

      function productView(id)
      {
        // alert(id);

        $.ajax({
          type : 'GET',
          url : '/product/view/modal/' + id,
          dataType : 'json',
          success : function(data){
            // console.log(data);

            $('#p_name').text(data.product.product_name_en);
            $('#p_code').text(data.product.product_code);
            $('#p_category').text(data.product.category.category_name_en);
            $('#p_brand').text(data.product.brand.brand_name_en);
            $('#p_image').attr('src','/'+data.product.product_thumbnail);


            // pass product Id
            $('#product_id').val(id);

            // Pass default quantity value
            $('#quantity').val(1);


            // product price
            if(data.product.discount_price == null){
              $('#pPrice').text('');
              $('#oldPrice').text('');
              $('#pPrice').text(data.product.selling_price);
            }else{
              $('#pPrice').text(data.product.discount_price);
              $('#oldPrice').text(data.product.selling_price);
            } // End product Price


            // Stock option
            if(data.product.product_quantity > 0){
              $('#available').text('');
              $('#stockout').text('');
              $('#available').text('Available');
            }else{
              $('#available').text('');
              $('#stockout').text('');
              $('#stockout').text('Stock Out');
            }


            // Color
            $('select[name="color"]').empty();
            $.each(data.color_en,function(key,value){
                $('select[name="color"]').append('<option value=" '+value+' "> '+value+' </option>')
            }) // End color

            //Size
              $('select[name="size"]').empty();
            $.each(data.size_en,function(key,value){
                $('select[name="size"]').append('<option value=" '+value+' "> '+value+' </option>')
                if(data.size_en == ""){
                  $('#sizeArea').hide();
                }else{
                  $('#sizeArea').show();
                }
            }) // End size


          }
        })
      }

      // END PRODUCT VIEW WITH MODAL


      // START ADD TO CART PRODUCT

      function addToCart()
      {
        var product_name = $('#p_name').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#quantity').val();

        $.ajax({
          type : "POST",
          dataType : "json",
          data :{
            color:color, size:size, quantity:quantity, product_name:product_name
          },
          url : "/cart/data/store/"+id,
          success:function(data){

            miniCart();
            $('#closeModal').click();
            // console.log(data);

            // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                title : data.error,
              })

            }

            // End Message
          }
        })
      }

       // END ADD TO CART PRODUCT

</script>


<script type="text/javascript">

  function miniCart()
  {
    $.ajax({
      type : "GET",
      dataType : "json",
      url : "/product/mini/cart",
      success : function(response){
        // console.log(response);

          $('span[id="cartSubTotal"]').text(response.cartTotal);
          $('#cartQty').text(response.cartQty);

          var miniCart = "";

        $.each(response.carts,function(key,value){
          miniCart += `<div class="cart-item product-summary">
            <div class="row">
              <div class="col-xs-4">
                <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
              </div>
              <div class="col-xs-7">
                <h3 class="name"><a href="index.php?page-detail">${value.name}</a></h3>
                <div class="price">${value.price} &nbsp  
                <span class="badge badge-pill badge-success" style="background-color:green;color:#fff;">
                ${value.qty}</span></div>
              </div>
              <div class="col-xs-1 action">
              <button type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)">
              <i class="fa fa-trash"></i></button>
              </div>
            </div>
          </div>
          <!-- /.cart-item -->
          <div class="clearfix"></div>
          <hr>`
        });

        $('#miniCart').html(miniCart);

      }

    });
  }

miniCart();


// Mini Cart Remove Start

function miniCartRemove(rowId){

  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '/minicart/product-remove/'+rowId,
    success : function(data){

      miniCart();

       // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              icon: 'success',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                title : data.error,
              })

            }

            // End Message
    }

  });

}

// Mini Cart Remove End
</script>


<!----------------------------- Add WishList Page ----------------------------->


<script type="text/javascript">

  function addToWishList(product_id)
  {
    $.ajax({

      type : 'POST',
      dataType : 'json',
      url : '/add-to-wishlist/'+product_id,

      success : function(data){

          // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                icon: 'error',
                title : data.error,
              })

            }

            // End Message

      }

    });
  }

</script>


<!----------------------------- Add WishList Page End ----------------------------->



<!-----------------------------Load Wishlist data ------------------------------------>


<script type="text/javascript">

  function wishlist()
  {
    $.ajax({
      type : "GET",
      dataType : "json",
      url : "/user/get-wishlist-product",
      success : function(response){

          var rows = "";

        $.each(response,function(key,value){
          rows += `	<tr>
					<td class="col-md-2"><img src="/${value.product.product_thumbnail}" alt="imga"></td>
					<td class="col-md-7">
						<div class="product-name"><a href="#">${value.product.product_name_en}</a></div>
					
						<div class="price">

							${value.product.discount_price == null
                ? `${value.product.selling_price}`
                : `${value.product.discount_price}<span>${value.product.selling_price}</span>`
              }

						</div>
					</td>
					<td class="col-md-2">

					<button class="btn btn-primary icon" 
                                type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal"
                                id="${value.product_id}" onclick="productView(this.id)">
                                Add To Cart </button>

					</td>
					<td class="col-md-1 close-btn">
						<button type="submit" class="" id="${value.id}" onclick="wishlistRemove(this.id)">
            <i class="fa fa-times"></i></button>
					</td>
				</tr>`
        });

        $('#wishlist').html(rows);

      }

    });

  }

wishlist();



// Remove wishlist

function wishlistRemove(id){

  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '/user/wishlist-remove/'+id,
    success : function(data){

      wishlist();

       // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message
    }

  });

}

// End Wishlist Remove

</script>


<!---------------------------End Load Wishlist Data ------------------------------------->



<!-----------------------------Load My Cart ------------------------------------------>


<script type="text/javascript">

  function cart()
  {
    $.ajax({
      type : "GET",
      dataType : "json",
      url : "/user/get-cart-product",
      success : function(response){

          var rows = "";

        $.each(response.carts,function(key,value){
          rows += `	<tr>
					<td class="col-md-2 text-center">
          <img src="/${value.options.image}" alt="imga" width="100px" height="80px">
          </td>
					<td class="col-md-2">
						<div class="product-name"><a href="#">${value.name}</a></div>
					
						<div class="price">
                  ${value.price}
						</div>
					</td>

					<td class="col-md-1">
            <strong>${value.options.color}</strong>
					</td>

          <td class="col-md-1">

            ${value.options.size == null
              ? `<strong> ........ </strong>`
              : `<strong>${value.options.size}</strong>`
            }
            
          </td>

          <td class="col-md-2 text-center">


          ${value.qty >1
          ? ` <button type="submit" class="btn btn-danger btn-sm" id="${value.rowId}" onclick="cartDecrement(this.id)">
          <i class="fa fa-minus"></i> </button>`
          : `<button type="submit" class="btn btn-danger btn-sm" disabled="">
          <i class="fa fa-minus"></i>
          </button>`
          
          }
          
					<input type="text" min="1" max="100"  value="${value.qty}" style="width:25px;" disabled="">
					<button type="submit" class="btn btn-success btn-sm" id="${value.rowId}" onclick="cartIncrement(this.id)">
          <i class="fa fa-plus"></i>
          </button>
				</td>

        	<td class="col-md-2 text-center">
            <strong><i class="fa fa-inr"></i>${value.subtotal}</strong>
					</td>

					<td class="col-md-1 close-btn">
						<button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)">
            <i class="fa fa-times"></i></button>
					</td>
				</tr>`
        });

        $('#cartPage').html(rows);

      }

    });

  }

cart();



// Remove Cart

function cartRemove(id){

  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '/user/cart-remove/'+id,
    success : function(data){

      cart();
      miniCart();
      couponCalField();
      $('#couponDiscountField').show();
          $('#coupon_name').val('');

       // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message
    }

  });

}

// End Cart Remove



// Cart Increment
function cartIncrement(rowId)
{
  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '/cart-increment/'+rowId,
    success : function(data){

      couponCalField();
      cart();
      miniCart();

         // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message
    }

  });
}

// End Cart Increment 


// Start Cart Decrement

  function cartDecrement(rowId)
{
  $.ajax({
    type : 'GET',
    dataType : 'json',
    url : '/cart-decrement/'+rowId,
    success : function(data){

      couponCalField();
      cart();
      miniCart();

         // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message
    }

  });
}

// End Cart Decrement

</script>



<!-----------------------------End Load My Cart ---------------------------------------->




<!------------------------------- Apply Coupon Start ----------------------------------->


<script type="text/javascript">

  function applyCoupon()
  {
    var coupon_name = $('#coupon_name').val();
    $.ajax({
      type : 'POST',
      dataType : 'json',
      data : {coupon_name : coupon_name },
      url : "{{ url('/coupon-apply') }}",
      success : function(data){

          couponCalField();
          if(data.validity == true){
              $('#couponDiscountField').hide();
          }
          
          // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success, 
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message

      }
    });
  }


  function couponCalField()
  {
    $.ajax({
      type : 'GET',
      url : "{{ url('/coupon-calculation') }}",
      dataType : 'json',
      success : function(data){
        if(data.total){
          $('#coupon_CalField').html(
            `<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span class="inner-left-md"><i class="fa fa-inr"></i> ${data.total}</span>
					</div>
					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md"><i class="fa fa-inr"></i> ${data.total}</span>
					</div>
				</th>
			</tr>`
          )
        }else{

          $('#coupon_CalField').html(
            `<tr>
				<th>
					<div class="cart-sub-total">
						Subtotal<span class="inner-left-md"><i class="fa fa-inr"></i> ${data.subtotal}</span>
					</div>

          <div class="cart-sub-total">
            Coupon<span class="inner-left-md"> ${data.coupon_name}</span>
            <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i> </button>
					</div>

          <div class="cart-sub-total">
						Discount Amount<span class="inner-left-md"><i class="fa fa-inr"></i> ${data.discount_amount}</span>
					</div>

					<div class="cart-grand-total">
						Grand Total<span class="inner-left-md"><i class="fa fa-inr"></i> ${data.total_amount}</span>
					</div>

				</th>
			</tr>`
          )

        }

      }

    });
  }

  couponCalField();

</script>

<!---------------------------------- Apply Coupon End -------------------------------------->


<!---------------------------------Start Coupon Remove ------------------------------------>


<script type="text/javascript">
  
  function couponRemove(){

    $.ajax({
      type : 'GET',
      url : "{{ url('/coupon-remove') }}",
      dataType : 'json',
      success : function(data){

          couponCalField();
          $('#couponDiscountField').show();
          $('#coupon_name').val('');
           // Start Message

            const Toast = Swal.mixin({
              toast : true,
              position: 'top-end',
              title: 'Your work has been saved',
              showConfirmButton: false,
              timer: 3000
            })

            if($.isEmptyObject(data.error)){
              Toast.fire({
                type : 'success',
                  icon: 'success',
                title : data.success,
              })

            }else{
              Toast.fire({
                type : 'error',
                  icon: 'error',
                title : data.error,
              })

            }

            // End Message

      }
  });
  }


</script>



<!--------------------------------End Coupon Remove ----------------------------------------->


</body>
</html>