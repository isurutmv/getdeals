
<!DOCTYPE html>
<html>
<head>
    <title>GetDeals</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->


    <script src="js/jquery.min.js"></script>

    <script src="js/jquery.etalage.min.js"></script>


    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });

        });
    </script>

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

                <div class="cart"><a href="#"><span> </span>CART</a></div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!---->

<div class="container">

    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="{{asset('storage/'.$products->image)}}" class="img-responsive" />
                            <img class="etalage_source_image" src="{{asset('storage/'.$products->image)}}" title="" />
                        </a>
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{asset('storage/'.$products->image)}}" class="img-responsive" />
                        <img class="etalage_source_image" src="{{asset('storage/'.$products->image)}}" class="img-responsive" title="" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{asset('storage/'.$products->image)}}" class="img-responsive"  />
                        <img class="etalage_source_image" src="{{asset('storage/'.$products->image)}}"class="img-responsive"  />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="{{asset('storage/'.$products->image)}}" class="img-responsive"  />
                        <img class="etalage_source_image" src="{{asset('storage/'.$products->image)}}"class="img-responsive"  />
                    </li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">


                <h4>{{$products->name}}</h4>
                <div class="cart-b">
                    <div class="left-n ">Rs {{$products->Sell_price}} /=</div>
                    <form action="{{route('cart.store')}}" method="post">
                        {{--<input type="text" value="1" name="qty" />--}}
                        <input type="hidden" name="id" value="{{$products->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="name" value="{{$products->name}}">
                        <input type="hidden" name="sell_price" value="{{$products->Sell_price}}">
                        <button class="now-get get-cart-in" >ADD TO CART</button>

                    </form>
                    <div class="clearfix"></div>
                </div>
                <h6>100 items in stock</h6>
                <p>{!!$products->Description!!}</p>



                <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
                        <li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
                    </ul>
                </div>
            </div>






            <div class="clearfix"> </div>
        </div>








        <ul id="flexiselDemo1">
            <li><img src="images/pi.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
            <li><img src="images/pi1.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
            <li><img src="images/pi2.jpg" /><div class="grid-flex"><a href="#">Zumba</a><p>Rs 850</p></div></li>
            <li><img src="images/pi3.jpg" /><div class="grid-flex"><a href="#">Bloch</a><p>Rs 850</p></div></li>
            <li><img src="images/pi4.jpg" /><div class="grid-flex"><a href="#">Capzio</a><p>Rs 850</p></div></li>
        </ul>

        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>






        <script type="text/javascript" src="js/jquery.flexisel.js"></script>

        <div class="toogle">
            <h3 class="m_3">Product Details</h3>
            <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
        </div>
    </div>

    <!---->
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
        <!--initiate accordion-->
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