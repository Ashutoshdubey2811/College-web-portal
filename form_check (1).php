<?php
$host = "127.0.0.1:3307" ;
$user= "root" ;
$password = "";
$db = "project32";
$data=mysqli_connect($host,$user,$password,$db);
if(!$data){
    die("error");
}

if(isset($_POST['apply'])){
    $data_name=$_POST['name'];
    $data_gender=$_POST['gender'];

    $data_password=$_POST['password'];
    $data_usertype=$_POST['usertype'];
    $data_roll_no=$_POST['roll_no'];
    $data_fathers_name=$_POST['fathers_name'];
    $data_native_state=$_POST['native_state'];
    $data_blood_group=$_POST['blood_group'];
    $data_address=$_POST['address'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_dob=$_POST['dob'];
    $data_branch=$_POST['branch'];
    $data_current_cgpa=$_POST['current_cgpa'];
    $sql="INSERT INTO user(name,gender,password,usertype, roll_no,fathers_name,native_state,blood_group,address,email,phone,dob,branch,current_cgpa)
     VALUES('$data_name','$data_gender','$data_password','$data_usertype','$data_roll_no','$data_fathers_name','$data_native_state','$data_blood_group','$data_address','$data_email','$data_phone','$data_dob','$data_branch','$data_current_cgpa')";
    $result = mysqli_query($data,$sql);
    if($result){
        echo "sucess";
    }
    else{
        echo "failed";
    }
}
?> 