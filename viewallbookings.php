<?php include_once 'header.php'; ?>
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/vki.jpg');">
        <div class="inner-wrapper">
            <h2><a>Admin's View</a></h2>
        </div>
    </section>
   
        
    <div class="jumbotron text-center">
        <h2><a>View Booking</a></h2> 
        <br>
        <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <h4><span class="glyphicon glyphicon-user"></span><?php echo "$user"; ?></h4>
        </div>
        </div> 
         <br>
            

    <div class="row">
    <table action="View.php" method="post" class="table" role="table" style="width: 100%">
    
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
        <style>
            table,th,td{
                border: 3px solid navy ; 
            }
            th,td{ 

                padding: 5px;
                text-align: center;

            }
        </style>

        <tr>
            <th><a>Name</a></th>
            <th><a>Email</a></th>
            <th><a>To</a></th>
            <th><a>From</a></th>
            <th><a>Class</a></th>
            <th><a>Departure Time</a></th>
            <th><a>Arrival Time</a></th>
            <th><a>Departure Date</a></th>
            <th><a>Arrival Date</a></th>
            <th><a>Credit Card Number</a></th>
            <th><a>Payment Amount</a></th>
            <th> <button type="button" class="book-now-btn">Remove Record</button></th>
        </tr>
    </div>
    </table>
    </div>
</div>            <!---footer--->
<?php include_once 'footer.php'; ?>
