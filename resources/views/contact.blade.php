<?php

$current = 'mail';
?>
@include("Include.header")
<!-- //banner -->
<!-- breadcrumbs -->
<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="{{route('home')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
            <li>Mail Us</li>
        </ul>
    </div>
</div>
<!-- //breadcrumbs -->
<!-- mail -->
<div class="mail">
    <div class="container">
        <h3>Mail Us</h3>
        <div class="agile_mail_grids">
            <div class="col-md-5 contact-left">
                <h4>Address</h4>
                <p><span>Mumthaz Mahal 133/33,<br>
                            1st Cross Street,<br>
						Colombo-11, Sri Lanka</span></p>
                <ul>
                    <li><h4>Mobile Phone </h4><p><span>+94 777 680 259 </span></p></li>
                    <li><h4>Telephone </h4><p><span>+94 11 233 6445</span></p></li>
                    <li><h4>Fax </h4><p><span>+94 11 47 400 55 </span></p></li>
                    <li><p><span><a href="mailto:seyed_sons@mail2world.com">seyed_sons@mail2world.com</a></span></p></li>
                </ul>
            </div>
            <div class="col-md-7 contact-left">
                <h4>Contact Form</h4>
                <form action="#" method="post">
                    <input type="text" name="Name" placeholder="Your Name" required="">
                    <input type="email" name="Email" placeholder="Your Email" required="">
                    <input type="text" name="Telephone" placeholder="Telephone No" required="">
                    <textarea name="message" placeholder="Message..." required=""></textarea>
                    <input type="submit" value="Submit" >
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="contact-bottom">


            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6174815348636!2d79.84878956477297!3d6.936237694988561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25921edd5bf3d%3A0xbe189f9fa0c3275d!2sR%26R+PC+Corner!5e0!3m2!1sen!2slk!4v1527240746466" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </div>
</div>

<!-- //mail -->
@include("Include.footer")