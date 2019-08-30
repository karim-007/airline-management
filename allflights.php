<?php include_once 'header.php'; ?>

<!--end-->
<section class="image-head-wrapper" style="background-image: url('images/vki.jpg');">
    <div class="inner-wrapper">
        <h2><a>Admin's View</a></h2>
    </div>
</section>

    
    <div class="jumbotron text-center">
            <h2><a>View All Flights</a></h2> 
            <br>
            <br>
            <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
            <h4><span class="glyphicon glyphicon-user"></span></h4>
        </div>
             </div> 
             <br>
        

<div class="row">
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
    $allfl = $cs->getAllFlight();
 if(isset($allfl)){ 
    $i=0;
    foreach ($allfl as $rs) { $i ++; ?>
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
</div>            <!---footer--->
<?php include_once 'footer.php'; ?>