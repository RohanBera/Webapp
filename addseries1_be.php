<?php
    include_once("conn.php");

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $tnail = mysqli_real_escape_string($conn, $_POST['pic']);
    $seson = mysqli_real_escape_string($conn, $_POST['seasons']);
    
    $tnail = './imgs/thumbnails/'.$tnail;

    $query = 'INSERT INTO series (TITLE, GENRE, PATH, SEASONS) 
        VALUES ("'.$title.'", "'.$genre.'", "'.$tnail.'", "'.$seson.'")';


    if (!mysqli_query($conn, $query))
    {
        echo ("Could not insert.");
        echo $query;
    }
    else
    {
        mysqli_close($conn);

        // header("location: series.php");                
        echo "<script>window.location.href='addseries2.php';</script>";
    }
?>