<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        return view('login',compact('job_id','category_id','location_id','client_id','enquiry_id'));
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'phone_number.full' => 'required|numeric',
            ],
            [
                'phone_number.full.required' => 'The phone number is required',
                'phone_number.full.numeric' => 'The phone number must be number',
                // 'phone_number.full.max' => 'The phone number must be 10 digit',
            ]
        );

        // To eliminate + sign from phone number
        $phone = str_replace("+","",$request['phone_number']['full']);
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/setUserDetail";
            $response = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'phone' => $phone,
            ]);
            if($response != ''){
                // $data = compact('phone','job_id');
                return redirect('verify-otp?phone='.$phone.'&job_id='.$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id)->with('success','OTP is sent to your whatsapp number!');   
            }
        }catch(Exception $e){
            echo '<html><head><title>Error 404</title><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
            <body style="background-color:white;">
            <div style="top:5%;margin-left:10px;margin-right:10px;">
            <div style="background-color:pink;">
                <h1 style="text-align:center;font-size:60px;">404</h1>
                <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
            </div>
            <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
            <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
            <a href="javascript:location.reload(true)" style="text-decoration:none;border:1px solid black;padding:5px;background:blue;color:white;margin-left:100px;">Reload</a>
            </div>
            </body></html>';
        }
        
    }

    public function viewOTP(Request $request)
    {
        $phone = $request->phone;
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        return view('otp',compact('phone','job_id','category_id','location_id','client_id','enquiry_id'));
    }

    public function verifyOTP(Request $request)
    {
        $request->validate([
            // 'digit1' => 'required|numeric',
            // 'digit2' => 'required|numeric',
            // 'digit3' => 'required|numeric',
            // 'digit4' => 'required|numeric',
            'otp' => 'required|numeric',
        ]);

        $phone = $request->phone;
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/VerifyOTP";
            $response = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'phone' => $request->phone,
                // 'otp' => $request->digit1.$request->digit2.$request->digit3.$request->digit4,
                'otp' => $request->otp,
            ]);

            // dd($response->json());
            // echo $response->json('candidate_id');
            // echo $response['candidate_id'];
            echo $response;
        
            if($response != ''){
                session()->put('candidate_id',$response->json('candidate_id'));
                // return redirect('/user-detail');
                return redirect('/user-detail?phone='.$phone.'&job_id='.$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id);
            }
            else{
                return back()->with('error','Invalid OTP');
                // return redirect('verify-otp?phone='.$phone.'&job_id='.$job_id)->with('error','Invalid OTP');
            }
        }catch(Exception $e){
            echo '<html><head><title>Error 404</title><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
            <body style="background-color:white;">
            <div style="top:5%;margin-left:10px;margin-right:10px;">
            <div style="background-color:pink;">
                <h1 style="text-align:center;font-size:60px;">404</h1>
                <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
            </div>
            <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
            <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
            <a href="javascript:location.reload(true)" style="text-decoration:none;border:1px solid black;padding:5px;background:blue;color:white;margin-left:100px;">Reload</a>
            </div>
            </body></html>';
        }
    }

    public function resendOTP(Request $request)
    {
        $phone = $request->phone;
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/setUserDetail";
            $response = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'phone' => $phone,
            ]);
            if($response != ''){
                return redirect('verify-otp?phone='.$phone.'&job_id='.$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id)->with('success','OTP is sent to your whatsapp number');
            }
        }catch(Exception $e){
            echo '<html><head><title>Error 404</title><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
            <body style="background-color:white;">
            <div style="top:5%;margin-left:10px;margin-right:10px;">
            <div style="background-color:pink;">
                <h1 style="text-align:center;font-size:60px;">404</h1>
                <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
                </div>
            <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
            <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
            <a href="javascript:location.reload(true)" style="text-decoration:none;border:1px solid black;padding:5px;background:blue;color:white;margin-left:100px;">Reload</a>
            </div>
            </body></html>';
        }
    }
    

    public function welcome(Request $request)
    {
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        if(session('candidate_id')){
            try{
                $url = "http://45.79.124.136/Deliveryboy/API/V1/getDeliveryDetail";
                $response = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
                ]);
                // dd($response->json());
                if($response[0]['language'] == '' && $response[0]['vehicle_selection'] == '' && $response[0]['intrested_in'] == '' && $response[0]['city_id'] == '0' && $response[0]['location'] == '' && $response[0]['zipcode'] == '' && $response[0]['gender'] == '' && $response[0]['name'] == ''){
                    return view('profile',compact('job_id','category_id','location_id','client_id','enquiry_id'));
                }
                else{
                    return redirect('profile?job_id='.$job_id.'&category_id='.$category_id.'&location_id='.$location_id.'&client_id='.$client_id.'&enquiry_id='.$enquiry_id);
                }
            }catch(Exception $e){
                echo '<html><head><title>Error 404</title><meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
                <body style="background-color:white;">
                <div style="top:5%;margin-left:10px;margin-right:10px;">
                <div style="background-color:pink;">
                    <h1 style="text-align:center;font-size:60px;">404</h1>
                    <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
                </div>
                <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
                <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
                <a href="javascript:location.reload(true)" style="text-decoration:none;border:1px solid black;padding:5px;background:blue;color:white;margin-left:100px;">Reload</a>
                </div>
                </body></html>';
            }
        }

    }

    public function getZones(Request $request)
    {
        if($request->ajax()){
                    
            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getZones';
            $getZones = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'location_id' => $request->city,
            ]); 

            $getZones = $getZones->json();
            $getZones = collect($getZones)->sortBy('zone_name');
            
            if(count($getZones) > 0){
                // $output .= '<label class="font-weight-bold">Select Location:</label>';
                // $output .= '<select name="location" id="location" class="form-control" style="width:100%;">';
                $output .= '<option value="">Select Location</option>';
                foreach($getZones as $zones){    
                        $output .= '<option value="'.$zones['zone_name'].'">'.$zones['zone_name'].'</option>';
                }

                // $output .= '</select>';

            }else{
                // $output .= '<label class="font-weight-bold">Select Location:</label>';
                $output .= '<option value"">No Zones Found</option>';
            }

            return [
                'output' => $output,
            ];

        }

        return view('profile');
    }

    public function setCandidateDetail(Request $request)
    {
        if($request->ajax()){
                $age = Carbon::parse($request->dob)->diff(Carbon::now())->y;

                $url = "http://45.79.124.136/Deliveryboy/API/V1/setDeliveryDetail";
                $response = Http::asForm()->post($url, [
                        'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                        'candidate_id' => session('candidate_id'),
                        'language' => $request->language,
                        'vehicle_selection' => $request->vehicle,
                        // Storing array elemnent by separating them with comma(,)
                        'intrested_in' => implode(",",$request->interest),
                        'citizenship' => 1,
                        'city_id' => $request->city,
                        'location' => $request->location,
                        'address' => $request->address,
                        'zipcode' => $request->zip,
                        'name' => $request->name,
                        'gender' => $request->gender,
                        'date_of_birth' => $request->dob,
                        'age' => $age,
                ]);
    
                // dd($response);
                if($response->json() != ''){
                    $data = 'success';
                }else{
                    $data = 'failed';
                }
                   
                return $data;
            }
            $job_id = $request->job_id;
            $category_id = $request->category_id;
            $location_id = $request->location_id;
            $client_id = $request->client_id;
            $enquiry_id = $request->enquiry_id;
            return view('profile',compact('job_id','category_id','location_id','client_id','enquiry_id'));
        }

    public function profile(Request $request)
    {
        $job_id = $request->job_id;
        $category_id = $request->category_id;
        $location_id = $request->location_id;
        $client_id = $request->client_id;
        $enquiry_id = $request->enquiry_id;
        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/getDeliveryDetail";
            $response = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
                ]);
                if($response != ''){
                    if($response[0]['language'] == '' && $response[0]['vehicle_selection'] == '' && $response[0]['intrested_in'] == '' && $response[0]['city_id'] == '0' && $response[0]['location'] == '' && $response[0]['zipcode'] == '' && $response[0]['gender'] == '' && $response[0]['name'] == ''){
                        return view('profile',compact('job_id','category_id','location_id','client_id','enquiry_id'));
                    }
                    else{
                        $user = $response->json();
                        $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocuments";
                        $document = Http::asForm()->post($url, [
                            'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                            'candidate_id' => session('candidate_id'),
                        ]);
                        
    
                        $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocumentType";
                        $documentType = Http::asForm()->post($url, [
                            'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                            'candidate_id' => session('candidate_id'),
                        ]);

                        $url = "http://45.79.124.136/Deliveryboy/API/V1/setJobApplied";
                        $setApplyCandidate = Http::asForm()->post($url, [
                            'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                            'candidate_id' => session('candidate_id'),
                            'client_id' => $client_id,
                            'enquiry_id' => $enquiry_id,
                            'job_id' => $job_id,
                            'location_id' => $location_id,
                        ]);

                        if($setApplyCandidate->json() != ''){
                            $success = 'You have successfully applied for this job!';
                            $fail = '';
                        }else{
                            $fail = 'You have already applied for this job!';
                            $success = '';
                        }
    
                        return view('document',compact('user','document','documentType','job_id','category_id','location_id','client_id','enquiry_id','success','fail'));
                    }   

                }
        }catch(Exception $e){
            echo '<html><head><title>Error 404</title><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
            <body style="background-color:white;">
            <div style="top:5%;margin-left:10px;margin-right:10px;">
            <div style="background-color:pink;">
                <h1 style="text-align:center;font-size:60px;">404</h1>
                <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
                </div>
                <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
                <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
            <a href="javascript:location.reload(true)" style="text-decoration:none;border:1px solid black;padding:5px;background:blue;color:white;margin-left:100px;">Reload</a>
            </div>
            </body></html>';
        }

    }

    public function createCandidate(Request $request)
    {
        $faker = Faker::create();
        for($i = 1;$i <= 1;$i++){
            $phone = $faker->numerify('##########');
            $language = "English";
            $name = $faker->name;
            $interest = ["Document Delivery","Food Delivery","Parcel Delivery"];
            $city = $faker->city;
            $address = $faker->address;
            $zip = rand(400000,499999);
            $vehicle = "bike";
            
            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setUserDetail";
            // $getJobs = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'phone' => $phone,
            // ]);

            // $getUserDetail = $getJobs->json();
            // $getUserDetail = collect($getUserDetail);

            // // dd($getUserDetail);
            // $candidate_id = $getUserDetail['candidate_id'];
            // echo $candidate_id;

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setDeliveryDetail";
            // $response = Http::asForm()->post($url, [
            //         'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //         'candidate_id' => session('candidate_id'),
            //         'language' => $language,
            //         'vehicle_selection' => $vehicle,
            //         // Storing array elemnent by separating them with comma(,)
            //         'intrested_in' => implode(",",$interest),
            //         'citizenship' => 1,
            //         'city_id' => $city,
            //         // 'location' => $this->location,
            //         'address' => $address,
            //         'zipcode' => $zip,
            //         'name' => $name,
            // ]);

            // $file = $request->file('file');
            // $extension = $file->getClientOriginalExtension();
            // $filepath = base64_encode(file_get_contents($request->file('file')->path()));

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
            // $setCandidateDocuments = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'candidate_id' => $candidate_id,
            //     'document_title' => '1',
            //     'document_path' => $filepath,
            //     'extension' => $extension
            // ]);

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
            // $setCandidateDocuments = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'candidate_id' => $candidate_id,
            //     'document_title' => '2',
            //     'document_path' => $filepath,
            //     'extension' => $extension
            // ]);

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
            // $setCandidateDocuments = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'candidate_id' => $candidate_id,
            //     'document_title' => '3',
            //     'document_path' => $filepath,
            //     'extension' => $extension
            // ]);

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";            
            // $setCandidateDocuments = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'candidate_id' => $candidate_id,
            //     'document_title' => '4',
            //     'document_path' => $filepath,
            //     'extension' => $extension
            // ]);

            // $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
            // $setCandidateDocuments = Http::asForm()->post($url, [
            //     'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            //     'candidate_id' => $candidate_id,
            //     'document_title' => '5',
            //     'document_path' => $filepath,
            //     'extension' => $extension
            // ]);
        }

        // return back()->with('success','Candidate created successfully!');
    }

    public function test2(Request $request)
    {
        if($request->ajax()){

            $output = '';
            $url = 'http://45.79.124.136/Deliveryboy/API/V1/getJobs';
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'type' => 'Categories',
                'id' => '1',
            ]); 

            $getJobs = $getJobs->json();
            $jobs = collect($getJobs)->sortByDesc('created_at');

            $jobs = $this->paginate($jobs);

            if(count($jobs) > 0){
                foreach($jobs as $jobs){    
                    // job listing           
                    $output .= '<a href="job-page/category_id='.$jobs['category_id'].'&job_id='.$jobs['job_id'].'"class="listing full-time">
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
                            <p><span>Error!</span> Please fill in all the fields required.</p>
                            <a class="close" href="#"></a>
                            </div>';
            }

            // job spotlight
            $job_spotlight = '';
            $spotlight = collect($getJobs)->sortByDesc('basic_salary');

            $spotlight = $this->paginate($spotlight,10);

            if(count($spotlight) > 0){
                foreach($spotlight as $spot){
                    $job_spotlight .= '<li>
                    <div class="job-spotlight">
                      <a href="#"><h4>'.$spot['category_name'].' <span class="full-time">Full-Time</span></h4></a>
                      <span><i class="fa fa-briefcase"></i> '.$spot['company_name'].'</span>';
                      
                      $job_spotlight .= '<span><i class="fa fa-map-marker"></i> '.$jobs['zone_name'].", ".$jobs['location_name'].'</span>
                      <span><i class="fa fa-money"></i> $'.$spot['basic_salary'].' / hour</span>
                      <p>'.Str::limit($spot['detail'], 120, $end='...').'.</p>
                      <a href="{{ url("job-page/category_id='.$jobs['category_id'].'&job_id='.$jobs['job_id'].'") }}" class="button">Apply For This Job</a>
                    </div>
                  </li>';
                }
            }else{
                $job_spotlight .= '<div class="notification error closeable">
                                   <p><span>Error!</span> Please fill in all the fields required.</p>
                                   <a class="close" href="#"></a>
                                   </div>';
            }

            return [
                'output' => $output,
                'job_spotlight' => $job_spotlight,
            ];

        }

        return view('test');

    }

    public function testing(Request $request)
    {
        $url = "http://45.79.124.136/Deliveryboy/API/V1/setJobApplied";
        $setApplyCandidate = Http::asForm()->post($url, [
            'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
            'candidate_id' => session('candidate_id'),
            'client_id' => '1',
            // 'enquiry_id' => '19',
            // 'job_id' => '2',
            // 'location_id' => '1',
        ]);

        // dd($setApplyCandidate->json());

        if($setApplyCandidate->json() != ''){
            $success = 'You have successfully applied for this job!';
            $fail = '';
        }else{
            $error = 'You have already applied for this job!';
            $success = '';
        }
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}