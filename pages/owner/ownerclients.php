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
      padding: 5px;
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
                          <td> ID </td>
                          <td> First Name </td>
                          <td> Middle Name </td>
                          <td> Last Name </td>
                          <td> User Name </td>
                          <td> Password </td>
                          <td> Phone Number </td>
                          <td> Email </td>
                          <td> Address </td>
                          <td> Actions </td>

                        </tr>
                    <?php 
                      $db = mysqli_connect('localhost', 'root', 'root', 'sap');
                      $sql="select * from users;";
                      $results = mysqli_query($db,$sql);
                      while ($data = mysqli_fetch_array($results)) { ?>
                        <tr>
                          <td>
                            <?php echo $data['uid']; ?>
                          </td>
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
                            <?php echo $data['email']; ?>
                          </td>
                          <td>
                            <?php echo $data['address']; ?>
                          </td>
                          <td>
                            <a href="ownerclients.php?edit=<?php echo $data['uid'];?>"> Edit </a>
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
      if(isset($_GET['del'])){
    $uid=$_GET['del'];
    $sql="Delete from info where id=$uid;";
    mysqli_query($db, $sql);
    $_SESSION['message']="Record Deleted Successfully.";
    header('location: records.php');
  ?>

<?php
        if(isset($_GET['edit'])){ ?>
                <form method="POST">
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
                </form>

        <?php
          $uid=$_GET['edit'];
          $sql="update users set fname='$fname', lname='$lname', $mname='$mname', $username='$username', password='$password, contact='$contact', email='$email', address='$address' where uid=$uid;";
          mysqli_query($db, $sql);
          header('location:ownerclients.php');
          echo '<script> alert("Record Edited Successfully."); </script>';
        }
      ?>
  <!-- footer section -->
  <?php
    include '../../footers/footer.php';
  ?>

</body>

</html>