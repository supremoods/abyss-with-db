<?php
    include('dbConnect.php');


    $id = (int) $_SESSION['id'];
    $query = "SELECT * FROM abyss_post WHERE id = '$id '";

    $cmd = mysqli_query($conn,$query); 
    

    if(mysqli_num_rows($cmd) > 0){
        while($fetch = mysqli_fetch_array($cmd)){
            $userName = $fetch['id'];  
            $query2 = "SELECT * FROM abyss_user WHERE id = '$userName'";
            $cmd2 = mysqli_query($conn,$query2); 
            $fetch2 = mysqli_fetch_array($cmd2);

            echo '
            <div class="post-data">
                <div class="post-header">
                    <div class="profile-img">
                        <img src="./Assets/img/profile/'.$fetch2['profileImage'].' "style="height:40px; width:40px;" >
                    </div>
                    <div class="post-name-time">
                        <div class="post-name">
                            <p>'.$fetch2['username'].'</p>
                        </div>
                        <div class="post-time">
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="post-menu-btn">
                        <span class="material-icons"> more_horiz </span>
                    </div>
                </div>
                
                <div class="post-title">
                    <img src="./Assets/img/post/'.$fetch['cover_image'].'">
                    <div class="title">
                        <h1>'.$fetch['title'].'</h1>
                    </div>
                </div>

                <div class="post-description-cc">
                    <pre>'.$fetch['post_description'].'</pre>
                </div>
                
                <div class="post-btns">
                    <div class="btns-left">
                        <div class="btn-fav">
                            <span class="material-icons">star_outline</span>
                            <p>Add to Favourites</p>
                        </div>
                        <div class="btn-comment">
                            <span class="material-icons">chat_bubble_outline</span>
                            <p>Comment</p>
                        </div>

                    </div>
                
                    <div class="counts-right">
                        <div class="counts">
                            <div class="count-fav">
                                <span class="material-icons">star</span>
                                <p>'.$fetch['count_fav'].'</p>
                            </div>
                            <div class="count-comment">
                                <span class="material-icons">chat_bubble</span>
                                <p>'.$fetch['count_comment'].'</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="comment-section">
                    <div class="comment">
                        <div class="profile-img">
                            <img src="./Assets/img/profile/'.$fetch2['profileImage'].'" style="height:50px; width:50px; margin-right:10px;" alt="">
                        </div>
                        <div class="input-comment">
                            <input class="input-cmnt" type="text" placeholder="Add a new comment">
                        </div>
                    </div>
                </div>    
            </div>               
        ';
        }
    }

?>

