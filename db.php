<html>
    <title>
        Database Testing
    </title>
</html>
<body>
    <table>
  <?php
      $db = mysqli_connect('localhost', 'root', '', 'sap');
      $results = mysqli_query($db, "SELECT SrvEveName,SrvEveCharges FROM tbl_service_events;");
      while ($row = mysqli_fetch_array($results)) {
          $amt[$row['SrvEveName']]=$row['SrvEveCharges'];
          $serv=$row['SrvEveName'];  
          // echo '<script> alert("'.$serv.'");</script>';
          ?>
              <tr>
                <td>
                  <label for=" <?php echo $serv;?>"> <?php echo ucwords($serv); ?> </label>
                </td>
                <td>
                  <input type="checkbox" id="<?php echo $serv;?> " onclick="est(this);" name="services[]" value="<?php echo $serv;?>">
                </td>
            </tr> 
          <?php
          }
      ?>
          <!-- <tr>
            <td>
              <label for="drone"> Drone </label>
            </td>
            <td>
              <input type="checkbox" id="drone" onclick="est(this);" name="services[]" value="drone">
            </td>
          </tr>
          <tr>
            <td>
              <label for="ledwall"> LED Wall </label>
            </td>
            <td>
              <input type="checkbox" id="ledwall" onclick="est(this);" name="services[]" value="LED wall">
            </td>
          </tr>
          <tr>
            <td>
              <label for="cinemato"> CinematoGrapher </label>
            </td>
            <td>
              <input type="checkbox" id="cinemato" name="services[]"  onclick="est(this);" value="cinematographer">
            </td>
          </tr>
          <tr>
            <td>
              <label for="candid"> Candid PhotoGrapher </label>
            </td>
            <td>
              <input type="checkbox" id="candid" name="services[]"  onclick="est(this);" value="candid photographer">
            </td>
          </tr>
         -->
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