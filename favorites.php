<?php
include 'phpFunc/dbConnect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Abyss | Favorites</title>
    <link rel="stylesheet" href="Assets/css/root.css" />
    <link rel="stylesheet" href="Assets/css/favorites.css" />
    <link rel="stylesheet" href="Assets/css/modal.css" />
    <link rel="shortcut icon" href="Assets/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
</head>

<body class="body-root">
    <div id="root">
        <div class="header-container">
            <div class="header">
                <button class="deck-btn" onclick="sidebarNav()">
                    <span class="material-icons"> grid_view </span>
                </button>

                <a href="home.php" class="logo">
                    <div>
                        <img src="Assets/logoWord.png" alt="" style="height: 24px; ">
                    </div>
                </a>

                <div class="nav-wrapper">
                    <div class="search-sec">
                        <div>
                            <input type="text" name="" id="" placeholder="Search & Discover" />
                            <span class="material-icons"> search </span>
                        </div>
                    </div>

                    <div class="navlinks">
                        <a href="chat.php" class="join-link">
                            <span class="material-icons">
                                textsms
                            </span>
                        </a>
                        <a href="#" class="login-link">
                            <span class="material-icons">
                                notifications
                            </span>
                        </a>
                    </div>

                    <div class="avatar-sec">
                        <img src="Assets/img/icons/user-rectangle-solid-24 (2).png" alt="" srcset="">
                        <div class="account-links">
                            <ul class="link-container">
                                <?php
                                session_start();
                                $id = (int) $_SESSION['id'];

                                ($query = mysqli_query(
                                    $conn,
                                    "SELECT * FROM abyss_User WHERE id = '$id' "
                                )) or die(mysqli_error());
                                $fetch = mysqli_fetch_array($query);
                                echo "
                  <h1>" .
                                    $fetch['username'] .
                                    "</h1>
                  ";
                                ?>
                                <!-- <h1><?//php $fetch['username'] ?></h1> -->
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="favorites.php">Favourites</a></li>
                                <li><a href="profile-post.php">Posts</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="phpFunc/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="submit-btn">
                        <p>Submit</p>
                        <div class="submit-container">
                            <div class="submit-links">
                                <button class="btn-abyssals" onclick="abyssalModal()">Abyssals</button>
                                <button class="btn-status-header" onclick="statusModal()">Status Update</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <main class="container">
            <!-- sidebar navigation -->
            <div class="sidebar-container">
                <div class="sidebar">
                    <ul>
                        <li class="list active">
                            <a href="home.php">
                                <span class="material-icons">home</span>
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="topic.php">
                                <span class="material-icons">category</span>
                                <span class="title">Topics</span>
                            </a>
                        </li>
                        <li class="list">
                            <a href="popular.php">
                                <span class="material-icons">whatshot</span>
                                <span class="title">Popular</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- main content -->
            <div class="main-content">
                <div class="loadCoverImage">
                    <div class="heading-container"
                        style="background-image: linear-gradient(rgba(248, 122, 221, 0.151), rgba(18, 12, 27, 1)),url(Assets/img/coverProfile/<?php echo $fetch[
                            'coverProfile'
                        ]; ?>)">

                        <div class="profile-name">
                            <div class="user-icon">
                                <div class="user-container">
                                    <img src="./Assets/img/profile/<?php echo $fetch[
                                        'profileImage'
                                    ]; ?>" alt="">
                                </div>
                                <div class="upload-profile" onclick="modalProfile()">
                                    <i class="bx bx-refresh"></i>
                                    <span>change</span>
                                </div>
                            </div>

                            <div class="users-info">
                                <h1 id="user-name">
                                    <?php echo $fetch['username']; ?>
                                </h1>
                                <h1 id="user-status">0 Watchers | 1 Page view | 0 Abys </h1>
                            </div>
                        </div>

                        <div class="profile-btn" onclick="modalCoverImage()">
                            <a href="#" class="btn">
                                <i class="bx bx-image-add"></i>
                                <h1 id="cover-text">ADD COVER IMAGE</h1>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="navigation">
                    <div class="nav-list">
                        <ul>
                            <li><a href="profile.php">Home</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="favorites.php">Favourites</a></li>
                            <li><a href="profile-post.php">Posts</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                </div>

                <div class="favorites-container">
                    <div class="favorites-content">
                        <div class="favorites-box">
                            <h1>Collect Your Favorites</h1>
                            <p>Simply star your favourite deviations as you browse, to show other deviants what you
                                love.</p>
                            <a href="#">Browse</a>
                        </div>
                    </div>
                </div>



                <!-- footer section -->
                <footer class="footer">
                    <div class="footer-container">
                        <div class="row">
                            <div id="logo-footer" class="footer-col">
                                <ul>
                                    <li><a href="#"> <img src="Assets/logoWord.png" alt="" style="height: 30px; "></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <ul>
                                    <li><a href="#">ABOUT</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                    <li><a href="#">MEMBERSHIP</a></li>
                                </ul>
                            </div>
                            <div class="footer-col">
                                <ul>
                                    <li><a href="#">DEVELOPERS</a></li>
                                    <li><a href="#">ADVERTISE</a></li>
                                    <li><a href="#">TERMS OF SERVICE</a></li>
                                    <li><a href="#">PRIVACY POLICY</a></li>
                                </ul>
                            </div>

                            <div id="social" class="footer-col">
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

        </main>

        <!-- modal notif -->
        <div class="modal-post">
            <form method="post" enctype="multipart/form-data" id="uploadStatus">
                <div class="modal-post-wrapper">
                    <div class="modal-post-header">
                        <div class="left-section">
                            <div class="title">
                                <h1>Update Status</h1>
                                <div>
                                    <p>Who can see it? </p>

                                    <select id="privacy" name="privacy">
                                        <option value="everyone">Everyone</option>
                                        <option value="friends">Friends</option>
                                        <option value="only_me">Only me</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="post-close-btn">
                                <div><i class='bx bx-x closeBtn' onclick="statusModalClose()"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-post-content">
                        <div class="title-content">
                            <div class="cover-image">
                                <img class="post-art" src="Assets/img/sisu_bg-min.png">
                            </div>
                            <div class="post-title">
                                <textarea type="text" name="post-title" placeholder="Add your title here"></textarea>
                            </div>
                            <div class="add-img-btn">
                                <div onclick="postBtnActive()">
                                    <span><i class='bx bx-image-add'></i>Add Cover Image</span>
                                </div>
                                <input id="add-post-btn" name="post_art_image" type="file" onclick="getPostImage()"
                                    hidden>
                            </div>
                        </div>
                        <div class="post-description">
                            <div class="desc-container">
                                <textarea name="post-desc" id="post-desc" cols="49" rows="10"
                                    placeholder="Start typing your main text here"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-post-footer">
                        <div class="submit-btn">
                            <button name="postubmit" id="submit_post" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-abyssals">
            <form method="post" enctype="multipart/form-data" id="uploadImg">
                <div class="modal-abyssals-wrapper">
                    <div class="modal-abyssals-header">
                        <div class="left-section">
                            <div class="title">
                                <h1>Submit Abyssal</h1>
                                <div>
                                    <p>Who can see it? </p>
                                    <select id="privacy" name="privacy">
                                        <option value="everyone">Everyone</option>
                                        <option value="friends">Friends</option>
                                        <option value="only_me">Only me</option>
                                    </select>
                                </div>
                                <div>
                                    <p>Category</p>
                                    <select id="category" name="category">
                                        <option value="3D">3D</option>
                                        <option value="Adoptables">Adoptables</option>
                                        <option value="Anime and Manga">Anime and Manga</option>
                                        <option value="Anthro">Anthro</option>
                                        <option value="Comics">Comics</option>
                                        <option value="Digital Art">Digital Art</option>
                                        <option value="Drawings and Paintings">Drawings and Paintings</option>
                                        <option value="Fan Art">Fan Art</option>
                                        <option value="Game Art">Game Art</option>
                                        <option value="Science Fiction">Science Fiction</option>
                                        <option value="Sculpture">Sculpture</option>
                                        <option value="Traditional Arts">Traditional Arts</option>
                                        <option value="Tutorials">Tutorials</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="right-section">
                            <div class="abyssals-close-btn">
                                <div><i class='bx bx-x closeBtn' onclick="abyssalModalClose()"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-abyssals-content">
                        <div class="title-content">
                            <div class="cover-image">
                                <img class="abyssal-art" src="Assets/img/sisu_bg-min.png">
                            </div>
                            <div class="abyssals-title">
                                <textarea type="text" name="abyssals-title"
                                    placeholder="Add your title here"></textarea>
                            </div>
                            <div class="add-img-btn">
                                <div onclick="abyssalBtnActive()">
                                    <span><i class='bx bx-image-add'></i>Add Abyssal</span>
                                </div>
                                <input id="add-abyysals-btn" name="abyssal_art_image" type="file"
                                    onclick="getAbyssalImage()" hidden>
                            </div>
                        </div>
                        <div class="abyssals-description">
                            <div class="desc-container">
                                <textarea name="abyssals-desc" id="abyssals-desc" cols="49" rows="10"
                                    placeholder="Start typing your main text here"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-abyssals-footer">
                        <div class="submit-btn">
                            <button name="AbyssalSubmit" id="submit_Abyssals" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-upload-profile">
            <form method="post" enctype="multipart/form-data" id="uploadAvatar">
                <div class="modal-upload-wrapper">
                    <div class="modal-header-profile">
                        <div class="title-header">
                            <h1>Upload Avatar</h1>
                        </div>
                        <div class="close-profile-btn" onclick="closeModalProfile()">
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="modal-image-section">
                        <img class="avatar-profile" src="" alt="" srcset="">
                        <div class="uploadbtn-container">
                            <div class="uploadBtn" onclick="profileAvatar()">Choose a file</div>
                            <input id="profileImg" name="profileImg" type="file" onclick="getImage()" hidden>
                        </div>
                    </div>
                    <div class="modal-footer-btn">
                        <div class="cancel-btn" onclick="closeModalProfile()">Cancel</div>
                        <button id="confirmEnable" name="confirmEnable" type="submit"
                            class="confirm-btn">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-coverProfile-profile">
            <form method="post" enctype="multipart/form-data" id="coverProfileAvatar">
                <div class="modal-coverProfile-wrapper">
                    <div class="modal-header-profile">
                        <div class="title-header">
                            <h1>Upload Cover Photo</h1>
                        </div>
                        <div class="close-profile-btn" onclick="closeModalCoverProfile()">
                            <i class='bx bx-x'></i>
                        </div>
                    </div>
                    <div class="modal-image-section">
                        <img class="avatar-coverProfile" src="" alt="" srcset="">
                        <div class="coverProfilebtn-container">
                            <div class="coverProfileBtn" onclick="coverProfileAvatar()">Choose a file</div>
                            <input id="coverProfileImg" name="coverProfileImg" type="file" onclick="getCoverImage()"
                                hidden>
                        </div>
                    </div>
                    <div class="modal-footer-btn">
                        <div class="cancel-btn" onclick="closeModalCoverProfile()">Cancel</div>
                        <button id="confirmEnable" name="confirmEnable" type="submit"
                            class="confirm-btn">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="Assets/js/script.js"></script>
    <script>
        document.getElementById("confirmEnable").disabled = true;
    </script>
</body>

</html>