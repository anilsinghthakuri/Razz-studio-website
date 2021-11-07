<?php



//for image upload

use App\Models\Business;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

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


function news_group()
{
    $news = [
        'Corporate',
        'Mentions',
    ];

    return $news;
}

//for slider

function fetch_sliderdata()
{
    $slider_data = Slider::all();
    return $slider_data;
}

function fetch_business_data_front()
{
    $business_data = DB::table('businesses')->limit(6)->get();
    return $business_data;
}


function fetch_news_data_front()
{
    $news_data = DB::table('news')->where('news_group','Corporate')->limit(6)->get()->sortByDesc('id');;
    return $news_data;
}



?>
