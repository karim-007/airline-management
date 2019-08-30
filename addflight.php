<?php include_once 'adminheader.php'; ?>
<?php
  if (isset($_POST['f_no']) && isset($_POST['f_Instance'])) {
      $addfl = $adm->addFlight($_POST);
  }

?>
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/added1.png');">
        <div class="inner-wrapper">
            <h2><a>Add Flights</a></h2>
        </div>
    </section>
   
        <div class="jumbotron text-center">
            
        <h1><a> Add Flight </a></h1>
        <?php
          if (isset($addfl)) {
            echo $addfl;
          }
        ?>
        <br>
        <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
          <form class="form" method ="post">
              <table>
              <tr>
              
              <td> <label for = "flight_no">Flight Number: </label><input class="form-control" name="f_no" id = "flight_no" placeholder="Flight Number" /></td>
              <td><label for = "flight_Instance">Flight Name: </label><input class="form-control" name="f_Instance" id= "flight_Instance" placeholder="Flight Instance"  /></td>
              </tr>
              <tr>
              <td>
                <label for = "from">From Airport: </label>
                <select name="fFrom" class="form-control" required>
                  <option>Select One</option>
                  <?php $urole = $cs->getAllAirport();
                  foreach ($urole as $result) { ?>
                  <option value="<?php echo $result->aId; ?>"><?php echo $result->name; ?></option>
                <?php } ?>
              </select> 
              </td>
              <td> 
                <label for = "to">To Airport: </label>
                <select name="fTo" class="form-control" required>
                  <option>Select One</option>
                  <?php $urole = $cs->getAllAirport();
                  foreach ($urole as $result) { ?>
                  <option value="<?php echo $result->aId; ?>"><?php echo $result->name; ?></option>
                  <?php } ?>
                </select>
              </td>
               </tr>
              <tr>
              <td><label for = "depart_time">Departure Time: </label><input class="form-control" name="time" id = "depart_time" placeholder="Departure Time" type="time"/></td>
               <td> <label for = "depart_date">Departure Date: </label><input class="form-control" name="date" id= "depart_date" placeholder="Departure Date"  type="date"/></td>
              
                </tr>
               
                </table>
                
               <br/>
              <button class="submit-btn" type="submit">Add Flight</button>
            </form>
        </div>
 </div>   
</div>
           <!---footer--->
<?php include_once 'footer.php'; ?>