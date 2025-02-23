<?php 
session_start();
  if(!isset($_SESSION['login'])){
    echo "Your are not a Valid User!! Go to <a href=\"../visitor/login.php\"> Login </a>";
  }
  else {
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Clients Management </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />

  <style>
    table, tr, td {
      border: 1px solid black;
      text-align: center;
    }
  </style>
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/owner/header.php';?>
    <!-- end header section -->

    <section class="contact_section layout_padding">
      <div class="bg-img1">
        <img src="../../images/bg-img-1.png" alt="">
      </div>
      <div class="bg-img2">
        <img src="../../images/bg-img-2.png" alt="">
      </div>
      <div class="container">
        <div class="heading_container">
          <h2>
            User Management
          </h2>
          <p>
            Everything You want to Know about Your Clients
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> 
                  <form method="post">
                      <table>
                        <tr>
                          <td> First Name </td>
                          <td> Middle Name </td>
                          <td> Last Name </td>
                          <td> User Name </td>
                          <td> Password </td>
                          <td> Phone Number </td>
                          <td> Gende </td>
                          <td> Email </td>
                          <td> Address </td>
                          <td> User Type </td>
                          <td> Actions </td>


                        </tr>
                    <?php 
                      $db = mysqli_connect('localhost', 'root', '', 'sap');
                      $sql="select * from users;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['fname']; ?>
                          </td>
                          <td>
                            <?php echo $data['mname']; ?>
                          </td>
                          <td>
                            <?php echo $data['lname']; ?>
                          </td>
                          <td>
                            <?php echo $data['username']; ?>
                          </td>
                          <td>
                            <?php echo $data['password']; ?>
                          </td>
                          <td>
                            <?php echo $data['contact']; ?>
                          </td>
                          <td>
                            <?php echo $data['gender']; ?>
                          </td>
                          <td>
                            <?php echo $data['email']; ?>
                          </td>
                          <td>
                            <?php echo $data['address']; ?>
                            </td>
                            <td>
                              <?php echo $data['usertype']; ?>
                          </td>
                          <td>
                            <a href="ownerclients.php?edit=<?php echo $data['uid'];?>#edit"> Edit </a>
                            <a href="ownerclients.php?delete=<?php echo $data['uid'];?>"> Delete </a>
                          </td>
                        </tr> 
                        <?php
                      }
                    ?>
                      </table>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php
      if(isset($_GET['edit'])){ 
        $uid=$_GET['edit'];
        $sql="select * from users where uid=$uid;";
        $results = mysqli_query($db,$sql);
        while ($data = mysqli_fetch_array($results)) {
        ?>
      <center>
        <div id="edit">
        <h2> Edit Information </h2>
        <table>
        <form method="POST">
          <tr>
            <td><label> First Name : </label></td>
            <td><input type="text" name="fname" value="<?php echo $data['fname'];?>"></td>
          </tr>
          <tr>
            <td><label> Middle Name : </label></td>
            <td><input type="text" name="mname" value="<?php echo $data['mname'];?>"></td>
        </tr>
          <tr>
            <td><label> Last Name : </label></td>
            <td><input type="text" name="lname" value="<?php echo $data['lname'];?>"></td>
        </tr>
          <tr>
            <td><label> User Name : </label></td>
            <td><input type="text" name="username" value="<?php echo $data['username'];?>"></td>
        </tr>
          <tr>
            <td><label> Password : </label></td>
            <td><input type="text" name="password" value="<?php echo $data['password'];?>"></td>
        </tr>
          <tr>
            <td><label> Phone Number : </label></td>
            <td><input type="number" name="contact" value="<?php echo $data['contact'];?>"></td>
        </tr>
        <tr>
            <td><label> Gender : </label></td>
            <td> Male <input type="radio" name="gender" value="male" <?php if($data['gender'] == "male") { echo "checked";} ?>>
             Female <input type="radio" name="gender" value="female" <?php if($data['gender'] == "female") { echo "checked";} ?>>
             Other <input type="radio" name="gender" value="other" <?php if($data['gender'] == "other") { echo "checked";} ?>>
            </td>
        </tr>
          <tr>
            <td><label> Email : </label></td>
            <td><input type="email" name="email" value="<?php echo $data['email'];?>"></td>
        </tr>
          <tr>
            <td><label> Address : </label></td>
            <td><input type="text"  name="address" value="<?php echo $data['address'];?>"></td>
        </tr>
        <tr>
            <td><label> user Type : </label></td>
            <td><input type="text"  name="usertype" value="<?php echo $data['usertype'];?>"></td>
        </tr>
        
          <tr> 
            <td colspan="2"><input type="submit" name="update" value="Update"></td>
        </tr>
        </form>
        </table>
      </center>
      <?php } } ?>
      
        <?php
          if(isset($_POST['update'])) {
              $fname=$_POST['fname'];
              $mname=$_POST['mname'];
              $lname=$_POST['lname'];
              $username=$_POST['username'];
              $password=$_POST['password'];
              $contact=$_POST['contact'];
              $gender=$_POST['gender'];
              $email=$_POST['email'];
              $address=$_POST['address'];
              $usertype=$_POST['usertype'];
              $sql="UPDATE `users` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`username`='$username',`password`='$password',`contact`='$contact',gender='$gender',`address`='$address',`email`='$email', usertype='$usertype'  WHERE uid=$uid;";
              mysqli_query($db, $sql);
              echo '<script> alert("Record Updated Successfully."); </script>';
              echo '<script> document.location.href="ownerclients.php"; </script>';
          }
      ?>

    <?php
      if(isset($_GET['delete'])){
        $uid=$_GET['delete'];
        header('location:ownerclients.php');
        $sql="Delete from users where uid=$uid;";
        mysqli_query($db, $sql);
        echo '<script> alert("Record Deleted Successfully."); </script>';
        echo '<script> document.location.href="ownerclients.php"; </script>';
      }
    ?>
  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  ?>

</body>

</html>