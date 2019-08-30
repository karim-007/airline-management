
<?php include_once 'header.php'; ?>
<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $loginmatch = $cs->loginUser($_POST);
    }
?>
    <!--end-->
    <section class="image-head-wrapper" style="background-image: url('images/banner5.jpg');">
        <div class="inner-wrapper">
            <h1><a>Log In</a></h1>
        </div>
    </section>
    
       <div class="jumbotron text-center">
    <h1><a>Log In</a></h1> 
    <?php
        if (isset($loginmatch)) {
            echo $loginmatch;
        }
    ?>
    <br>
    <br>

    <div class="row">
<form method="post" class="form" role="form">
    
     <div class="col-xs-12 col-sm-12 col-md-4 col-sm-offset-4 col-xs-offset-2 col-md-offset-4" >
            <label for = "firstname">Username: </label><input class="form-control" name="username" placeholder="Enter Userame" type="text" required autofocus />
            <br>

            
           <label for = "lasttname"> Password: </label><input class="form-control" name="password" placeholder="Enter Password" type="password" required />
    <br />
    
    <button class="submit-btn" type="submit">Log In</button>
    </div>
</form>
    </div>
</div>
    <!---footer--->
<?php include_once 'footer.php'; ?>
