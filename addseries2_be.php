<?php
    include_once("conn.php");

    // inserting values
    // not doing validation as its done in client side

    $seris = mysqli_real_escape_string($conn, $_POST['series']);
    $tnail = mysqli_real_escape_string($conn, $_POST['pic']);
    $video = mysqli_real_escape_string($conn, $_POST['vid']);
    $epnum = mysqli_real_escape_string($conn, $_POST['epnumber']);

    $tnail = './imgs/thumbnails/'.$tnail;
    $video = './imgs/series/'.$seris.'/'.$video;

    $query = 'INSERT INTO episodes (SERIES, EPISODES, THUMBNAIL, EPNUMBER) 
        VALUES ("'.$seris.'", "'.$video.'", "'.$tnail.'", "'.$epnum.'")';

    if (!mysqli_query($conn, $query))
    {
        echo ("Could not insert.");
        echo $query;
    }
    else
    {
        mysqli_close($conn);

        echo "<script>window.location.href='addedseries.php';</script>";
    }


?>