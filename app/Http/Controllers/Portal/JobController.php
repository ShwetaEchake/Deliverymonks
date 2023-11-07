<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
USE Illuminate\Support\Collection;

class JobController extends Controller
{

    public function singleJob($category_id, $job_id, $location_id, $client_id, $enquiry_id)
    {
        // $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        // $getJobs = Http::asForm()->post($url, [
        //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //     'type' => 'Categories',
        //     'id' => $category_id,
        // ]);

        // $getJobs = $getJobs->json();
        // $Jobs = collect($getJobs)->sortBy('job_id')->toArray();
        // foreach($Jobs as $Jobs){
        //     if($Jobs['job_id'] == $job_id){
        //         return view('Portal.job-page-alt',compact('Jobs'));
        //     }
        // }

        return view('Portal.job-page-alt',compact('category_id','job_id','location_id','client_id','enquiry_id'));
    }

    public function browseJob()
    {
        // $response = Http::pool(function(Pool $pool){
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
        // $getJobs = new Collection();
        // $searchJobs = new Collection();
        // for($i = 0;$i < count($response);$i++){
        //     $Jobs = $response[$i]->json();
        //     $Jobs = collect($Jobs);


        //     $getJobs = $getJobs->merge($Jobs);
        //     $getJobs = $getJobs->sortByDesc('created_at');
        // }

        // $getJobs = $this->paginate($getJobs,10);
        // $getJobs->withPath('browse-jobs');

        // ------------------------------------------------------------------------

        // $getJobs = new Collection();
        // $Jobslocation = new Collection();
        // for($i = 1;$i <= 1;$i++)
        // {
        //     $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        //     $Jobs = Http::asForm()->post($url, [
        //         'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //         'type' => 'Categories',
        //         'id' => $i,
        //     ]);
        //     $Jobs = $Jobs->json();
        //     $Jobs = collect($Jobs)->sortByDesc('created_at');
            
        //     $getJobs = $getJobs->merge($Jobs);
        //     $getJobs = $getJobs;

        //     // $Jobslocation = $Jobslocation->merge($Jobs);
        //     // $Jobslocation = $Jobslocation->unique('place_of_work');
        // }

        // $getJobs = $this->paginate($getJobs,10);
        // $getJobs->withPath('browse-jobs');

        // return view('Portal.browse-jobs',compact('getJobs'));

        return view('Portal.browse-jobs');
    }

    
    public function sortfilter(Request $request)
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
        $getJobs = new Collection();
        $searchJobs = new Collection();
        for($i = 0;$i < count($response);$i++){
            $Jobs = $response[$i]->json();
            $Jobs = collect($Jobs)->toArray();		

            $getJobs = $getJobs->merge($Jobs);
            $getJobs = $getJobs;
        }

        // -------------------------------------------------------------------------

        // $getJobs = new Collection();
        // for($i = 1;$i <= 1;$i++)
        // {
        //     $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        //     $Jobs = Http::asForm()->post($url, [
        //         'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
        //         'type' => 'Categories',
        //         'id' => $i,
        //     ]);
        //     $Jobs = $Jobs->json();
        //     $Jobs = collect($Jobs)->sortBy('created_at');
            
        //     $getJobs = $getJobs->merge($Jobs);
        //     $getJobs = $getJobs;
        // }

        $sortby = $request->sortby;
        if($sortby == 'oldest'){
            // For Oldest post
            $getJobs = collect($getJobs)->sortBy('created_at');
        }
        elseif($sortby == 'lowersalary'){
            // For Lower Salary
            $getJobs = collect($getJobs)->sortBy('basic_salary');
        }
        elseif($sortby == 'highersalary'){
            // For Lower Salary
            $getJobs = collect($getJobs)->sortByDesc('basic_salary');
        }
        elseif($sortby == 'lowerworkinghours'){
            // For Lower Salary
            $getJobs = collect($getJobs)->sortBy('duty_hours');
        }
        elseif($sortby == 'higherworkinghours'){
            // For Lower Salary
            $getJobs = collect($getJobs)->sortByDesc('duty_hours');
        }
        else{
            // For newest post
            $getJobs = collect($getJobs)->sortByDesc('created_at');
        }

        if($request->city != ''){
            $city = $request->city;
            $getJobs = collect($getJobs)->where('client_location_code','=',$city);
        }

        $getJobs = $this->paginate($getJobs,10);
        $getJobs->withPath('browse-jobs?sortby='.$sortby.'&city='.$request->city);
        
        return view('Portal.browse-jobs',compact('getJobs'));
    }

    public function searchJob(Request $request)
    {
        $city = $request->city;
        $job_title = $request->job_title;

        // $response = Http::pool(function(Pool $pool){
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
        // $getJobs = new Collection();
        // $searchJobs = new Collection();
        // for($i = 0;$i < count($response);$i++){
        //     $Jobs = $response[$i]->json();
        //     $Jobs = collect($Jobs);		

        //     $getJobs = $getJobs->merge($Jobs);
        //     $getJobs = $getJobs;
        // }

        // if($request->job_title != ''){
        //     $getCategory = collect($getJobs)->where('category_name','=',$request->job_title);
        //     // $getJobs = $this->paginate($getJobs,10);
        //     // $getJobs->withPath('search-jobs?job_title='.$job_title.'&city='.$city);
        // }
        // else{
        //     $getCategory = '';  
        // }
        
        // if($request->city != '' && !($getCategory->isEmpty())){
        //     $getJobs = collect($getCategory)->where('client_location_code','=','245');
        //     // $getJobs = $this->paginate($getJobs,10);
        //     // $getJobs->withPath('search-jobs?job_title='.$job_title.'&city='.$city);
        // }
        // elseif(!($getCategory->isEmpty()) && $request->city == ''){
        //     $getJobs = collect($getCategory);        
        // }
        // else{
        //     $getJobs = collect($getJobs);        
        // }
        // // $getCategory = collect($getJobs)->where('category_name','=',$request->job_title);
        // // $getJobs = collect($getCategory)->where('client_location_code','=','260');
        // // dd($getJobs);
        
        // $getJobs = $this->paginate($getJobs,10);
        // $getJobs->withPath('search-jobs?job_title='.$job_title.'&city='.$city);

        return view('Portal.search-jobs',compact('city','job_title'));
    }

    public function browseJobByCategory($category_id)
    {
        $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
        $getJobs = Http::asForm()->post($url, [
            'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            'type' => 'Categories',
            'id' => $category_id,
        ]);

        $getJobs = $getJobs->json();
        $getJobs = collect($getJobs)->sortByDesc('created_at');

        $getJobs = $this->paginate($getJobs);
        $getJobs->withPath('category_id='.$category_id);

        return view('Portal.browse-jobs',compact('getJobs'));
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
