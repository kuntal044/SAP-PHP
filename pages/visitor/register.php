<!DOCTYPE html>
<html>
  <script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    
</script>
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

  <title> Shah Abhay PhotoGraphy | Registration </title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/visitor/header.php'; ?>
    <!-- end header section -->
  </div>

  <!-- Registration section -->

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
          Register Here
        </h2>
        <p>
          Create your own account 
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="register.php" method="post">
              <div class="contact_form-container">
                <div>
                  <div>
                    <label> First Name : </label>
                    <input type="text" name="fname">
                  </div>
                  <div>
                    <label> Middle Name : </label>
                    <input type="text" name="mname">
                  </div>
                  <div>
                    <label> Last Name : </label>
                    <input type="text" name="lname">
                  </div>
                  <div>
                    <label> User Name : </label>
                    <input type="text" name="user">
                  </div>
                  <div>
                    <label> Password : </label>
                    <input type="password" name="pass">
                  </div>
                  <div>
                    <label> Confirm Password : </label>
                    <input type="password" name="cpass">
                  </div>
                  <div>
                    <label> Phone Number : </label>
                    <input type="number" name="num">
                  </div>
                  <div>
                    <label> Email : </label>
                    <input type="text" name="email">
                  </div>
                  <div>
                    <label> Address : </label>
                    <input type="text"  name="add">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <!-- <button type="submit" style="border: solid 2px white;" name="submit">
                      Upload Profile Photo
                    </button>  -->
                    <button type="submit" style="border: solid 2px white;" name="submit">
                      Register
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- Backend -->

   <?php
   if(isset($_POST['submit']))
   {
      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];
      $user=$_POST['user'];
      $pass=$_POST['pass'];
      $cpass=$_POST['cpass'];
      $num=$_POST['num'];
      $email=$_POST['email'];
      $add=$_POST['add'];
      $type="client";
    
      $numberpattern="/^[0-9]{10}+$/";
      if(isset($email))
      {
        if(isset($num))
        {
          if(preg_match($numberpattern, $num)==0) {
            echo '<script> alert("Invalid Mobile Number !"); </script>';
          }
        }   
      }

      $db = mysqli_connect('localhost', 'root', '', 'sap');

      $sql = "INSERT INTO users (fname,mname,lname,username,password,contact,address,usertype,email) VALUES ('$fname', '$mname', '$lname', '$user', '$pass', $num, '$add', '$type', '$email');";
      mysqli_query($db,$sql);
      echo '<script> alert("Your Account Has Been Successfully Registered!!!");</script>';
    }
    ?>

   <!-- info section -->
   <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

</body>

</html>