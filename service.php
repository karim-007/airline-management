
<?php include_once 'header.php'; ?>
<?php
    if (isset($_POST['name']) && $_POST['message']) {
        $sendMessage = $cs->sendContact($_POST);   
    }
?>
<!--end-->
<section class="image-head-wrapper" style="background-image: url('images/anf.jpg');">
    <div class="inner-wrapper">
        <h1><a>Service</a></h1>
    </div>
</section>
<div class="clearfix"></div>

<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="single-blog.html"><img alt="image" class="img-responsive" src="images/wifi1.png"></a>
                        </div>
                    </div>
                </div>
            
            
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="single-blog.html">Free Wifi</a></h3>
                        <p>Enjoy free wireless internet service here so that you don't need to
                        stay away from your friends & family.</p>
                       
                </div>
            </div>
        </div>
            

<div class="clear"></div>
<div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
    <div class="side-A">
        <div class="product-desc-side">
            <h3><a href="single-blog.html">Airline Meal</a></h3>
            <p>Our first concern is your comfort,so test the best meal here.
            All the meal we provide that is 100% healthy and pure.
        </p>
            
        </div>
    </div>

    <div class="side-B">
        <div class="product-thumb txt-rgt">
            <div class="image">
                <a class="arrow-left" href="single-blog.html"><img alt="imaga" class="img-responsive" src="images/category4.png"></a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>

        </div>
    </div>
</section>


<div class="clearfix"></div>
<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="single-blog.html"><img alt="image" class="img-responsive" src="images/cusa.jpg"></a>
                        </div>
                    </div>
                </div>
            
            
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="single-blog.html">Customer Support</a></h3>
                        <p>We can give you  24/7 service.Whenever you need any help from us.We are here to give you that.<br>
                            Our helpline is 9122, 3678,4778,
                        </p>
                       
                </div>
            </div>
        </div>

        </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</section>

<div class="clearfix"></div>
    <div class="single-bottom comment-form">
        <h3>Leave your Comment</h3>
        <?php 
            if (isset($sendMessage)) {
                echo $sendMessage;
            }
        ?>
        <form method="post">
            <input type="text" class="form-control" name="name" placeholder="name" required>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <textarea class="form-control" name="message" placeholder="Message Here...." required=""></textarea>
            <input type="submit" class="submit-btn" value="Send">
            <br>
            <br>
        </form>
    </div>
</div>

            

<section class="image-head-wrapper" style="background-image: url('images/banner3.png');">
    <div class="inner-wrapper">
        <h1><a>Hotels</a></h1>
    </div>
