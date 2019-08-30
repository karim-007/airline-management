<?php include_once 'header.php'; ?>

<?php
  if (isset($_POST['name']) && isset($_POST['email'])) {
    $booking = $cs->addBooking($_POST);
  }
?>

<!--end-->
<section class="image-head-wrapper" style="background-image: url('images/bty.jpg');">
    <div class="inner-wrapper">
        <h1><a>Booking</a></h1>
    </div>
</section>

<div class="jumbotron text-center">
<h1><a>Booking</a></h1> 
<?php
  if (isset($booking)) {
    echo $booking;
  }
?>
<br>
<br>
<div class="row">
<form method="post" class="form">

   <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
          <label for = "firstname">Name </label>
          <input class="form-control" name="name" placeholder="Name" type="text" required autofocus />
          <br>

          <label for = "email">Email </label>
          <input class="form-control" name="email" placeholder="Email" type="Email" required />
        <br>
          <label for = "To">To</label>
          <select class="form-control" name="to">
              <option>
                  Select One
              </option>
             <?php $urole = $cs->getAllAirport();
              foreach ($urole as $result) { ?>
              <option value="<?php echo $result->aId; ?>"><?php echo $result->name; ?></option>
              <?php } ?>
        </select>
         <br>
         <label for = "From">From </label>
         <select class="form-control" name="from">
            <option>Select One</option>
            <?php $urole = $cs->getAllAirport();
              foreach ($urole as $result) { ?>
              <option value="<?php echo $result->aId; ?>"><?php echo $result->name; ?></option>
            <?php } ?>
         </select>
         <br>

        <label for="Class">Class</label>
        <select class="form-control" name="class">
          <option>First</option>
          <option>Business</option>
          <option>Economy</option>
        </select>
        <br>

         <label for="DepartureTime">Departure Time</label>
         <input type="time" name="time" required="">
        <br>
        <label for="DepartureDate">Departure Date</label>
          <input type="date" name="date" required="">
        <br>

        <button class="submit-btn" type="submit" value="booknow">Book Now</button>
        <br>
        <br>
        <button type="button" class="book-now-btn"><a href="payment.php">Payment</a></button>
  </div>
</form>
</div>
</div>
           <!---footer--->
<?php include_once 'footer.php'; ?>

