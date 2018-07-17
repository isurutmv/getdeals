<?php

$current = 'about';
?>

@include('Include.header')


<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
            <li>About Us</li>
        </ul>
    </div>
</div>


<!-- //breadcrumbs -->





<!-- about -->

<div class="team">
    <div class="container">
        <h3>About Us</h3>
    </div>
</div>

<div class="about">
    <div class="container">
        <div class="w3ls_about_grids">
            <div class="col-md-6 w3ls_about_grid_left">

                <p style="text-align: justify;">


                    GETDEALS.LK has been your competent partner in the electronics industry.
                    Today we are one of the market’s leading distributors of high-quality electronic components.
                    For our commercial and private customers.
                    We continuously expand our product range.
                    In addition, we would be happy to procure any available article from well-known electronics components manufacturers anywhere in the world.
                    We distribute our products through our online store and our  at company headquarters in Colombo, near Mumthaz mahal


                </p>


                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">

                    <p>

                        The one-stop shop for all your electronic needs.
                        Thousands of products are available in stock and for order from the top industry leading brands.
                        We want to earn your business, put us to the test!


                    </p>


                </div>
                <div class="clearfix"> </div>
                <div class="col-xs-2 w3ls_about_grid_left1">
                    <span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
                </div>
                <div class="col-xs-10 w3ls_about_grid_left2">


                    <p>


                        To your life with the very latest in technology and use the most efficient and reliable method.
                        Brands that have been trusted for generations and new entrants with cutting edge equipment feature on the GETDEALS.LK giving you ample choice of your life


                    </p>


                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 w3ls_about_grid_right">
                <img src="{{asset('images/52.jpg')}}" alt=" " class="img-responsive" />
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->


@include('Include.footer')