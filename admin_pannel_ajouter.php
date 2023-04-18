<?php
include_once "bdd_log.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom_projet = $_POST["text_area_name"];
    $description_projet = $_POST["text_area_desc"];
    $image_projet = $_POST["area_image"];

    // Validation des entrées utilisateur
    if (empty($nom_projet) || empty($description_projet) || empty($image_projet)) {
        die("Erreur : tous les champs so---nt obligatoires.");
    }

    // Échappement des données insérées
    $nom_projet = htmlspecialchars($nom_projet);
    $description_projet = htmlspecialchars($description_projet);
    $image_projet = htmlspecialchars($image_projet);

    $stmt = $bdd->prepare("INSERT INTO projets (name, resume, img) VALUES (:nom_projet, :description_projet, :image_projet)");
    $stmt->bindParam(':nom_projet', $nom_projet, PDO::PARAM_STR);
    $stmt->bindParam(':description_projet', $description_projet, PDO::PARAM_STR);
    $stmt->bindParam(':image_projet', $image_projet, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Le projet a été ajouté avec succès.";
    } else {
        echo "Erreur: " . $stmt->errorInfo()[2];
    }

    $stmt->closeCursor();
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Portfolio</title>
    <meta name="description" content="Big Project Guardia School 2023">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.reflowhq.com/v2/toolkit.min.css">
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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="fs-4"><strong><span style="text-decoration: underline; color: rgb(255, 255, 255); background-color: rgb(152, 162, 178);">Pannel Administrateur</span></strong></span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" id="acceuil-button" href="admin_pannel.php" target="_top"><strong>Accueil</strong></a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"></li>
                </ul>|
                <div data-reflow-type="auth-button" data-reflow-signout-redirect="index.html" id="log_out_button_ajouter"></div>
            </div>
        </div>
    </nav>
    <h1 id="h1_ajouter_projet" style="text-align: center;margin-left: 0px;margin-top: 40px;"><span style="color: rgb(255, 255, 255);">Ajouter un projet</span></h1>
    <div class="col text-end">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><img src="assets/img/guadia_photo.jpg" width="100%"></div>
                <div class="col-md-8">
                    <form method="post">
                        <div class="row">
                            <div class="col text-start" style="margin-top: 60px;">
                                <h4 id="h5_nom_ajouter_projet"><span style="color: rgb(255, 255, 255); background-color: rgba(17, 18, 20, 0.27);">Nom du projet</span></h4><input name="text_area_name" id="text_area_name" type="text" style="width: 50%;">
                            </div>
                        </div>
                        <div class="row text-start">
                            <div class="col" style="margin-top: 30px;">
                                <h4 id="h5_description_ajouter_projet"><span style="color: rgb(255, 255, 255);">Description du Projet</span></h4><textarea class="form-control-lg" name="text_area_desc" id="text_area_desc" style="width: 70%;height: 70%;"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-start" style="margin-top: 30px;">
                                <h4 id="h5_image_ajouter_projet"><span style="color: rgb(255, 255, 255);">Image du projet</span></h4><input name="area_image" id="area_image" class="form-control-sm" type="text" style="width: 50%;">
                            </div>
                        </div><button class="btn btn-primary" id="ajouter_button" type="submit" style="margin-top: 30px;" href="admin_pannel.php">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col" style="text-align: right;"><a class="btn btn-primary" role="button" id="delete_button_ajouter" style="align-items: self-end;background: rgb(255,0,0);text-align: right;margin-top: 15px;" href="admin_pannel.php">Supprimer</a></div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.reflowhq.com/v2/toolkit.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Simple-Slider-slider.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick.min.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick_slider_carousel.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>