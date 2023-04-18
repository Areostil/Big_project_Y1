<?php include_once "bdd_log.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portfolio</title>
    <meta name="description" content="Big Project Guardia School 2023">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/Features-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-1.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Slick-Slider-Carousel.css">
</head>

<body style="background: rgb(17,18,20);">
    <nav class="navbar navbar-light navbar-expand-md py-3" style="background: #96a2b4;width: 100%;height: 100%;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="fs-4" id="Portfolio_title"><strong>Portfolio</strong></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" id="acceuil-button" href="#Alexandre" target="_top" data-bs-target="#Alexandre"><strong>Accueil</strong></a></li>
                    <li class="nav-item"><a class="nav-link" id="projets-button" href="#h1_Projets"><strong>Projets</strong></a></li>
                    <li class="nav-item"><a class="nav-link" id="CV-button" href="#h1_CV"><strong>CV</strong></a></li>
                    <li class="nav-item"><a class="nav-link" id="Jeux-button" href="#h1_jeux"><strong>Jeux</strong></a></li>
                    <li class="nav-item"><a class="nav-link" id="contact-button" href="#Contact"><strong>Contact</strong></a></li>
                </ul><a class="btn btn-primary ms-md-2" role="button" id="connexion-button" href="login.php" style="background: rgb(170,49,27);" target="_blank"><strong><span style="background-color: rgb(173, 48, 28);">Se connecter</span></strong></a>
            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <h1 class="text-center float-start d-xxl-flex" id="h1_Alexandre" style="margin-bottom: 15px;padding-left: 0px;width: 100%;height: 100%;margin-right: 0px;margin-left: 0px;"><span style="color: rgb(255, 255, 255); background-color: rgb(17, 19, 20);">Alexandre Destres</span></h1>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col"><img class="rounded img-fluid w-100 h-100 fit-cover" id="Image-pres" style="min-height: 300px;width: 100%;height: 100%;" src="assets/img/Photo%20Guardia.webp" width="100%" height="100%" loading="lazy" alt="Photo Guardia"></div>
            <div class="col d-flex flex-column justify-content-center p-4">
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                    <div style="width: 100%;height: 100%;">
                        <p class="fs-5" id="texte-pres-1" style="margin-bottom: 30px;"><span style="color: rgb(255, 255, 255); background-color: rgba(19, 19, 19, 0.79);">Je suis Alexandre Destres, un étudiant de 18 ans passionné par la cybersécurité. Actuellement en première année à la&nbsp;</span><a href="https://guardia.school/" target="_blank"><span style="color: rgb(181, 181, 181); background-color: rgba(19, 19, 19, 0.79);">Guardia Cybersecurity School</span></a><span style="color: rgb(255, 255, 255); background-color: rgba(19, 19, 19, 0.79);">, j'ai développé de solide compétences et assimilés des principes fondamentaux de la sécurité informatique que je mets en pratique durant mes projets.</span></p>
                        <p class="fs-5" id="texte-pres-2"><span style="color: rgb(255, 255, 255); background-color: rgb(17, 18, 20);">Mon objectif professionnel est de travailler dans l'armée, où je pourrais appliquer mes compétences en cybersécurité pour protéger les intérêts de notre pays. Je suis actuellement à la recherche d'un stage de 2 mois minimum dans ce domaine pour acquérir une expérience pratique et améliorer mes compétences professionnelles.</span></p>
                    </div>
                </div>
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                    <div></div>
                </div>
                <div class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start">
                    <div></div>
                </div>
            </div>
        </div>
        <h1 class="text-center" id="h1_Projets" style="width: 100%;height: 100%;margin-bottom: 15px;margin-left: 0px;margin-top: 60px;"><span style="color: rgb(255, 255, 255);">Projets</span></h1>
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 600px;">
            <div class="carousel-inner h-100">
                <?php
                $query = $bdd->prepare('SELECT * FROM projets ORDER BY id DESC');
                $query->execute();
                if($query){
                    while ($result = $query->fetch()){
                ?>
                <div class="carousel-item active h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="<?php echo $result['img']?>" alt="Slide Image" style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100" id="Projet-Carroussel">
                        <div class="col-md-6 col-xl-4 offset-md-2" style="margin-bottom: 274px;">
                            <div style="max-width: 350px;margin-bottom: 26px;">
                                <h1 class="text-uppercase fw-bold" id="Projet-id-1"><span style="color: rgb(255, 255, 255);"><?php echo $result['name']?></span></h1>
                                <p id="Projet-id-1-txt" class="my-3" style="margin-bottom: 40px;"><span style="color: rgb(255, 255, 255); background-color: transparent;"><?php echo $result['resume']?></span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 offset-md-2" style="margin-bottom: 274px;">
                            <div style="max-width: 350px;margin-bottom: 26px;">
                                <h1 class="text-uppercase fw-bold" id="Projet-id-2"><span style="color: rgb(255, 255, 255);"><?php echo $result['name']?></span></h1>
                                <p id="Projet-id-1-txt-1" class="my-3" style="margin-bottom: 40px;"><span style="color: rgb(255, 255, 255); background-color: transparent;"><?php echo $result['resume']?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item"></div>
                <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="<?php echo $result['img']?>" alt="Slide Image" style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold"><?php echo $result['name']?></h1>
                                    <p class="my-3"><?php echo $result['resume']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item h-100"><img class="w-100 d-block position-absolute h-100 fit-cover" src="<?php echo $result['img']?>" alt="Slide Image" style="z-index: -1;">
                    <div class="container d-flex flex-column justify-content-center h-100">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 offset-md-2">
                                <div style="max-width: 350px;">
                                    <h1 class="text-uppercase fw-bold"><?php echo $result['name']?></h1>
                                    <p class="my-3"><?php echo $result['resume']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
            </ol>
        </div>
        <?php }}?>
        <h1 class="text-center" id="h1_CV" style="margin-top: 60px;margin-bottom: 15px;"><span style="color: rgb(255, 255, 255);">Mon CV</span></h1>
        <div class="row">
            <div class="col"><img class="rounded img-fluid" id="CV-image-1" src="assets/img/RognerCV%20Gendarmerie%20Photo%20Guardia.webp" width="70%" style="text-align: center;position: relative;display: block;margin-left: auto;margin-right: auto;" loading="eager" height="100%" alt="CV photo"></div>
        </div>
        <h1 class="text-center" id="h1_jeux" style="margin-top: 15px;"><span style="color: rgb(255, 255, 255);">Jeux</span></h1>
        <section class="py-4 py-xl-5">
            <h1 class="text-center" id="Contact"></h1>
            <div class="container">
                <div class="row d-flex justify-content-center" id="contact-board">
                    <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4" style="margin-bottom: -46px;">
                        <div class="card mb-5">
                            <div class="card-body p-sm-5">
                                <h2 class="text-center mb-4" id="contact"><span style="color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);">Me contacter</span></h2>
                                <form method="post">
                                    <div class="mb-3"><input class="form-control" type="text" id="name-2" name="name" placeholder="Name"></div>
                                    <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email"></div>
                                    <div class="mb-3"><textarea class="form-control" id="message-2" name="message" rows="6" placeholder="Message"></textarea></div>
                                    <div><button class="btn btn-primary d-block w-100" id="contact_submit_button" type="submit">Send </button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="text-center">
            <div class="container text-muted py-4 py-lg-5" id="footers" style="width: 100%;height: 100%;margin-top: -60px;">
                <ul class="list-inline">
                    <li class="list-inline-item me-4"></li>
                    <li class="list-inline-item me-4"><a href="https://fr.linkedin.com/in/alexandre-destres" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-linkedin" id="linkedin_button">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"></path>
                            </svg></a></li>
                    <li class="list-inline-item"></li>
                </ul>
                <p class="visible mb-1" id="Copyright"><a href="me_in_details.html"><span style="color: rgb(108, 117, 125);">Copyright © Alexandre Destres 2023</span></a></p>
            </div>
        </footer>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Simple-Slider-slider.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick.min.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick_slider_carousel.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>