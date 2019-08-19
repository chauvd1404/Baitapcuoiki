
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/css_login.css">
</head>
<body>
<div class="container_fluid">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 text-center thongbaoloi">
    <?php 
      require('connect.php');
      if(isset()){

      }
    ?>
    
    </div>
  </div>
  <div class="container">
    <div class="col-md-6 col-md-offset-3 ">
      <form action="" method="post" role="form">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" class="form-control">

          <label for="password"><b>Old Password</b></label>
          <input type="password" placeholder="Enter Password" name="password_old" >

          <label for="password"><b>New Password </b></label>
          <input type="password" placeholder="Enter New Password" name="password_new" >
              
          <button type="submit" name="change_pass" id="" class="btn btn-primary">Save</button>
          
        </div>
      </form>
    </div>  
  </div>
</body>
</html>
