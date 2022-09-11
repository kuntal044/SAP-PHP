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

  <title> Shah Abhay PhotoGraphy | Contact Us </title>


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

  <!-- contact section -->

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
          Contact Us
        </h2>
        <p> Tell us Your Quesrie or Message or Suggestions or Requests </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <form action="" method="post">
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
                    <label> Email : </label>
                    <input type="email" name="email">
                  </div>
                  <div class="">
                    <label> Message : </label>
                    <input type="text" class="message_input" name="msg">
                  </div>
                  <div class=" d-flex justify-content-center ">
                    <button type="submit" name="submit">
                      Send
                    </button>
                  </div>
                    <span> <br> <br> <h4>
                      Email : abhayshah@gmail.com
                      <br> <br>
                      Mobile Number : 9874563210
                    </h4></span>
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
    if(isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
  }
?>


  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

  <script type="text/javascript" src="../../js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../../js/bootstrap.js"></script>

</body>

</html>