<?php include 'dbconnection.php';?>

<?php
$fname=$_POST["fname"];
$email=$_POST["email"];
$usernames=$_POST["Uname"];
 $PhoneNumber=$_POST["Pnumber"];
 $PresentAddress=$_POST["PAddress"];
 $PermanentAddress=$_POST["padd"];
  $cnic=$_POST["cnic"];
  $dob=$_POST["dob"];
    if(isset($_POST["ass3"])){
        
        $errors=[];
        if(empty($_POST["fname"])){
            $errors[]="Name cannot not be empty please enter agian.";
        }
        else{
            $fname=$_POST["fname"];
        }
        if(empty($_POST["email"])){
            $errors[]="email cannot not be empty please enter agian.";
        }
        else{
            $email=$_POST["email"];
        }
        if(empty($_POST["Uname"])){
            $errors[]="Username must not be empty please enter again.";
        }
        else{
            $usernames=$_POST["Uname"];
        }
        if(empty($_POST["Pnumber"])){
            $errors[]="Phone number cannot be empty please fill it.";
        }
        else{
            $PhoneNumber=$_POST["Pnumber"];
        }

        if(empty($_POST["PAddress"])){
            $errors[]="Present Address cannot be empty please fill it.";
        }
        else{
            $PresentAddress=$_POST["PAddress"];
        }

        if(empty($_POST["padd"])){
            $errors[]="Permanent Address cannot be empty please fill it.";
        }
        else{
            $PermanentAddress=$_POST["padd"];
        }
        if(empty($_POST["cnic"])){
            $errors[]="Cnic cannot be empty please fill it.";
        }
        else{
            $cnic=$_POST["cnic"];
        }

        if(empty($_POST["dob"])){
            $errors[]="dob cannot be empty please fill it.";
        }
        else{
            $dob=$_POST["dob"];
        }
        if(empty($errors)){
           
        }
    
    else{
        foreach($errors as $error){
        echo "
        	<div class='alert alert-danger' role='alert'>{$error}</div>
        ";
        }
    }
}
  $sql = "INSERT INTO user(Fullname, email, username,phoneNumber,Paddress,Permanetadd,cnic,dob) VALUES('$fname',  '$email', '$usernames','$PhoneNumber','$PresentAddress','$PermanentAddress','$cnic','$dob')";
    mysqli_query($conn, $sql);
    echo "data inserted successfully";
?>

