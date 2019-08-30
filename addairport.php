<?php include_once 'adminheader.php'; ?>
<?php
  if (isset($_POST['aName'])) {
      $addair = $adm->addAirportName($_POST['aName']);
  }

?>
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/added1.png');">
        <div class="inner-wrapper">
            <h2><a>Add Airport</a></h2>
        </div>
    </section>
   
        <div class="jumbotron text-center">
            
        <h1><a> Add Airport </a></h1>
        <?php
          if (isset($addair)){
              echo $addair;
          } 

        ?>
        <br>
        <br>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
          <form class="form" method ="post">
              <table>
              <tr>
              
              <td> <label for = "flight_no">Airport Name </label><input class="form-control" name="aName" placeholder="Airport name" required="" /></td>
              
              </tr>
              <tr>
                <td><button class="submit-btn" name="addair" type="submit" >Add Airport</button></td>
              </tr>
               
                </table>
            </form>
        </div>
 </div>   
</div>
           <!---footer--->
<?php include_once 'footer.php'; ?>