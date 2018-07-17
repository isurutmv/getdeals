
@include('Include.header')
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
        <div class="shoes-grid-left">
            <a href="single_sample.html">
                <div class="col-md-6 con-sed-grid">

                    <div class=" elit-grid">
                        <h4>consectetur  elit</h4>
                        <label>FOR ALL PURCHASE VALUE</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                        <span class="on-get">GET NOW</span>
                    </div>
                    <img class="img-responsive shoe-left" src="images/sh.jpg" alt=" " />

                    <div class="clearfix"> </div>

                </div>
            </a>
            <a href="single_sample.html">
                <div class="col-md-6 con-sed-grid sed-left-top">
                    <div class=" elit-grid">
                        <h4>consectetur  elit</h4>
                        <label>FOR ALL PURCHASE VALUE</label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                        <span class="on-get">GET NOW</span>
                    </div>
                    <img class="img-responsive shoe-left" src="images/wa.jpg" alt=" " />

                    <div class="clearfix"> </div>
                </div>
            </a>
        </div>
        <div class="products">
            <h5 class="latest-product">LATEST PRODUCTS</h5>
            <a class="view-all" href="product.html">VIEW ALL<span> </span></a>
        </div>
        <div class="product-left">
            <?php
            $x=1;
            ?>
            @foreach($products as $product)

            <div class="col-md-4 chain-grid <?php if($x==3){echo 'grid-top-chain'; $x=0;} ?>">
                <a href="single_sample.html"><img class="img-responsive chain" src="{{asset('storage/'.$product->image)}}" alt=" " /></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href="single_sample.html">{{$product->name}}</a></h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual">Rs {{$product->Sell_price}}/=</span>

                            <span class="rating">
									        <input type="radio" class="rating-input"  name="rating-input-1">
									        <label for="rating-input-1-5" class="rating-star1"> </label>
									        <input type="radio" class="rating-input"  name="rating-input-1">
									        <label for="rating-input-1-4" class="rating-star1"> </label>
									        <input type="radio" class="rating-input"  name="rating-input-1">
									        <label for="rating-input-1-3" class="rating-star"> </label>
									        <input type="radio" class="rating-input"  name="rating-input-1">
									        <label for="rating-input-1-2" class="rating-star"> </label>
									        <input type="radio" class="rating-input"  name="rating-input-1">
									        <label for="rating-input-1-1" class="rating-star"> </label>
							    	   </span>
                        </div>
                        <a class="now-get get-cart" href="{{route('product.show',['product'=>$product->id])}}">ADD TO CART</a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>




            {{--<div class="col-md-4 chain-grid grid-top-chain">--}}
                {{--<a href="single_sample.html"><img class="img-responsive chain" src="images/bo.jpg" alt=" " /></a>--}}
                {{--<span class="star"> </span>--}}
                {{--<div class="grid-chain-bottom">--}}
                    {{--<h6><a href="single_sample.html">Lorem ipsum dolor</a></h6>--}}
                    {{--<div class="star-price">--}}
                        {{--<div class="dolor-grid">--}}
                            {{--<span class="actual">300$</span>--}}
                            {{--<span class="reducedfrom">400$</span>--}}
                            {{--<span class="rating">--}}
									        {{--<input type="radio"   class="rating-input" name="rating-input-1">--}}
									        {{--<label for="rating-input-1-5" class="rating-star1"> </label>--}}
									        {{--<input type="radio" class="rating-input"  name="rating-input-1">--}}
									        {{--<label for="rating-input-1-4" class="rating-star1"> </label>--}}
									        {{--<input type="radio" class="rating-input"  name="rating-input-1">--}}
									        {{--<label for="rating-input-1-3" class="rating-star"> </label>--}}
									        {{--<input type="radio" class="rating-input"  name="rating-input-1">--}}
									        {{--<label for="rating-input-1-2" class="rating-star"> </label>--}}
									        {{--<input type="radio" class="rating-input"  name="rating-input-1">--}}
									        {{--<label for="rating-input-1-1" class="rating-star"> </label>--}}

							    	   {{--</span>--}}
                        {{--</div>--}}
                        {{--<a class="now-get get-cart" href="#">ADD TO CART</a>--}}
                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
              <?php $x = $x+1; ?>
            @endforeach
            <div class="clearfix"> </div>
        </div>


    </div>
      @include('Include.Category')
    <div class="clearfix"> </div>
</div>

@include('Include.footer')