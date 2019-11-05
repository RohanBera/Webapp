<?php
    include_once("conn.php");

    // inserting values
    // not doing validation as its done in client side

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $tnail = mysqli_real_escape_string($conn, $_POST['pic']);
    $video = mysqli_real_escape_string($conn, $_POST['vid']);
    $ratin = mysqli_real_escape_string($conn, $_POST['rating']);
    
    $query = 'INSERT INTO videos (TITLE, GENRE, THUMBNAIL, PATH, RATING) VALUES ("'.$title.'", "'.$genre.'", "'.$tnail.'", "'.$video.'", "'.$ratin.'")';

    // echo ("Inserted succesfully !");
    // sleep(3);
    // header("location: series.php");

    if (!mysqli_query($conn, $query))
    {
        echo ("Could not insert.");
    }
    else
    {
        // echo ("inserted succesfully!.");
        // sleep(3);
        // ^ they dont work
        header("location: series.php");
    }


    mysqli_close($conn);
?>