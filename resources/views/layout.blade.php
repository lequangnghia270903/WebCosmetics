<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---------Seo--------->
    <meta name="description" content="{{$meta_desc}}">

    <meta name="robots" content="INDEX,FOLLOW"/>
    <link  rel="canonical" href="{{$url_canonical}}" />
    <meta name="author" content="">
    <link  rel="icon" type="image/x-icon" href="" />

    {{--   <meta property="og:image" content="{{$image_og}}" />
      <meta property="og:description" content="{{$meta_desc}}" />
      <meta property="og:title" content="{{$meta_title}}" />
      <meta property="og:url" content="{{$url_canonical}}" />
      <meta property="og:type" content="website" /> --}}
    <!--//-------Seo--------->
    <title>{{$meta_title}}</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
     <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
     <style type="text/css">
         .table {
    width: 82%;
    margin-bottom: 20px;

}
     .form-control{
        width: 75%;

    }
    body {

    font-size: 16px;

    color: black;

}

     </style>

</head><!--/head-->

<body>

    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="tel:123456789"><i class="fa fa-phone"></i> 123456789</a></li>
                                <li><a href="mailto:"><i class="fa fa-envelope"></i> admin@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://mail.google.com"><i class="fa fa-google-plus"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trang-chu')}}"><p>SHOP MỸ PHẨM</p></a>
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">

                                <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                   if($customer_id!=NULL && $shipping_id==NULL){
                                 ?>
                                  <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

                                <?php
                                 }elseif($customer_id!=NULL && $shipping_id!=NULL){
                                 ?>
                                 <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                 <?php
                                }else{
                                ?>
                                 <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                 }
                                ?>
                                <li><a href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){
                                 ?>
                                  <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>

                                <?php
                            }else{
                                 ?>
                                 <li><a href="{{URL::to('/dang-nhap')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                 <?php
                             }
                                 ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        @foreach($category as $key => $danhmuc)
                                        <li><a href="{{URL::to('/danh-muc/'.$danhmuc->slug_category_product)}}">{{$danhmuc->category_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="">Tin tức</a>

                                </li>
                                <li><a href="{{URL::to('/gio-hang')}}">Giỏ hàng</a></li>
                                {{-- <li><a href="{{URL::to('#')}}">Liên hệ</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                        @php
                            $i = 0;
                        @endphp
                        @foreach($slider as $key => $slide)
                            @php
                                $i++;
                            @endphp
                            <div class="item {{$i==1 ? 'active' : '' }}">

                                <div class="col-sm-11">
                                    <img alt="{{$slide->slider_desc}}" src="{{asset('public/uploads/slider/'.$slide->slider_image)}}" height="200" width="100%" class="img img-responsive">

                                </div>
                            </div>
                        @endforeach


                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục sản phẩm</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                          @foreach($category as $key => $cate)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc/'.$cate->slug_category_product)}}">{{$cate->category_name}}</a></h4>
                                </div>
                            </div>
                        @endforeach

                        </div><!--/category-products-->

                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li><a href="{{URL::to('/thuong-hieu/'.$brand->brand_slug)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->



                    </div>
                </div>


                <div class="col-sm-9 padding-right">


                


                   @yield('content')
                    <div class="recommended_items"><!--recommended_items-->
                        <br>
                        <h2 class="title text-center">Sản phẩm liên quan</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/98/70/60/c34753c383f7aa80d4ff8d797e2885e0.jpg.webp" alt="" />
                                                    <h2>49.000  VNĐ</h2>
                                                    <p>Khay Nhựa Đựng Mỹ Phẩm Có Ngăn Kéo</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/22/c7/53/4a94fc8bdcfc81326f2ea0668508591d.jpg.webp" alt="" />
                                                    <h2>289.000 VNĐ</h2>
                                                    <p>Combo Serum dưỡng ẩm và chống lão hóa Senka Deep Moist 3X HA 30ml và Mặt nạ ngủ cấp ẩm chuyên sâu dạng gel Senka Deep Moist Gel Cream 50g</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/c2/db/58/ac0529c57a2f48538d2865cf3be4c372.jpg.webp" alt="" />
                                                    <h2>285.000 VNĐ</h2>
                                                    <p>Bộ sản phẩm Senka làm sạch và chống nắng dành cho da mụn (Senka A.L.L.Clear Water Fresh 230ml + SRM Acne Care 100g + Senka Perfect UV Essence 50g)</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/d4/e4/4f/714b34fa929e76d904ad645b3a1ed270.jpg.webp" alt="" />
                                                    <h2>132,300 VNĐ</h2>
                                                    <p>Khay Đựng Son Mỹ Phẩm 24 Ô</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/19/f7/03/efe9ba88b01978da8dbb7c9b1a905ddd.jpg.webp" alt="" />
                                                    <h2>1,130,000 VNĐ</h2>
                                                    <p>Bộ Dưỡng Da Ốc Sên Cao Cấp Dưỡng Ẩm Trắng Da Chống Nhăn Ngăn Ngừa Lão Hóa Nám Tàn Nhang Dewytree Ultra Vitalizing Snail (450ml)</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="https://salt.tikicdn.com/cache/750x750/ts/product/30/43/65/aa4e0ea2853e7e200ec4de6637d02cdb.jpg.webp" alt="" />
                                                    <h2>600,000 VNĐ</h2>
                                                    <p>Set Dưỡng Trắng Da Ốc Sên Cấp Ẩm Se Khít Lỗ Chân Lông Và Chống Lão Hóa Dewytree Ultra Vitalizing Snail 10ml</p>
                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                              </a>
                              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                        </div>
                    </div><!--/recommended_items-->


                </div>
            </div>

        </div>

    </section>
    <div id="footer">
  <footer class="footer-distributed">

            <div class="footer-left">

                <a href="{{URL::to('/trang-chu')}}"><h3>SHOP MỸ PHẨM</h3></a>

                <p class="footer-links">
                    <a href="{{URL::to('/trang-chu')}}" class="link-1">TRANG CHỦ</a>

                    <a href="#">SẢN PHẨM</a>

                    <a href="#">GIỚI THIỆU</a><br>

                    <a href="#">QUẢN TRỊ</a>

                    <a href="#">LIÊN HỆ</a>
                </p>



            </div>

            <div class="footer-center">

                <div>
                    <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+v%C3%A0+Truy%E1%BB%81n+th%C3%B4ng+Vi%E1%BB%87t+-+H%C3%A0n/@15.9732846,108.2519578,16z/data=!4m42!1m36!4m35!1m3!2m2!1d108.249626!2d15.9824742!1m6!1m2!1s0x314211c9116e401b:0x384798aaae735eff!2zS2hvYSBjw7RuZyBuZ2jhu4cgdGjDtG5nIHRpbiB0cnV54buBbiB0aMO0bmcsIDIzNCDEkC4gTmFtIEvhu7MgS2jhu59pIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDA!2m2!1d108.2503593!2d15.977621!1m2!1m1!2zaT48!1m6!1m2!1s0x3142108997dc971f:0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4sIDQ3MCDEkMaw4budbmcgVHLhuqduIMSQ4bqhaSBOZ2jEqWEsIEtodSDEkcO0IHRo4buLLCBOZ8WpIEjDoG5oIFPGoW4sIMSQw6AgTuG6tW5nIDU1MDAwMA!2m2!1d108.252355!2d15.9752931!1m6!1m2!1s0x314211019206027d:0x6fc61511bc956499!2zS2h1IMSQw7QgVGjhu4sgdmVuIHPDtG5nIEhvw6AgUXXDvSwgUXXhuq1uIE5nxakgSMOgbmggU8ahbiBUUCDEkMOgIG7hurVuZywgTMO0IDQxIEIyLjY1LCBIb8OgIFF1w70sIE5nxakgSMOgbmggU8ahbiwgxJDDoCBO4bq1bmcgNTUwMDAw!2m2!1d108.2404687!2d16.0057834!1m6!1m2!1s0x31421903fc908b35:0xe53accd75eff1260!2zU2hvcCBQICYgTSwgNTcgTMO9IFRyaeG7h24sIFRoYW5oIEtow6ogxJDDtG5nLCBUaGFuaCBLaMOqLCDEkMOgIE7hurVuZyA1NTAwMDA!2m2!1d108.1841138!2d16.0621923!3m4!1s0x3142108997dc971f:0x1295cb3d313469c9!8m2!3d15.9752931!4d108.252355"><i class="fa fa-map-marker"></i></a>
                    <p><span>Trường ĐHCNTT & TT Việt Hàn - ĐHĐN</span>Hòa Qúy, Ngũ Hành Sơn, Đà Nẵng</p>
                </div>

                <div>
                    <a href="tel:034509635054"><i class="fa fa-phone"></i></a>
                    <p>03450964654</p>
                </div>

                <div>
                    <a href="mailto:admin2002@gmail.com"><i class="fa fa-envelope"></i></a>
                    <p>admin@gmail.com</p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>VỀ CHÚNG TÔI</span>
                    Mọi thắc mắc của quý khách xin được gửi về địa chỉ email để được giải đáp.
                </p>

                <div class="footer-icons">

                    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>

                </div>

            </div>


        </footer>
        <center><p class="footer-company-name">Copy right © 2022 by <a href="https://www.facebook.com">SHOP MỸ PHẨM</a></p></center>
</div>



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>

    <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" async defer></script>

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=2339123679735877&autoLogAppEvents=1"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('#sort').on('change',function(){
               var url = $(this).val();


                  if (url) {
                        window.location = url;
                    }

               return false;
  });
          });

