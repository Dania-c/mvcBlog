<?php

if (isset($_POST['uploadf'])){
    $file=$_FILES['file'];
    $name =$_FILES['file']['name'];
    $tmp_name =$_FILES['file']['tmp_name'];
    $size =$_FILES['file']['size'];
    $error =$_FILES['file']['error'];

    $tempExtension = explode('.',$name);
    $fileExtension = strtolower(end($tempExtension));

    $arrExtensionAllowed = array('jpg','jpeg','png','pdf');
    
    if (in_array($fileExtension,$arrExtensionAllowed)) {
        if ($error ===0){
            if ($size <30000){
                $newFileName = uniqid('',true) . "." . $fileExtension;
                $fileDestination = "uploads/" . $newFileName;
                move_uploaded_file($tmp_name,$fileDestination);
                header("Location: files.php?uploadedsuccess");
            } else {
                echo " sorry file size too big";
            }
        } else {
            echo " sorry there was an error";
        }
    } else {
        echo " file type not accepted";
    }


}
else {
    echo "what";
}
?>