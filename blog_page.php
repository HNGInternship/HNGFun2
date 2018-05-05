<?php
  include('header.php');
  $titles = ["Hotels.ng Internship 4.0", "Designing a simple profile", "Git: Getting started", "Hotels.ng Internship 4.0", "Designing a simple profile", "Git: Getting started", "Icons, Font and more...", "HTML, CSS and Javascript", "Git: Getting started", "Full Stack Development", "Accolades", "Open source career"];
?>

<style type="text/css">

  h2 {
    font-family: 'work sans';
    color: white;
    font-size: 4rem;
    margin: auto;
  }


  header {
    background-image: url('img/blog-head.jpeg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 530px;
  }

  header div {
    display: flex;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
  }

  .post-container {
    display: grid;
    grid-template-columns: 32% 32% 32%;
    grid-gap: 2%;
  }

  .post-container .card-title {
    font-size: 20px;
    line-height: 24px;
    font-weight: 600;
    color: #2196F3;
  }

  .post-container .card-subtitle {
    font-size: 16px;
    line-height: 19px;
    font-weight: normal;
  }

  .post-container .card-text {
    font-size: 18px;
    line-height: 25px;
    font-weight: normal;
  }

  .post-container .author {
    font-size: 16px;
    line-height: 19px;
  }

  .post-container .time {
    font-size: 14px;
    line-height: 17px;
  }

</style>
<header>
  <div>
    <h2>Blog</h2>
  </div>
</header>
<main class="container">
  <section class="d-flex justify-content-between pt-5">
      <spam class="col-sm-8 d-flex justify-content-between">
        Filter Posts
        <span><input type="checkbox" name=""> All Posts</span>
        <span><input type="checkbox" name=""> Featured</span>
        <span><input type="checkbox" name=""> Polls &amp; Questions</span>
        <span><input type="checkbox" name=""> Articles</span>
      </spam>
      <spam class="col-sm-2">
        Search
      </spam>
  </section>
  <section class="post-container mt-5">
    <?php 
      $count = 3;
      $dates = ['April 22nd 2018', 'April 16th 2018', 'April 8th 2018'];
      foreach ($titles as $title) {
      if($count > 2) $count = 0;
    ?>
      <section class="card mb-5">
        <img class="card-img-top mb-5" src="img/post1.jpeg" width="385" height="200" alt="Image for Post">
        <div class="card-body mb-5">
          <h6 class="card-subtitle mb-4"><?= $dates[$count] ?></h6>
          <h5 class="card-title mb-4"><?= $title ?></h5>
          <p class="card-text">Hotels.ng provides lorem ipsul ipsum lorem ipsum is a dummy text of the printing and typesetting ipsic fwerch psuim dasi inami thiaf... </p>
        </div>
        <div class="card-footer bg-white border-top-0 d-flex">
          <img src="img/profile.png" width="50" height="50" class="rounded-circle">
          <span class="ml-3 d-flex flex-column justify-content-center">
            <p class="mt-0 mb-1 author">Ogbeniore</p>
            <p class="mb-0 mt-1 time">4 min read</p>
          </span>
        </div>
      </section>
    <?php
    $count++;
    }
    ?>
    
  </section>
  
</main>
<?php
  include('footer.php');
?>