</script>
    <script type="text/javascript">

          $(document).ready(function(){
            $('.send_order').click(function(){
                swal({
                  title: "Xác nhận đơn hàng",
                  text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Cảm ơn, Mua hàng",

                    cancelButtonText: "Đóng,chưa mua",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm){
                     if (isConfirm) {
                        var shipping_email = $('.shipping_email').val();
                        var shipping_name = $('.shipping_name').val();
                        var shipping_address = $('.shipping_address').val();
                        var shipping_phone = $('.shipping_phone').val();
                        var shipping_notes = $('.shipping_notes').val();
                        var shipping_method = $('.payment_select').val();
                        var order_fee = $('.order_fee').val();
                        var order_coupon = $('.order_coupon').val();
                        var _token = $('input[name="_token"]').val();

                        $.ajax({
                            url: '{{url('/confirm-order')}}',
                            method: 'POST',
                            data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,order_fee:order_fee,order_coupon:order_coupon,shipping_method:shipping_method},
                            success:function(){
                               swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                            }
                        });

                        window.setTimeout(function(){
                            location.reload();
                        } ,3000);

                      } else {
                        swal("Đóng", "Đơn hàng chưa được gửi, bạn phải hoàn tất đơn hàng", "error");

                      }

                });


            });
        });


    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                    success:function(){

                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';

            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);
                }
            });
        });
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Hãy chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload();
                    }
                    });
                }
        });
    });
    </script>

</body>
</html>
