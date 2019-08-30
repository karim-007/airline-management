
<?php include_once 'header.php'; ?>



<!--end-->
<section class="image-head-wrapper" style="background-image: url('images/payment.jpg');">
    <div class="inner-wrapper">
        <h1><a>Payment</a></h1>
    </div>
</section>

   <div class="jumbotron text-center">
<h1><a>Payemnt</a></h1> 
<br>

<img src="images/visa1.png">
<br>
<div class="row">
<form action="payment.php" method="post" class="form" role="form">
<input type="hidden" name="redirurl" value="<? echo $_SERVER['HTTP_REFERER']; ?>" />

 <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
        <label for = "name">Username: </label><input class="form-control" name="username" id = "username" placeholder="Enter Username" type="text" required autofocus />
        <br>

        
        <label for = "cardnum">Card Number: </label><input class="form-control" name="cardnum" id = "cardnum" placeholder="Card Number" type="text" required />
       <br>
        <label for = "payemntAmount ">Payment Amount: </label><input class="form-control" name="paymentAmount" id = "paymentAmount" placeholder="PaymentAmount" type="text" required />
       

<br />

<button class="submit-btn" type="submit" value="submit">Payment</button>
</div>
</form>
</div>
</div>


<div class="clearfix"></div>
<section class="resort-overview-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                <div class="side-A">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="single-blog.html"><img alt="image" class="img-responsive" src="images/BKash.png"></a>
                        </div>
                    </div>
                </div>
            
            
                <div class="side-B">
                    <div class="product-desc-side">
                        <h3><a href="single-blog.html">Other Payment Option</a></h3>
                        <p>YOU CAN ALSO CLEAR YOUR PAYMENT USING BKASH. </p>
                        
                          <p>OUR BKASH NUM IS:</p>
                            <p> +8801521201132 </p>
                            
                           <p> +880139600069 </p>
                        
                       
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
