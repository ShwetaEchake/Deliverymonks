<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // $response = Http::retry(3,100)->pool(function(Pool $pool){
        //     $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        //     for($i = 1;$i <= 20;$i++){
        //         $pool->asForm()->post($url,[
        //             'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //             'type' => 'Categories',
        //             'id' => $i,
        //         ]);
        //     }
        // });

        // $allcategory = new Collection();
        // $allJobs = new Collection();
        // $searchJobs = new Collection();
        // for($i = 0;$i < count($response);$i++){
        //     $getJobs = $response[$i]->json();
        //     $Jobs = collect($getJobs)->sortBy('location_name');

        //     $allcategory = $allcategory->merge($Jobs);
        //     $allcategory = $allcategory->unique('category_id');

        //     $allJobs = $allJobs->merge($Jobs);
        //     $allJobs = $allJobs;

        //     $searchJobs = $searchJobs->merge($Jobs);
        //     $searchJobs = $searchJobs->unique('place_of_work');
        // }

        // ------------------------------------------------------------------------------
        
        // $allcategory = new Collection();
        // $allJobs = new Collection();
        // $searchJobs = new Collection();
        // for($i = 1;$i <= 1;$i++)
        // {
        //     $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        //     $getJobs = Http::asForm()->post($url, [
        //         'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //         'type' => 'Categories',
        //         'id' => $i,
        //     ]);
        //     $getJobs = $getJobs->json();
        //     $Jobs = collect($getJobs)->sortByDesc('created_at');
            
        //     $allcategory = $allcategory->merge($Jobs);
        //     $allcategory = $allcategory->unique('category_id');

        //     $allJobs = $allJobs->merge($Jobs);
        //     $allJobs = $allJobs;

        //     $searchJobs = $searchJobs->merge($Jobs);
        //     $searchJobs = $searchJobs->unique('place_of_work');
        // }

        // return view('Portal.index',compact('searchJobs','allcategory','allJobs'));
        return view('Portal.index');
    }

    public function about()
    {
        return view('Portal.about');
    }
    
    public function blog()
    {
        return view('Portal.blog');
    }
    
    public function contact()
    {
        return view('Portal.contact');
    }

    public function single_blog()
    {
        return view('Portal.blog-single-post');
    }

    public function browseCategories()
    {
        $response = Http::pool(function(Pool $pool){
            $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
            for($i = 1;$i <= 20;$i++){
                $pool->asForm()->post($url,[
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'type' => 'Categories',
                    'id' => $i,
                ]);
            }
        });

        $allcategory = new Collection();
        $allJobs = new Collection();
        $searchJobs = new Collection();
        for($i = 0;$i < count($response);$i++){
            $getJobs = $response[$i]->json();
            $Jobs = collect($getJobs)->sortBy('location_name');

            $allcategory = $allcategory->merge($Jobs);
            $allcategory = $allcategory->unique('category_id');
        }

        // ----------------------------------------------------------------------

        // $allcategory = new Collection();
        // for($i = 1;$i <= 1;$i++)
        // {
        //     $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        //     $getJobs = Http::asForm()->post($url, [
        //         'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //         'type' => 'Categories',
        //         'id' => $i,
        //     ]);
        //     $getJobs = $getJobs->json();
        //     $Jobs = collect($getJobs)->sortBy('created_at');
            
        //     $allcategory = $allcategory->merge($Jobs);
        //     $allcategory = $allcategory->unique('category_id');
        // }
                
        return view('Portal.browse-categories',compact('allcategory'));
    }
}
