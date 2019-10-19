<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function getAllNews($lang)
    {
    	\App::setLocale($lang);
    	$data = \App\News::where('active',1)->select('title_'.$lang.' as title','content_'.$lang.' as content','img','active')->get();
    	return $data;
    }
}