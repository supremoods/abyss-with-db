<?php
  include('phpFunc/dbConnect.php');
  include('phpFunc/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Abyss | Topics</title>
  <link rel="stylesheet" href="Assets/css/root.css" />
  <link rel="stylesheet" href="Assets/css/topic.css" />
  <link rel="stylesheet" href="Assets/css/modal.css" />
  <link rel="shortcut icon" href="Assets/logo.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
</head>

<body class="body-root">
  <div id="root">
    <?php include_once('headerContainer.php');?>
    

    <main class="container">
      <!-- sidebar navigation -->
      <div class="sidebar-container">
        <div class="sidebar">
          <ul>
            <li class="list ">
              <a href="home.php">
                <span class="material-icons">home</span>
                <span class="title">Home</span>
              </a>
            </li>
            <li class="list active">
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
                  <h1>Topics</h1>
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
                            <img src="assets/img/topics/digital art.jpg" alt="" srcset="">
                            <div class="text">Digital Art</div>
                        </div>
                    </div>
                    <div class="card" data-id="Comics" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="assets/img/topics/comics.jpg" alt="" srcset="">
                            <div class="text">Comics</div>
                        </div>
                    </div>
                    <div class="card" data-id="3D" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="Assets/img/fantasy.jpg" alt="">
                            <div class="text">3D</div>
                        </div>
                    </div>
                    <div class="card" data-id="Game Art" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="assets/img/topics/fantasy art.jpg" alt="" srcset="">
                            <div class="text">Game Art</div>
                        </div>
                    </div>
                    <div class="card" data-id="Science Fiction" onclick="topicGallery(this.dataset.id)">
                        <div class="box">
                            <img src="assets/img/topics/science fiction.jpg" alt="" srcset="">
                            <div class="text">Science Fiction</div>
                        </div>
                    </div>
                    <div class="card" data-id="Sculpture" onclick="topicGallery(this.dataset.id)">
                      <div class="box">
                      <img src="assets/img/topics/sculpture.jpg" alt="" srcset="">
                          <div class="text">Sculpture</div>
                      </div>
                    </div>
                    <div class="card" data-id="Anthro" onclick="topicGallery(this.dataset.id)">
                      <div class="box">
                          <img src="Assets/img/wallpaper.jpg" alt="">
                          <div class="text">Anthro</div>
                      </div>
                    </div>
                    <div class="card" data-id="Traditional Arts" onclick="topicGallery(this.dataset.id)">
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
              <div class="text">
                  <h1>All Topics</h1>
              </div>
            <ul class="gallery-wrapper">
              <li data-id="3D" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/3d.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>3d</h1>
                  </div>
                </div>
              </li>
              <li data-id="Adoptables" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/adoptables.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Adoptables</h1>
                  </div>
                </div>
              </li>
              <li data-id="Anime and Manga" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/anime.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Anime and Manga</h1>
                  </div>
                </div>
              </li>
              <li data-id="Anthro" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/anthro.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Anthro</h1>
                  </div>
                </div>
              </li>
              <li data-id="Comics" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/comics.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Comics</h1>
                  </div>
                </div>
              </li>
              <li data-id="Digital Art" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/digital art.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Digital Art</h1>
                  </div>
                </div>
              </li>
              <li data-id="Drawings and Paintings" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/drawing and paintings.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Drawing and Paintings</h1>
                  </div>
                </div>
              </li>
              <li data-id="Fan Art" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/fan art.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Fan Art</h1>
                  </div>
                </div>
              </li>
              <li data-id="Game Art" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/fantasy art.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Game Art</h1>
                  </div>
                </div>
              </li>
              <li data-id="Science Fiction" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/science fiction.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Science and Fiction</h1>
                  </div>
                </div>
              </li>
              <li data-id="Sculpture" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/sculpture.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Sculpture</h1>
                  </div>
                </div>
              </li>
              <li data-id="Traditional Arts" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/traditional art.jpg" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Traditional Art</h1>
                  </div>
                </div>
              </li>
              <li data-id="tutorial" class="topic-gallery-item" onclick="topicGallery(this.dataset.id)">
                <img src="assets/img/topics/tutorials.png" alt="" srcset="">
                <div class="text">
                  <div>
                    <h1>Tutorials</h1>
                  </div>
                </div>
              </li>  
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
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="Assets/js/script.js"></script>
</body>

</html>