</section>


            <section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 about-left">
                <p>Associated <label>Hotel</label>Information <span></span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3><a>Asia</a></h3>
                <p> Get all the hotels names that we are associating.</p>
                <h4><a>Holets Name</a></h4>
                <ul class="list-unstyled list-inline">

             <li><a>Name-</a>Pan Pacific Sonargaon ||<a> Address-</a>Dhaka,Bangladesh</li>
             <li><a>Name-</a>HANSA-A premium residence ||<a> Address-</a>Uttara,Dhaka,Bangladesh</li>
                
                <li><a>Name-</a>Bashati Bay ||<a> Address-</a>Chittagong,Bangladesh</li>
             <li><a>Name-</a>Seagull ||<a> Address-</a>Cox's Bazar,Chittagong,Bangladesh</li>    
                   
                  <li><a>Name-</a>La Vista Hotel ||<a> Address-</a>Sylhet,Bangaldesh</li>
             <li><a>Name-</a>Nirvana Inn ||<a> Address-</a>Sylhet,Bangladesh</li> 

             <li><a>Name-</a>The Claridges ||<a> Address-</a>New Delhi,India</li>
             <li><a>Name-</a>Grand Godwin ||<a> Address-</a>New Delhi,India</li>

             <li><a>Name-</a>Hotel Executive Enclave ||<a> Address-</a>Mumbai,Maharashtra,India</li>
             <li><a>Name-</a>Tunga Regale ||<a> Address-</a>Mumbai,Maharashtra,India</li>

             <li><a>Name-</a>Taj Deccan ||<a> Address-</a>Hyderabad,Telengana,India</li>
             <li><a>Name-</a>Red Fox Hotel ||<a> Address-</a>Hyderabad,Telengana,India</li>

             
             <li><a>Name-</a>Taj Bengal ||<a> Address-</a>Kolkata,WB,India</li>
             <li><a>Name-</a>JW Marriot Hotel ||<a> Address-</a>Kolkata,WB,India</li>

             <li><a>Name-</a>Planktons Beach ||<a> Address-</a>Hulhumle,Maldives</li>
             <li><a>Name-</a>Boutique Beach ||<a> Address-</a>Dhigurah,Maldives</li>

              <li><a>Name-</a>Impiana KLCC Hotel ||<a> Address-</a>Kualampur,Malaysia</li>
             <li><a>Name-</a>M Boutique ||<a> Address-</a>Ipoh,Malaysia</li>

              <li><a>Name-</a>Nassima Royal Hotel ||<a> Address-</a>Trade Centre,Dubai</li>
             <li><a>Name-</a>Novotel Deira City Centre ||<a> Address-</a>Deira,Dubai</li>

             
              <li><a>Name-</a>Radisson Blu Hotel ||<a> Address-</a>Jeddah,Saudi Arabia</li>
             <li><a>Name-</a>Holiday Sun ||<a> Address-</a>Riyadh,Saudi Arabia</li>



                </ul>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</section>




                 <section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 about-left">
                <p>Associated <label>Hotel</label>Information <span></span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3><a>Europe</a></h3>
                <p> Get all the hotels names that we are associating.</p>
                <h4><a>Hotel Name</a></h4>
                <ul class="list-unstyled list-inline">
                    <li><a>Name-</a>The Lanesborough ||<a> Address-</a>Hyde Park Corner,London,England</li>

                    <li><a>Name-</a>Rosewood london ||<a> Address-</a>252 High Holborn,London,England</li>
                    
                    <li><a>Name-</a>Centrovital Hotel ||<a> Address-</a>252 Deutchland,Berlin,Germany</li>
                    <li><a>Name-</a>ibis hotel berlin Tegel ||<a> Address-</a>110 Ghjeustk,Berlin,Germany</li>
                    
                  <li><a>Name-</a>Mercer Hotel Barcelona ||<a> Address-</a>dels Lledo,7 Barcelona,Spain</li>
                 <li><a>Name-</a>Hotel de Serras ||<a> Address-</a>Passeig de colom,9 Barcelona,Spain</li>
                    

                    <li><a>Name-</a>Wellington Madrid ||<a> Address-</a>Velazquez,8 Madrid,Spain</li>
                    <li><a>Name-</a>Hotel Villa Magna ||<a> Address-</a>Paseo Castellana,22 Madrid,Spain</li>
                     

                    <li><a>Name-</a>Hotel Plaza Athenee Paris ||<a> Address-</a>25 Avenue Montaigne,Paris,France</li>
                    <li><a>Name-</a>Ritz Paris ||<a> Address-</a>15 Place vendome,Paris,France</li>
                    


                    <li><a>Name-</a>Bauer Palazzo ||<a> Address-</a>San marco,Venice,Italy</li>
                    <li><a>Name-</a>Belmon Hotel Cipriani ||<a> Address-</a>Giudecca 10,Venice,Italy</li>
                

                    <li><a>Name-</a>Lotte Hotel Moscow ||<a> Address-</a>Ulitsa Tverskaya,3 Moscow,Russia</li>
                    <li><a>Name-</a>Metropol ||<a> Address-</a>Teatranly Proezd,2 Moscow,Russia</li>
                     

                    <li><a>Name-</a>MYRIAD by SANA Hotels ||<a> Address-</a>10,Nacoes Lisbon,Portugal</li>
                    <li><a>Name-</a>Corinthia Hotel Lisbon ||<a> Address-</a>Pinheiro,105 Lisbon,Portugal</li>
                    
                </ul>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</section>

 <section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 about-left">
                <p>Associated <label>Hotel</label>Information <span></span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3><a>The Americas</a></h3>
                <p> Get all the hotels names that we are associating.</p>
                <h4><a>Holets Name</a></h4>
                <ul class="list-unstyled list-inline">

                    <li><a>Name-</a>Off Soho Suites Hotel ||<a> Address-</a>11 Rivington St New York,USA</li>
                    <li><a>Name-</a>Even Hotels New York ||<a> Address-</a>312 W #5th St New York,USA</li>

                    <li><a>Name-</a>The Hollywood Rootsevelt ||<a> Address-</a>233 abbouts,Los Angeles,USA</li>
                    <li><a>Name-</a>The Jeremy West Hollywood ||<a> Address-</a>277 west park,Los Angeles,USA </li>

                    

                    <li><a>Name-</a>Capitol View King ||<a> Address-</a>11 Riving,Washington DC,USA</li>
                    <li><a>Name-</a>The Presidency ||<a> Address-</a>5th St Washington DC,USA/li>

                        <li><a>Name-</a>Hyatt House Mount Laurel ||<a> Address-</a>Mount Laurel,NJ,USA</li>
                    <li><a>Name-</a>Hyatt Regency Princeton ||<a> Address-</a>Princeton,NJ,USA </li>

                    <li><a>Name-</a>The Beverly Hotel ||<a> Address-</a>Toronto,Canada</li>
                    <li><a>Name-</a>Templar Hotel ||<a> Address-</a>112 Toronto,Canada</li>

                    <li><a>Name-</a>Tryo Sao Paulo Tatuape Hotel ||<a> Address-</a>112 west,Sao Paulo,Brazil</li>
                    <li><a>Name-</a>Manferrari Hotel ||<a> Address-</a>312 W,Contagem,Brazil</li>

                    <li><a>Name-</a>Arawi Lima Miraflores ||<a> Address-</a>Lima,Peru</li>
                    <li><a>Name-</a>Arequipa Inn ||<a> Address-</a>West Arequipa,Peru</li>

                    <li><a>Name-</a>Mont Caribe ||<a> Address-</a>113 San Juan,Mexico</li>
                    <li><a>Name-</a>Dreams Miramar ||<a> Address-</a>Ceiba,Mexico</li>


                </ul>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</section>

