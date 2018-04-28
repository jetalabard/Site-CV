<?php
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    session_start();
    $_SESSION['errormsg'] = '';

    if (!is_dir($target_dir)) {
        if (!mkdir($target_dir, 0755)) {
            $_SESSION['errormsg'] = 'Le répertoire cible ne peut pas être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !';
        }
    }
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($target_file)) {
            $_SESSION['errormsg'] = "Désolé, le fichier existe déjà.";
            $uploadOk = 0;
        } else {
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 10000000) {
                $_SESSION['errormsg'] = "Désolé, le fichier est trop volumineux.";
                $uploadOk = 0;
            } else {
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $_SESSION['errormsg'] = "Désolé, seulement les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
                    $uploadOk = 0;
                } else {
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        $_SESSION['errormsg'] = "Désolé, votre fichier n'a pas été upload.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            //OK
                        } else {
                            $_SESSION['errormsg'] = "Désolé, une erreur est survenue lors de l'upload du fichier.";
                        }
                    }
                }
            }
        }
    } else {
        $_SESSION['errormsg'] = "Le fichier n'est pas une image.";
        $uploadOk = 0;
    }
    if ($_SESSION['errormsg'] === "") {
        $db_name = 'postlzhc';
        $hostname = 'sql2.olympe.in';
        $username = 'postlzhc';
        $password = '9*65C08ab';
        $Filename=basename( $_FILES['fileToUpload']['name']);
        $dbh = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);
        $sql = "INSERT INTO image (name) VALUES ('".$Filename."')";
        $dbh->exec($sql);
        $dbh = null;
        header("location: ../admin.php");
    } else {
        header("location: ../pageFormImage.php");
    }
} else {
    header("location: ../pageFormImage.php");
}
?>