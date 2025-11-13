<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    
    
  </head>
  <body>
  <div class="sidebar">
      <h2>student details</h2>
      
    </div>
    <?php
    $host = "127.0.0.1:3307" ;
    $user= "root" ;
    $password = "";
    $db = "project32";
    $data=mysqli_connect($host,$user,$password,$db);
    $sql="select * from user ";
    $data_name=$_POST['name'];

		$result=mysqli_query($data,$sql);
    ?>
    <div class="content">
      <section id="admission">
        <h3>Admission</h3>
      </section>
    <div class="table">
      <table border="1px">
        <tr>
            <th style="padding:20px font-size:15px;" >ID</th>
            <th style="padding:20px font-size:15px;" >NAME</th>
            <th style="padding:20px font-size:15px;" >GENDER</th></th>
            <th style="padding:20px font-size:15px;" >ROLL_NO</th>
            <th style="padding:20px font-size:15px;" >FATHER'S NAME</th>
            <th style="padding:20px font-size:15px;" >NATIVE STATE</th>
            <th style="padding:20px font-size:15px;" >BLOOD GROUP</th>
            <th style="padding:20px font-size:15px;" >ADDRESS</th>
            <th style="padding:20px font-size:15px;">EMAIL</th>         
            <th style="padding:20px font-size:15px;" >PHONE</th>
            <th style="padding:20px font-size:15px;" >DOB</th>
            <th style="padding:20px font-size:15px;" >BRANCH</th>
            <th style="padding:20px font-size:15px;" >CURRENT CGPA</th>

        </tr>
        
        <tr>
            <td style="padding: 20px"><?php echo "$data_name";?></td>
            <td style="padding: 20px"><?php echo "{$info['name']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['gender']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['roll_no']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['fathers_name']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['native_state']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['blood_group']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['address']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['email']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['phone']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['dob']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['branch']}"?></td>
            <td style="padding: 20px"><?php echo "{$info['current_cgpa']}"?></td>

        </tr>
        
      </table>
    </div>
  

  </body>
</html>
<!DOCTYPE html>