<section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 about-left">
                <p>Associated <label>Hotel</label>Information <span></span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3><a>The Africas</a></h3>
                <p> Get all the hotels names that we are associating.</p>
                <h4><a>Holets Name</a></h4>
                <ul class="list-unstyled list-inline">
                    <li><a>Name-</a>Cape Grace ||<a> Address-</a>Cape Town,South Africa</li>
                    <li><a>Name-</a>Saxon Boutique Hotel & Spa ||<a> Address-</a>Johannesburg,South Africa</li>

                    <li><a>Name-</a>Albakech House ||<a> Address-</a>Marrakesh,Morocco</li>
                    <li><a>Name-</a>Les Deux Tours ||<a> Address-</a>Douar Abidad,Morocco</li>

                    <li><a>Name-</a>Dusit Thani lakeView Cairo ||<a> Address-</a>Cairo Governorate, Egypt</li>
                    <li><a>Name-</a>Four Seasons Hotel Cairo ||<a> Address-</a>11519, Cairo Governorate, Egypt</li>
                    
                </ul>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</section>

<section class="about-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 about-left">
                <p>Associated <label>Hotel</label>Information <span></span></p>
            </div>
            <div class="col-md-7 about-right">
                <h3><a>Australia</a></h3>
                <p> Get all the hotels names that we are associating.</p>
                <h4><a>Holets Name</a></h4>
                <ul class="list-unstyled list-inline">
                    <li><a>Name-</a>Freestyle Resort Port Dougles ||<a> Address-</a>Port Dougles,Australia</li>

                    <li><a>Name-</a>Aqua Resort Busselton ||<a> Address-</a>Busselton,Australia</li>
                    
                </ul>
                
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</section>

 <div class="clearfix"></div>
<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="single-blog.html"><img alt="image" class="img-responsive" src="images/uber.png"></a>
                        </div>
                    </div>
                </div>
            
            
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="single-blog.html">Transport Service</a></h3>
                        <p>we will provide you transport system. you can  book your ride to our transport service provider 'UBER' as per your wishes and choices.
                        </p>
                       
                </div>
            </div>
        </div>

        </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
</section>



<!---footer--->
<?php include_once 'footer.php'; ?>
