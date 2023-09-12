<?php
require ('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Your Grade</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    
    <div id="resultsheet">
        <div class="marksheet">
            <!-- resul -->
            <div class="container">
                    <!-- form -->
                    <div class="result-form">
                        <input type="number" name="mark" id="mark" placeholder="Type Your Number">
                    </div>
                    <div class="result-btn">
                        <input type="submit" value="Check Result" name="check-res" id="check-res">
                    </div>
                    <!-- form end -->
                    <!-- Out Grade -->
                    <div class="grade">
                        <h2 class="congratulations" id="grade"></h2>
                    </div>
            </div>
            <!-- end result -->

            <!-- Comment box -->
            <div class="container">
                <div class="comment-form">
                    <div class="result-form">
                        <textarea name="ckeditor" id="ckeditor" row=5>Write Your Comment........</textarea>
                    </div>
                    <div class="result-btn">
                        <input type="submit" value="Comment" name="userName" id="userName">
                    </div>
                </div>
            </div>
            <!-- end comment box -->

            <!-- show coment -->
            <div class="container">
                <h2 style="color: #fff;">All Comment</h2>
                
                <div id="comment-show" class="comment-show"></div>
                
                <div class="comment-show" id="coment-hight">
                    <?php 
                        $queryShow = "SELECT * FROM `cooment` ORDER BY id DESC";
                        $runTwo = mysqli_query( $db, $queryShow );
                        while ( $comentShow = mysqli_fetch_array( $runTwo ) ) {
                        ?>
                            <li><?= $comentShow['comment']; ?> <span style="font-size: 10px; color:beige;"><?=$comentShow['com_time']; ?></span> </li>
                    <?php } ?>
                </div>
            </div>
            <!--end show coment -->

        </div>
    </div>

<script src="main.js"></script>
<script>
    //CKEDITOR.replace('ckeditor');
</script>
</body>
</html>