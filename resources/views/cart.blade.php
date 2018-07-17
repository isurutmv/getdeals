
<!DOCTYPE html>
<html>
<head>
    <title>GetDeals</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="js/jquery.min.js"></script>
    <!--script-->
</head>
<body>
<!--header-->
<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="top-header-right">
                <div class="down-top">
                </div>
                <div class="down-top top-down">
                </div>
                <!---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="{{route('landing')}}"><img src="images/logo.png" alt=" " /></a>
                </div>
                <div class="search">
                    <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
                    <input type="submit"  value="SEARCH">

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">

                <div class="cart"><a href="cart.html"><span> </span>CART</a></div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!---->





<div class="container">

    <div class="shoes-grid">

        <div class="wrap-in">
            <div class="wmuSlider example1 slide-grid">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">

                        <div class="banner-matter">
                            <div class="col-md-5 banner-bag">
                            </div>
                            <div class="col-md-7 banner-off">

                            </div>

                            <div class="clearfix"> </div>
                        </div>
                    </article>



                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-matter_1">
                            <div class="col-md-5 banner-bag">
                            </div>
                            <div class="col-md-7 banner-off">

                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </article>



                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-matter_2">
                            <div class="col-md-5 banner-bag">
                            </div>
                            <div class="col-md-7 banner-off">

                            </div>

                            <div class="clearfix"> </div>
                        </div>

                    </article>

                </div>


                <ul class="wmuSliderPagination">
                    <li><a href="#" class="">0</a></li>
                    <li><a href="#" class="">1</a></li>
                    <li><a href="#" class="">2</a></li>
                </ul>
                <script src="js/jquery.wmuSlider.js"></script>
                <script>
                    $('.example1').wmuSlider();
                </script>
            </div>
        </div>

        <!---->










        <div class="product-left">



            <div class="container">

                <table>
                    <thead>

                    <tr>
                        <th  class="bg_color" scope="col">Remove</th>
                        <th  class="bg_color"  scope="col">Product</th>
                        <th  class="bg_color" scope="col">Quantity</th>
                        <th  class="bg_color" scope="col">Sub-Total</th>
                        <th  class="bg_color" scope="col">price</th>
                    </tr>


                    </thead>
                    <tbody>
                    @foreach(Cart::content() as $item)
                    <tr>

                        <td data-label="Account">
                            <div class="btn btn-success">Remove </div>


                        </td>


                        <td data-label="Due Date">{{$item->model->name}}</td>


                        <td data-label="Amount">
                            <div class="btn btn-danger">+ </div>
                        </td>


                        <td data-label="Period"> {{$item->total}}</td>
                        <td data-label="Period">{{$item->model->Sell_price}}</td>
                    </tr>

                    @endforeach

                    </tbody>
                </table>





            </div>



            <div class="clearfix"> </div>

        </div>

        <br> <br> <br>


        <div class="product-left">



            <div class="container">

                <table class="tb_config">
                    <thead>

                    <tr>


                        <th  class="bg_color" scope="col">Qty</th>
                        <th  class="bg_color"  scope="col">Sub Total</th>

                    </tr>


                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row" data-label="Acount">{{Cart::count()}}</td>
                        <td data-label="Due Date">{{Cart::total()}}</td>
                    </tr>
                    </tbody>
                </table>


            </div>

            <div class="clearfix"> </div>

        </div>


        <div class="clearfix"> </div>

    </div>

















    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">CATEGORIES</h3>
            <ul class="menu">
                @foreach($category as $item)
                    <li class="item1"><a href="{{route('category.show',['category' => $item->slag,'name'=>$item->name])}}">{{$item->name}}</a>

                    </li>
                @endforeach
            </ul>
        </div>
        {{--<!--initiate accordion-->--}}
        {{--<script type="text/javascript">--}}
        {{--$(function() {--}}
        {{--var menu_ul = $('.menu > li > ul'),--}}
        {{--menu_a  = $('.menu > li > a');--}}
        {{--menu_ul.hide();--}}
        {{--menu_a.click(function(e) {--}}
        {{--e.preventDefault();--}}
        {{--if(!$(this).hasClass('active')) {--}}
        {{--menu_a.removeClass('active');--}}
        {{--menu_ul.filter(':visible').slideUp('normal');--}}
        {{--$(this).addClass('active').next().stop(true,true).slideDown('normal');--}}
        {{--} else {--}}
        {{--$(this).removeClass('active');--}}
        {{--$(this).next().stop(true,true).slideUp('normal');--}}
        {{--}--}}
        {{--});--}}

        {{--});--}}
        {{--</script>--}}
        <div class=" chain-grid menu-chain">
            <a href="single_sample.html"><img class="img-responsive chain" src="images/wat.jpg" alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>
                <h6><a href="single_sample.html">Lorem ipsum dolor</a></h6>
            </div>
        </div>
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
    </div>



    <div class="clearfix"> </div>
</div>

<!---->
<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="#"><span> </span></a></li>
                    <li><a href="#"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>CATEGORIES</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li ><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li ><a href="#">Eget nisi laoreet</a></li>
                    <li ><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>FEATURE PROJECTS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate">
                <h6>TOP BRANDS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li ><a href="#">Dignissim neque</a></li>
                    <li ><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li ><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li ><a href="#">Eget nisi laoreet</a></li>
                    <li ><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>OUR ADDERSS</h6>
                <ul>
                    <li>Mumthaz Mahal 133/33, </li>
                    <li>1st Cross Street,</li>
                    <li> Colombo-11, </li>
                    <li>Sri Lanka</li>
                    <li class="phone">PH : +94 777 680 259</li>
                    <li class="phone">PH : +94 11 233 6445</li>
                    <li class="temp"> <p class="footer-class">Design by <a href="#" target="_blank">SKY DIGITAL</a> </p></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</body>
</html>