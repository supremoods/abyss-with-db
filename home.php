<?php
  include('phpFunc/session.php');
  homeSession();
  include('phpFunc/dbConnect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abyss | Home</title>
  <link rel="stylesheet" href="Assets/css/root.css" />
  <link rel="stylesheet" href="Assets/css/home.css" />
  <link rel="stylesheet" href="Assets/css/modal.css" />
  <link rel="stylesheet" href="Assets/css/load.css" />
  <link rel="shortcut icon" href="Assets/logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>

<body class="body-root">
  <div id="root">
  <?php include_once('headerContainer.php');?>
    

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

        <div class="gallery-section">

          <!-- banner -->
          <div class="banner-container">
            <div class="banner-wrapper">
              <header class="banner">
                <div>
                  <h1>Home</h1>
                </div>
                <div class="banner-links">
                    <div class="abyssals-link">
                        <a href="home.php">Abyssals</a>
                    </div>

                    <div class="posts-link">
                        <a href="post.php" class="links">Posts</a>
                    </div>
                </div>
              </header>
            </div>
          </div>
          <!-- <div class="topic-header">
  
          </div> -->
          
          <div class="space">

          </div>

          <!-- topics -->
          <!-- carousel -->
          <section class="teams" id="teams">
            <div class="max-width">
                <h2 class="title">Explore <span><a href="http://">Topics</a></span></h2>
                <div class="carousel owl-carousel">
                    <div class="card"  data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/digitalArt.jpg" alt="">
                            <div class="text">Digital Art</div>
                        </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/comics.jpg" alt="">
                            <div class="text">Comics</div>
                        </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/fantasy.jpg" alt="">
                            <div class="text">Fantasy</div>
                        </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/gameArt.jpg" alt="">
                            <div class="text">Game Art</div>
                        </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/scienceFiction.jpg" alt="">
                            <div class="text">Science Fiction</div>
                        </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                      <div class="box">
                          <img src="Assets/img/poetry.jpg" alt="">
                          <div class="text">Poetry</div>
                      </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                      <div class="box">
                          <img src="Assets/img/wallpaper.jpg" alt="">
                          <div class="text">Wallpaper</div>
                      </div>
                    </div>
                    <div class="card" data-id="Digital Art" onclick="topicGallery(this.dataset.id)">
                      <div class="box">
                          <img src="Assets/img/Traditional art.jpg" alt="">
                          <div class="text">Traditional Art</div>
                      </div>
                    </div>           
                </div>
            </div>
          </section>
         
          <!-- gallery -->
          <div class="gallery">
            <ul class="gallery-wrapper">
              <?php
                include('phpFunc/loadAbyssals.php');
              ?>
            </ul>
          </div>
  
        </div>
      </div>  

      <!-- footer section -->
      <footer class="footer">
        <div class="footer-container">
          <div class="row">
            <div id="logo-footer" class="footer-col">
              <ul>
                <li><a href="home.php"> <img src="Assets/logoWord.png" alt="" style="height: 30px; "></a></li>
              </ul>
            </div>
           
            <div class="footer-col">
              <ul>
                <li><a href="developer.php">DEVELOPERS</a></li>
                <li><a href="TOS.php">TERMS OF SERVICE</a></li>
                <li><a href="Privacy.php">PRIVACY POLICY</a></li>
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
                  <img class="post-art" src="Assets/img/sisu_bg-min.png" >
                </div>
                <div class="post-title">
                  <textarea type="text" name="post-title" placeholder="Add your title here"></textarea>
                </div>
                <div class="add-img-btn">
                  <div onclick="postBtnActive()">
                    <span><i class='bx bx-image-add'></i>Add Cover Image</span>
                  </div>
                  <input id="add-post-btn" name="post_art_image" type="file" onclick="getPostImage()" hidden>
                </div>
              </div>
              <div class="post-description">
                <div class="desc-container">
                  <textarea name="post-desc" id="post-desc" cols="49" rows="10" placeholder="Start typing your main text here"></textarea>
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
                <div class = "headerInput">
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
                  <div class = "featContainer">             
                    <input type="checkbox" name="featArt" value="feat">
                    <label for="featArt">Featured</label>
                  </div>
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
                  <img class="abyssal-art" src="Assets/img/sisu_bg-min.png" >
                </div>
                <div class="abyssals-title">
                  <textarea type="text" name="abyssals-title" placeholder="Add your title here"></textarea>
                </div>
                <div class="add-img-btn">
                  <div onclick="abyssalBtnActive()">
                    <span><i class='bx bx-image-add'></i>Add Abyssal</span>
                  </div>
                  <input id="add-abyysals-btn" name="abyssal_art_image" type="file" onclick="getAbyssalImage()" hidden>
                </div>
              </div>
              <div class="abyssals-description">
                <div class="desc-container">
                  <textarea name="abyssals-desc" id="abyssals-desc" cols="49" rows="10" placeholder="Start typing your main text here"></textarea>
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
  </div>
  <div id="loader">
        <svg width="140" height="140" viewBox="0 0 280 280" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                <line x1="59.9833" y1="140.333" x2="219.978" y2="139" stroke="#7579ff" stroke-width="4"/>
                <circle cx="60" cy="140" r="5" fill="#7579ff"/>
                <circle cx="220" cy="139" r="5" fill="#7579ff"/>
                </g>
                <path class="circle" d="M109.957 122.655L140 105.309L170.043 122.655V157.345L140 174.691L109.957 157.345V122.655Z" stroke="#7579ff" stroke-width="4"/>
                <circle class="circle" cx="140" cy="140" r="13" stroke="#f5d77b" stroke-width="4"/>
                <circle class="circle" cx="110" cy="192" r="13" stroke="#f7a78f" stroke-width="4"/>
                <circle class="circle circle_s" cx="85" cy="232" r="8" stroke="#7579ff" stroke-width="4"/>
                <circle class="circle" cx="170" cy="88" r="13" stroke="#7579ff" stroke-width="4"/>
                <circle class="circle circle_s" cx="110" cy="192" r="5" fill="#f7a78f"/>
                <circle class="circle circle_s" cx="185" cy="61" r="5" fill="#f5d77b"/>
        </svg>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="Assets/js/script.js"></script>
  <script src="Assets/js/search.js"></script>
  <script src="Assets/js/search.js"></script>
</body>

</html>