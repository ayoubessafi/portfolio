<?php require APPROOT . '/views/inc/header.php'; ?>

  
<main id="work">
        
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary ">
        <i class=""></i> Add Post
      </a>
      <a href="http://localhost/portfolio" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="container">
    <div class="text-center">
                    <h1>PROJECTS</h1>
                    <img src="img/lines.svg" class="img-lines" alt="lines">
    </div>
    <div class="projects">
    <?php foreach($data['posts'] as $post) : ?>
      <div class="item">
        
        <img src="<?php echo $post->body; ?>" alt="Project">
        <a href="<?php echo $post->title; ?>" class="btn-dark text-center"><i class="fab fa-github"></i>Github</a>
        <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">More</a>
      </div>
      <?php endforeach; ?>
  </div>
</main>
  
<?php require APPROOT . '/views/inc/footer.php'; ?>