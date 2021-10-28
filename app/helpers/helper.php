<?php



//for image upload

use App\Models\Business;

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


//for business page

function fetch_business_data(){
    $business_data = Business::all();
    return $business_data;
}


?>
