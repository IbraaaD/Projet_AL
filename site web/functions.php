<?php

function check_login($conn){ 

    if(isset($_SESSION['id'])){

        $user_id = $_SESSION['id'];
        $query = " select * from Utilisateurs where id='$user_id' limit 1";

        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location:index.php");
    die;
}

function random_num($length)
{
   $text = "";
   if($length < 5)
   {
        $length = 5;
   }

   $len = rand(4,$length);

   for($i=0; $i < $len; $i++){
    $text .= rand(0,9);
   }

   return $text;
}


?>