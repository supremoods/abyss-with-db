<?php
    include('dbConnect.php');
    session_start(); 
    $id = (int) $_SESSION['id'];

    $query = "SELECT * FROM abyss_user WHERE id = $id";

    $cmd = mysqli_query($conn,$query); 
    $fetch = mysqli_fetch_array($cmd);

    
    echo '
        <p>'.$fetch['checkArtist'].' // '.$fetch['Level'].' // '.$fetch['Specialty'].'</p>

        <div class="about-info">
            <div>
                <i class="bx bxs-cake"></i>
                <p>'.$fetch['birthDay'].'</p>
            </div>
            <div>
                <i class="bx bx-map"></i>
                <p>'.$fetch['Location'].'</p>
            </div>
        </div>

        <p>'.$fetch['Pronouns'].' </p>
    ';


?>



