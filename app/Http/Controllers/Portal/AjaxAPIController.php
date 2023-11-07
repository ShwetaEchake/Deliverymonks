<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class AjaxAPIController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax()){

            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            $jobs = collect($getJobs)->sortByDesc('created_at');

            $jobs = $this->paginate($jobs);

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            // job spotlight
            $job_spotlight = '';
            $spotlight = collect($getJobs)->sortByDesc('basic_salary');

            $spotlight = $this->paginate($spotlight);

            if(count($spotlight) > 0){
                foreach($spotlight as $spot){
                    $job_spotlight .= '<li>
                    <div class="job-spotlight">
                      <a href="#"><h4>'.$spot['category_name'].' <span class="full-time">Full-Time</span></h4></a>
                      <span><i class="fa fa-briefcase"></i> '.$spot['company_name'].'</span>';

                      $job_spotlight .= '<span><i class="fa fa-map-marker"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</span>
                      <span><i class="fa fa-money"></i> ₹'.$spot['basic_salary'].' / Month</span>
                      <p>'.Str::limit($spot['detail'], 120, $end='...').'.</p>
                      <a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'" class="button">Show More Detail</a>
                    </div>
                  </li>';
                }
            }else{
                $job_spotlight .= '<div class="notification error closeable">
                                   <p><span>Sorry!</span> No job found.</p>
                                   <a class="close" href="#"></a>
                                   </div>';
            }

            return [
                'output' => $output,
                'job_spotlight' => $job_spotlight,
            ];

        }

        return view('Portal.index');
    }

    public function browseJobs(Request $request)
    {
        if($request->ajax()){

            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            $jobs = collect($getJobs)->sortByDesc('created_at');

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            return [
                'output' => $output,
            ];

        }

        return view('Portal.browse-jobs');
    }

    public function sortJobs(Request $request)
    {
        if($request->ajax()){
            
            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            
            $sortby = $request->sortby;
            if($sortby == 'oldest'){
                // For Oldest post
                $jobs = collect($getJobs)->sortBy('created_at');
            }
            elseif($sortby == 'lowersalary'){
                // For Lower Salary
                $jobs = collect($getJobs)->sortBy('basic_salary');
            }
            elseif($sortby == 'highersalary'){
                // For Lower Salary
                $jobs = collect($getJobs)->sortByDesc('basic_salary');
            }
            elseif($sortby == 'lowerworkinghours'){
                // For Lower Salary
                $jobs = collect($getJobs)->sortBy('duty_hours');
            }
            elseif($sortby == 'higherworkinghours'){
                // For Lower Salary
                $jobs = collect($getJobs)->sortByDesc('duty_hours');
            }
            else{
                // For newest post
                $jobs = collect($getJobs)->sortByDesc('created_at');
            }

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            return [
                'output' => $output,
            ];

        }

        return view('Portal.browse-jobs');
    }

    public function filterJobs(Request $request)
    {
        if($request->ajax()){
            
            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            
            $city = $request->city;
            if($city != ''){
                // For selected city
                $jobs = collect($getJobs)->where('client_location_code',$city);
            }else{
                // For all cities
                $jobs = collect($getJobs)->sortByDesc('created_at');
            }

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            return [
                'output' => $output,
            ];

        }

        return view('Portal.browse-jobs');
    }

    public function jobsByCategory(Request $request)
    {
        if($request->ajax()){
            
            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            
            $category = $request->category;
            if($category != ''){
                // For selected category
                $jobs = collect($getJobs)->where('category_name',$category);
            }else{
                // For all category
                $jobs = collect($getJobs)->sortByDesc('created_at');
            }

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            return [
                'output' => $output,
            ];

        }

        return view('Portal.browse-jobs');
    }

    public function singleJob(Request $request)
    {
        if($request->ajax()){

            $title = '';
            $output = '';
            $widget = '';

            $category_id = $request->category_id;
            $job_id = $request->job_id;
            $location_id = $request->location_id;
            $client_id = $request->client_id;
            $enquiry_id = $request->enquiry_id;

            $url = "http://45.79.124.136/Deliveryboy/API/V1/getJobs";
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'Categories',
                'id' => $category_id,
            ]);

            $getJobs = $getJobs->json();
            $Jobs = collect($getJobs)->where('job_id',$job_id)->where('client_location_code',$location_id)->where('client_id',$client_id)->where('enquiry_id',$enquiry_id)->first();
            
            
            if(count($Jobs) > 0){
                $title = '<div class="container">
                            <div class="ten columns">
                            <span><a href="#">'.$Jobs['category_name'].'</a></span>
                            <h2>'.$Jobs['category_name'].'<span class="full-time">Full-Time</span></h2>
                            </div>
                            </div>';

                $output .= '<div class="company-info">
                            <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$Jobs['folder_path'].'/'.$Jobs['client_logo'].'" alt="">
                            <div class="content">
                                <h4>'.$Jobs['company_name'].'</h4>';
                                // <span><a href="https://'.$Jobs['website_url'].'"><i class="fa fa-link"></i> Website</a></span>
                                $output .='<span><a href="#"><i class="fa fa-twitter"></i> @kingrestaurants</a></span>
                            </div>
                            <div class="clearfix"></div>
                            </div>'.$Jobs['detail'];

                $widget .= '<ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div>
                                    <strong>Location:</strong>';

                $widget .= '<span style="text-transform: capitalize;">'.$Jobs['zone_name'].', '.$Jobs['location_name'].'</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-user"></i>
                                <div>
                                    <strong>Job Title:</strong>
                                    <span>'.$Jobs['category_name'].'</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i>
                                <div>
                                    <strong>Vacancies:</strong>
                                    <span>';
                                    if($Jobs['required_position'] != ''){
                                        $widget .= $Jobs['required_position'];
                                    }else{
                                        $widget .= 'Not Mentioned';
                                    }
                                $widget .= '</span>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-money"></i>
                                <div>
                                    <strong>Salary:</strong>
                                    <span>';
                                    if($Jobs['basic_salary'] != ''){
                                        $widget .= '₹'.$Jobs['basic_salary'];
                                    }else{
                                        $widget .= 'Not Mentioned</span>';
                                    }
                                    $widget .= '</span>
                                </div>
                            </li>
                        </ul>';

            }else{
                $output .= 'fail';
            }

            return [
                'title' => $title,
                'output' => $output,
                'widget' => $widget,
            ];
            
        }

        $category_id = $request->category_id;
        $job_id = $request->job_id;
        $location_id =$request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;

        return view('Portal.job-page-alt',compact('category_id','job_id','location_id','client_id','enquiry_id'));
    }

    public function searchJobs(Request $request)
    {
        if($request->ajax()){

            $city = ucwords($request->city);
            $job_title = ucwords($request->job_title);
            $output = '';
            $title = '';

            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'All',
            ]); 

            $getJobs = $getJobs->json();
            $jobs = collect($getJobs);

            if($job_title == '' && $city == ''){
                $jobs = $jobs;
            }elseif($job_title != '' && $city == ''){
                $jobs = $jobs->filter(function($item) use($job_title){
                    return preg_match("/$job_title/",$item['category_name']);
                });
            }elseif($job_title == '' && $city != ''){
                $jobs = $jobs->filter(function($item) use($city){
                    return preg_match("/$city/",$item['location_name']);
                });
            }elseif($job_title != '' && $city != ''){
                $category = $jobs->filter(function($item) use($job_title){
                    return preg_match("/$job_title/",$item['category_name']);
                });

                $jobs = $category->filter(function($item) use($city){
                    return preg_match("/$city/",$item['location_name']);
                });
            }

            $count = count($jobs);
            $title .= 'We Have found "'.count($jobs).'" results for "'.$job_title.' '.$city.'"';

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['job_main_category_id'].'&job_id='.$jobs['job_id'].'&location_id='.$jobs['client_location_code'].'&client_id='.$jobs['client_id'].'&enquiry_id='.$jobs['enquiry_id'].'"class="listing full-time">
                    <div class="listing-logo">
                      <img src="http://45.79.124.136/Deliveryboy/admin/public/documents/'.$jobs['folder_path'].'/'.$jobs['client_logo'].'" alt="">
                    </div>
                    <div class="listing-title">
                      <h4>'.$jobs['category_name'].'<span class="listing-type">Full-Time</span></h4>
                      <ul class="listing-icons">
                        <li><i class="ln ln-icon-Management"></i> '.$jobs['company_name'].'</li>';
                        
                    $output .= '<li><i class="ln ln-icon-Map2"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</li>';
                    $output .= '<li><i class="ln ln-icon-Money-2"></i> ₹'.$jobs['basic_salary'].'</li>';
        
                    $post_at = now()->diffInDays($jobs['created_at']);
                    if ($post_at <= 2){
                        $output .= '<li><div class="listing-date new">new</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }
                    else{
                        $output .= '<li><div class="listing-date">'.$post_at.'d ago</div></li>
                                    </ul>
                                    </div>
                                    </a>';
                    }

                }

            }else{
                $output .= '<div class="notification error closeable">
                            <p><span>Sorry!</span> No job found.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            return [
                'output' => $output,
                'title' => $title,
            ];

        }

        return view('Portal.search-jobs');
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
