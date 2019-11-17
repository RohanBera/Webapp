<?php
    include_once("conn.php");

    // inserting values
    // not doing validation as its done in client side

    // $title = $_POST['title'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $tnail = mysqli_real_escape_string($conn, $_POST['pic']);
    $video = mysqli_real_escape_string($conn, $_POST['vid']);
    $ratin = mysqli_real_escape_string($conn, $_POST['rating']);
    
    // $tnail = $_FILES['pic']['name'];
    // $itarg = 'imgs/thumbnails/'.basename($tnail);

    // move videos to var/www/html/imgs/vids
    // move thumbnails to var/www/html/imgs/thumbnails

    $tnail = './imgs/thumbnails/'.$tnail;
    $video = './imgs/vids/'.$video;

    $query = 'INSERT INTO videos (TITLE, GENRE, THUMBNAIL, PATH, RATING) 
        VALUES ("'.$title.'", "'.$genre.'", "'.$tnail.'", "'.$video.'", "'.$ratin.'")';


    if (!mysqli_query($conn, $query))
    {
        echo ("Could not insert.");
        echo $query;
    }
    else
    {
        // if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
        // {
        //     echo "Image uploaded successfully";
        // }
        // else
        // {
        //     echo "Failed to upload image";
        // }
        mysqli_close($conn);

        // header("location: series.php");                
        echo "<script>window.location.href='addedmovie.php';</script>";

    }


?>