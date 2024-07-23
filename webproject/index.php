<html lang="en">
<head>
<style>

    
    </style>
  <title>online exam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="file/bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <script src="file/jquery.min.js"></script>
  <script src="file/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
  <script src="file/myjquery.js"></script>
</head>
<body>

<div class="container-fluid" style="height:100px;background-color: #004040">
  <h1 style="text-align:center;padding-top: 20px;color: white">Online Examination Portal</h1>


</div>

<div class="container" >
<div class="row">

<div class="col" >
<h1>Log in...</h1>
<form action="login.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="2">Submit</button>
  </form>
  <?php
  if(isset($_REQUEST['err']))
    {
        echo"<h1 style='text-align:center;'> you are already registered";
        echo"<h1  style='text-align:center;'> please login";
    }
    if(isset($_REQUEST['err1']))
    {
        echo"<h1 style='text-align:center;'> you are not registered";
        echo"<h1  style='text-align:center;'> please sign up";
    }
    if(isset($_REQUEST['err2']))
    {
        echo"<h1 style='text-align:center;'> username or password is incorrect";
        echo"<h1  style='text-align:center;'> please try again...";
    }
     if(isset($_REQUEST['err12']))
    {
        echo"<h1 style='text-align:center;'> Please first log in";
      
    }
    ?>
</div>


<div class="col">
<form  action="signup1.php" method="post" >
  <label style="margin-top:50px;" >Name:  </label>
  <input type="text" class="form-control" style="margin-top:0px;" required name="name" value="kapil"> 
  <label >Email:</label>
  <input type="email" name="email1" class="form-control" required value="kapilchhipa4@gmail.com">
<label>Dob:</label>
<input type="date" class="form-control" name="dob" required value="14--4-98"><br>
<label> Gender:</label>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio1" value="male" name="gender" required>
      <label class="custom-control-label" for="customRadio1" >male</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="female" required>
      <label class="custom-control-label" for="customRadio2">female </label>
    </div>
     <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="other" name="gender" value="other" required>
      <label class="custom-control-label" for="other" >Other </label>
    </div>
<br>
<label>Mobile No.</label>
<input type="tel" class="form-control" pattern="^\d{10}$" required name="mobile"  value="8773737373">
<label>Password.</label>
<input type="password" class="form-control" id="status" name="password" value="password" required >

<label>Course:</label>
<input type="text" class="form-control"  required value="Mca" name="course">
<label>Institute:</label>
<input type="text" class="form-control"  required  value="NITc" name="institute">
  
<br>
  <button type="submit" class="btn btn-primary" name="1">Submit</button>
</form> 
</div>


</div>


</div>



</body>