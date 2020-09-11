<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php require APPROOT . '/views/inc/header.php'; ?>




<div class="banner-area" id="HOME">
    <div class="banner-table">
        <div class="banner-table-cell">
            <div class="welcome-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <section class="intro animate-scale">
                                
                                <div class="img-area A-top">
                                    <img src="img/ayoub1.jpg" alt="ayoub essafi" width="100%">
                                </div>

                                <h3 class="name">AYOUB ESSAFI</h3>

                                <h1 class="ah-headline">

                                    <span class="ah-words-wrapper">
                                        <b class="special">DÉVELOPPEUR WEB</b><!--edit the designation if you are in different profession-->
                                    </span>
                                </h1>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main" class="site-main">
<div class="container">
        <section id="about" class="site-section section-about text-center">
            
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 mx-auto">
                        <h2>À PROPOS</h2>
                        <img src="img/lines.svg" class="img-lines" alt="lines">
                        <p>salut! Je suis Ayoub, un développeur web, j'apprends en YOUCODE. Je suis actuellement disponible pour un travail indépendant. Si vous avez un projet que vous souhaitez démarrer ou pensez avoir besoin de mon aide pour quelque chose, contactez-nous.</p>
                    </div>
                </div>
            
        </section><!-- /.secton-about -->

        <section id="skills" class="site-section section-skills">
            <div class="container">
                <div class="text-center">
                    <h3>COMPÉTENCES</h3>
                    <img src="img/lines.svg" class="img-lines" alt="lines">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Html/css</h4>
                            <div class="text1">
                           <p> être un programmeur compétent, vous devez d'abord être capable d'apprendre le html et le css, et pour ce faire, vous devez travailler sur de nombreux projets et collecter l'expérience de chaque travail.
                          </p>
                          </div>
                        </div><!-- /.skill -->
                        
                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Javascript</h4>
                            <div class="text1">
                           <p> JavaScript permet un développement sur un grand nombre de plateformes. La richesse des modules existant en fait un outil universel. Le développeur devra donc en avoir une connaissance approfondie pour en tirer toute sa substance.
                          </p>
                          </div>
                        </div><!-- /.skill -->

                    </div>
                    <div class="col-md-4">
                        <div class="skill">
                            <h4>Php</h4>
                            <div class="text1">
                           <p> Les missions du développeur PHP est de créer des sites internet dynamiques avec le langage de programmation PHP. Il peut l’utiliser sans framework, avec framework propriétaire ou avec framework en open source (Symfony, Zend…).
                          </p>
                          </div>

                    </div>
                </div>
            </div>
        </section><!-- /.secton-skills -->

        <section id="service" class="site-section section-services overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>SERVICES</h3>
                        <img src="img/lines.svg" class="img-lines" alt="lines">
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="img/front-end.svg" alt="Front End Developer">
                            <h4>Front-end</h4>
                            <p>En tant que développeur javascript, j'ai de l'expérience dans les techniques HTML5 et CSS3 et SASS, Je vais créer une page Web et concevoir votre application Web en utilisant HTML, CSS, JavaScript, JQuery et Bootstrap.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="img/back-end.svg" alt="Back End Developer">
                            <h4>Back-end</h4>
                            <p>Actuellement, nous utilisons PHP et nous sommes toujours en train d'apprendre d'autres langages de programmation pour nous aider à approfondir notre spécialité.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-sm-4">
                        <div class="service">
                            <img src="img/consultancy.svg" alt="Coding">
                            <h4>desiganer</h4>
                            <p>En ce qui concerne le design, je peux travailler avec tout cela dans un prototype basse fidélité haute fidélité. comprenant balsamiq, photoshop et Adobe XD.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.secton-services -->
        <br><br><br>

        <main id="work">
        <div class="text-center">
                    <h1>PROJETS</h1>
                    <img src="img/lines.svg" class="img-lines" alt="lines">
                </div>
    <div class="projects ">
    <?php foreach($data['posts'] as $post) : ?>
      <div class="item">
        
          <img src="<?php echo $post->body; ?>" alt="Project">
       
        <a href="<?php echo $post->title; ?>" class="btn-dark text-center">
          <i class="fab fa-github "></i> Github
        </a>
      </div>
      <?php endforeach; ?>
      </div>
  </main>


<?php
if(isset($_POST['send'])){
   $email= htmlspecialchars($_POST['email']);
   $content= htmlspecialchars($_POST['message']);
   $fullname = htmlspecialchars($_POST['name']);
   $to       = 'a.ayoubessafi@gmail.com';
   $subject  = $email . ' have sent a message ';
   $message  = "
      <html>
   <body>
   <h1>le nom: $fullname</h1>
   <h1 style='font-family:initial; color:black'>$content</h1>
   </body>
   </html>
   
    " ;
   $headers  = 'From: a.ayoubessafi@gmail.com' . "\r\n" .
               'MIME-Version: 1.0' . "\r\n" .
               'Content-type: text/html; charset=utf-8';
   if(mail($to, $subject, $message, $headers)){
       echo "<script>alert('Email sent')</script>";
       echo "<meta http-equiv='refresh' content='0'>";
        
    }else{
       echo "<script>alert('Email sending failed')</script>";
       
    }
    
}
?>
        
        <section id="contact" class="site-section section-form text-center">
            
                <h3>Contact</h3>
                <img src="img/lines.svg" class="img-lines" alt="lines">
                <form method='POST'>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control mt-x-0" placeholder="Nom" required value="<?php echo isset($_post['name']) ? $name : ''; ?>">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo isset($_post['email']) ? $email : ''; ?>">   
                        </div>
                        <?php echo isset($_post['message']) ? $message : ''; ?>
                        <div class="col-sm-12">
                            <textarea name="message" id="mesaage" class="form-control" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="text">
                    <input class="btn btn-border" type="submit" name="send" value="ENGAGEZ MOI">
                    </div>
                </form>

            </div>
        </section><!-- /.section-form -->

    </main><!-- /#main -->


    <?php require APPROOT . '/views/inc/footer.php'; ?> 
    
    
</body>
</html>

