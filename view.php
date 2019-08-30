<?php include_once 'header.php'; ?>
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
        <th><a>Name</a></th>
        <th><a>Email</a></th>
        <th><a>To</a></th>
        <th><a>From</a></th>
        <th><a>Class</a></th>
        <th><a>Departure Time</a></th>
        <th><a>Departure Date</a></th>
    </tr>
    <?php
        if (SESSION::get('id') != NULL) {
            $bk = $cs->getBookingListByUserId(SESSION::get('id'));
            if($bk){
                foreach ($bk as $row) {
    ?>
    <tr>
        <th><?php echo $row->name; ?></th>
        <th><?php echo $row->email; ?></th>
        <th><?php echo  $cs->getAirportById($row->fTo); ?></th>
        <th><?php echo $cs->getAirportById($row->fFrom); ?></th>
        <th><?php echo $row->class; ?></th>
        <th><?php echo $fm->formatTime($row->time); ?></th>
        <th><?php echo $fm->formatDateOnly($row->date); ?></th>
    </tr>
<?php } } } ?>
</div>
</table>
</div>
</div>

<section>

  <div class="text-center"><button type="button" class="book-now-btn">Edit Booking</button></div>
  <br>
  <div class="text-center"><button type="button" class="book-now-btn">Cancel Booking</button></div>
</section>

<!---footer--->
<?php include_once 'footer.php'; ?>
