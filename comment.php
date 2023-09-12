<?php
   require ('db.php');
   $comment = $_POST['ckeditor'];
   $coment_ip = $_SERVER['REMOTE_ADDR'];

   $query = "INSERT INTO `cooment`( `comment`, `com_ip`) VALUES ('$comment','$coment_ip')";
   mysqli_query($db, $query);
    
    $comeent_time = time();
    
        
    echo "<li> $comment <span style='font-size: 10px; color:beige;'> $comeent_time </span> </li>";
   