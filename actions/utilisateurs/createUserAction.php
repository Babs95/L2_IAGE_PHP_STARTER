<?php
require('../../Database/user_db.php');

if (isset($_POST['send'])) {
    if (
        !empty($_POST['nom']) && !empty($_POST['prenom'])
        && !empty($_POST['email']) &&  !empty($_POST['profil_id'])
    ) {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $profil_id = $_POST['profil_id'];
        $password = password_hash("passer@#563", PASSWORD_DEFAULT);

        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $allowedExtensions = ['png', 'jpg', 'svg'];
            $fileExtension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            
            if(in_array(strtolower($fileExtension), $allowedExtensions)){
                $newImage = uploadImage($_FILES['avatar'], $email);

                if($newImage !== false){
                    addUser($nom, $prenom, $email, $password, $newImage ,$profil_id);
                    $message = "L'utilisateur " . $nom . " " . $prenom . " a été créer avec succès!";
                    header('Location:users.php?message='.$message);
                }else {
                    $errorMessage = "Echec upload image!";
                }

                
            } else{
                $errorMessage = "Veuillez télécharger une image au format JPG, PNG ou SVG!";
            }
            
            
        } else {
            $errorMessage = "Veuillez saisir un email valide!";
        }

    } else {
        $errorMessage = "Veuillez remplir tous les champs!";
    }
}

function uploadImage($image, $email) {
    $img_name = $email.substr(0, 5) . random_int(11111, 99999) .$image['name'];
    $img_path = UPLOAD_IMAGES_AVATAR_PATH . $img_name;

    if(move_uploaded_file($image['tmp_name'], $img_path)){
        return $img_name;
    }else return false;
}