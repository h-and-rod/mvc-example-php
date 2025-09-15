<?php

require_once '../models/photos.php';

class UploadController{
    public function upload(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['photo'])){ // Check if the request method is POST and it is not null
            $targetDir = '../../public/assets/images/'; // Declares the variable that carries the diretory
            $targetFile = $targetDir . basename( $_FILES['photo']); // Concatenate file name with targetDir

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) { // Check if the moving the file is possible
                $photoModel = new Photo() ;
                $photoModel->addPhoto($_FILES['photo']['name']) ; // Add addPhoto method to photoModel variable

                header('Location: index.php?success=true') ; // Indicates success
                exit ;                                               // and exit the function
            }else{
                header('Location: index.php?success=true') ; // Indicates error
                exit ;                                               // and exit the function
            }
        }
    }
}

?>