<?php
session_start();
try{
    $bdd = new PDO('mysql:host=localhost;dbname=Big_project;charset=utf8', 'root');
}
catch(Execption $e){
    die('Erreur : ' .$e->getMessage());
}

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $user = htmlspecialchars($_POST["name"]);
    $passwd = $_POST["mdp"];

    // Échappement des caractères spéciaux pour éviter les injections SQL
    //$user = mysqli_real_escape_string($bdd, $user);
    //$passwd = mysqli_real_escape_string($bdd, $passwd);

    // Requête pour récupérer les identifiants dans la base de données
    $recupUser = "SELECT * FROM admin WHERE username = '$user'";
    $result = $bdd->query($recupUser);

    // Vérification si l'utilisateur existe dans la base de données
    if ($result->rowCount() > 0) {
        $row = $result->fetch();
        // Vérification si le mot de passe est correct
        if ($_POST["name"] == $row['username'] &&  $_POST["mdp"] == $row["password"]) {
            // Redirigerection vers une page protégée
            header('Location: admin_pannel.php');
        } else {
            // Connexion échouée
            echo "Nom d'utilisateur ou mot de passe incorrect !";
        }
    } else {
        // Connexion échouée
        echo "Nom d'utilisateur ou mot de passe incorrect !";
    }
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
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/Features-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-1.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Slick-Slider-Carousel.css">
</head>

<body style="background: rgb(17,18,20);">
    <section class="py-4 py-xl-5"></section>
    <div class="row text-center" style="margin-top: auto;margin-bottom: auto;">
        <div class="col">
            <div class="container">
                <h2 class="text-center" style="margin-top: 15px;padding-bottom: 0px;"><span style="color: rgb(255, 255, 255);">Connecte Toi</span></h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-lg-5 col-xl-4">
                        <div>
                            <form class="p-3 p-xl-4" method="post" style="margin-top: 0px;">
                                <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="Utilisateur"></div>
                                <div class="mb-3"><input class="form-control" type="password" id="mdp" name="mdp" placeholder="Mot de passe"></div>
                                <div class="mb-3"></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit" name="envoi" id="connexion_button">Connexion</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Simple-Slider-slider.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick.min.js"></script>
    <script src="assets/js/Slick-Slider-Carousel-slick_slider_carousel.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>