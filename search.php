<?php include_once 'header.php'; ?>
<?php
    if (isset($_POST['fname'])) {
        $searchrs = $cs->searchFlight($_POST['fname']);
    }
?>

    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/sear.jpg');">
        <div class="inner-wrapper">
            <h1><a>Search Flight</a></h1>
        </div>
    </section>   
<div class="jumbotron text-center">
    <h1><a>Search Flight</a></h1> 
    <br>
    <br>

    <div class="row">
        <form method="post" class="form">       
         <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
                <label for = "firstname">Enter Flight name </label>
                <input name="fname" placeholder="flight name" type="text" class="form-control" required autofocus />
                <br>
        <button class="submit-btn" type="submit" value="submit">Search</button>
        </div>
        </form>
    </div>
    <table method="post" class="table" role="table" style="width: 100%">

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
            <th><a>Sl</a></th>
            <th><a>Flight Number</a></th>
            <th><a>f NAme</a></th>
            <th><a>from</a></th>
            <th><a>to</a></th>
            <th><a>Time</a></th>
            <th><a>date</a></th>
            
        </tr>
    <?php
     if(isset($searchrs)){ 
        $i=0;
        foreach ($searchrs as $rs) { $i ++; ?>
        <tr>
            <td><a><?php echo $i; ?></a></td>
            <td><a><?php echo $rs->fNumber;?></a></td>
            <td><a><?php echo $rs->fInstance;?></a></td>
            <td><a><?php echo $cs->getAirportById($rs->fFrom); ?></a></td>
            <td><a><?php echo $cs->getAirportById($rs->fTo); ?></a></td>
            <td><a><?php echo $fm->formatTime($rs->time); ?></a></td>
            <td><a><?php echo $fm->formatDateOnly($rs->date); ?></a></td>   
        </tr>
    <?php } } ?>
    </div>
    </table>
</div>
    
    <!---footer--->
<?php include_once 'footer.php'; ?>

