<?php

session_start();


if (isset($_POST['curl'])) {

    $curl1 = $_POST['curl'];
    if (empty($curl1)) {

        header('location:index.php?empty=true');
        exit;
    }

else{

  $db_server = 'localhost';
  $db_user_name = 'user';
  $db_password = '123456';
  $db_name = 'url';
  $_SESSION['count']=0;
  @ $db = mysqli_connect($db_server,$db_user_name,$db_password,$db_name) or die("unable to connect to database");


  $raw_results = mysqli_query($db,"SELECT * FROM t1
            WHERE (`longg` LIKE '%".$curl1."%')") ;


         if(mysqli_num_rows($raw_results) > 0){

           header('location:index2.php?yes=true');
           $query="select * from t1 where longg='$curl1'";
           $result=mysqli_query($db,$query) or die("error");
           $row=mysqli_fetch_array($result);

           if(($row['longg']==$curl1)){

               $_SESSION['user']=$row['suffix'];

                       }

                      exit;
         }


else {

// look for empty suffix

//$sql=mysqli_query($db,"SELECT suffix FROM t1");
$query="SELECT suffix FROM t1";
$result=mysqli_query($db,$query) or die("error");

while($row = $result->fetch_assoc()){

// for($i=0;$i<10;$i++){
// $sq1 = "INSERT INTO t1 (`suffix`,`longg`,`time`)
//        VALUES ('','','')";
//       if ($db->query($sq1) === TRUE){
//
//       }
//       else{echo "Error: " . $sq1 . "<br>" . $db->error;}
//
// }
// fill the database


$T=$row["suffix"];

  $query3="select longg from t1 where suffix='$T'";
  $result3=mysqli_query($db,$query3) or die("error");
  $row2=mysqli_fetch_array($result3);

 if(empty($row2['longg'])){

   $query2="UPDATE t1 SET longg='$curl1' WHERE suffix='$T'";
   if ($db->query(  $query2) === TRUE) {

                  $_SESSION ['user']=$T;
                  header('location:index2.php?yes=true');


                     } else {
                         echo "Error: " . $query2 . "<br>" . $db->error;
                     }

               exit();
             }



} //while

} // until here we insert the new long url


    } //else 15

} // if 6

?>
