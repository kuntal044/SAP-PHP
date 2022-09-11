<html>
    <title>

    </title>
</html>
<body>
    <table>
<?php
    $user="k";
    $pass="k";
    $db = mysqli_connect('localhost', 'root', '', 'sap');
    // $results = mysqli_query($db, "SELECT username,password,usertype FROM users;");
    // while ($row = mysqli_fetch_array($results)) {
    // $u=$row['username'];
    // $p=$row['password'];
    // $t=$row['usertype'];
    // if($u==$user && $p==$pass) {
    //     $login=1;
    //     break;
    // }
    // }

    // if($login==1) {
    // echo '<script> alert("Login Successfull !!");</script>';
    // }

    // $results = mysqli_query($db, "SELECT * FROM tbl_service_events;");
    // while ($row = mysqli_fetch_array($results)) {
    //     echo $row['SrvEveID'];
    //     echo $row['SrvEveName'];
    //     echo $row['SrvEveCharges'];
    // }

    // function update2() {
    //     if ($conn->query("UPDATE `table` SET `value1`='1', `value2`='2'") === TRUE) {
    //         echo 'YES!';
    //     }
    // }



    $results = mysqli_query($db, "SELECT SrvEveName,SrvEveCharges FROM tbl_service_events;");
    

    while ($row = mysqli_fetch_array($results)) {
    }
    
    
    while ($row = mysqli_fetch_array($results)) {
        $amt[$row['SrvEveName']]=$row['SrvEveCharges'];
        $serv=$row['SrvEveName'];  ?>
            <tr>
                <td>
                    <label for=" <?php echo $serv; ?>" >  <?php echo ucwords($serv); ?> </label>
                </td>
                <td>
                    <input type="checkbox" id="<?php echo $serv; ?> " onclick="est(this);" name="services[]" value="<?php echo $serv; ?> ">
                </td>
        </tr> 
        <?php
        }
    ?>
    </table>
    <br>
    Budget = <span id="esti"> 0 </span>

    <script> 
  var values=[];
  var count=0;
  var budget=0;
  var sum=0;
  var rs=0;
  var str="services";


  var add = (a, b) => {
    // alert(a+b)
    // console.log(a+b)
    return (a+b)
  }
  
  let subt = (x, y) => {
    // alert(x-y)
    // console.log(x-y)
    return (x-y)
  }

  function est(checkbox) {
    if(checkbox.checked){
      values.push(checkbox.value);
      count++;
      var arr = <?php echo json_encode($amt); ?>;
      for (var key in arr) {
        rs = Number(arr[key]);
        if(key == checkbox.value) {
          budget=add(budget,rs);
          document.getElementById('esti').innerHTML=budget; 
        }
      }
      // alert(values);
      // alert(count);
    }
    
    
    if(!checkbox.checked){
      values.splice(values.indexOf('checkbox.value'),1);
      count--;
      var arr = <?php echo json_encode($amt); ?>;
      for (var key in arr) {
        rs = Number(arr[key]);
        if(key == checkbox.value) {
          budget=subt(budget,rs);
          document.getElementById('esti').innerHTML=budget; 
        }
      }
      // alert(values);
      // alert(count);
    }
  
    // str = values.toString();
    // alert(str);
    // pass(str);
    
  }

  
</script>
    </body>
    </html>