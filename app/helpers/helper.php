<?php



//for image upload
function image_upload($file = null,$destinationPath)
{


    if ($file == null ) {
        return $originalFile = 'no-image.png';

    } else {

        $originalFile = $file->getClientOriginalName();
        $originalFile = $originalFile;
        $file->move($destinationPath, $originalFile);

        return $originalFile;
    }

}


?>
