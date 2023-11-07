<?php

namespace App\Http\Controllers\file_upload;

use App\Http\Controllers\Controller;
use App\Models\Documents;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DrivingController extends Controller
{
    public function uploadDrivingLicence(Request $request)
    {
        $request->validate(
            [
                'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ],
            [
                'file.required' => 'Image is Required',
                'file.max' => 'File must be less than 2MB',
            ]
        );

        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/getDeliveryDetail";
            $getDeliveryDetail = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
                ]);

            $file = $request->file('file');
            if($request->hasFile('file')){
                    $extension = $file->getClientOriginalExtension();
                    $filepath = base64_encode(file_get_contents($request->file('file')->path()));
                    
                    $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocumentType";
                    $getCandidateDocumentType = Http::asForm()->post($url, [
                        'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                        'candidate_id' => session('candidate_id'),
                    ]);
                    
                    $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocuments";
                    $getCandidateDocuments = Http::asForm()->post($url, [
                        'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                        'candidate_id' => session('candidate_id'),
                    ]);

                    if($getCandidateDocuments->json() != ''){
                        $count = count($getCandidateDocuments->json());
                        for($i=0; $i<$count;$i++){
                            if($getCandidateDocumentType[3]['document_type_id'] == $getCandidateDocuments[$i]['document_title']){
                                $document_id = $getCandidateDocuments[$i]['document_id'];
                                break;
                            }
                            else{
                                $document_id = '';
                            }
                        }
                        if($document_id != ''){
                            $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
                            $setCandidateDocuments = Http::asForm()->post($url, [
                                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                    'candidate_id' => session('candidate_id'),
                                    'document_id' => $document_id,
                                    'document_title' => $getCandidateDocumentType[3]['document_type_id'],
                                    'document_path' => $filepath,
                                    'extension' => $extension
                            ]);

                        }
                        else{
                            $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
                            $setCandidateDocuments = Http::asForm()->post($url, [
                                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                    'candidate_id' => session('candidate_id'),
                                    'document_title' => $getCandidateDocumentType[3]['document_type_id'],
                                    'document_path' => $filepath,
                                    'extension' => $extension
                            ]);
                        }
                    }
                    else{
                        $url = "http://45.79.124.136/Deliveryboy/API/V1/setCandidateDocuments";
                        $setCandidateDocuments = Http::asForm()->post($url, [
                                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                'candidate_id' => session('candidate_id'),
                                'document_title' => $getCandidateDocumentType[3]['document_type_id'],
                                'document_path' => $filepath,
                                'extension' => $extension
                        ]);

                    }

                    if($setCandidateDocuments->json() != ''){
                        return redirect()->back()->with('success','Driving Licence is uploaded successfully!');
                    }
                    else{
                        return redirect()->back()->with('error','Failed to upload Driving Licence! Please try again');
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

    public function printDrivingLicence()
    {
        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/getDeliveryDetail";
            $getCandidateDetail = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
            ]);

            $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocuments";
            $getCandidateDocuments = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'candidate_id' => session('candidate_id'),
            ]);

            $url = "http://45.79.124.136/Deliveryboy/API/V1/getCandidateDocumentType";
            $getCandidateDocumentType = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'candidate_id' => session('candidate_id'),
            ]);

            if($getCandidateDocuments->json() != ''){
                $count = count($getCandidateDocuments->json());
            }else{
                $count = 0;
                $document_path = '';
            }

            for($i=0; $i<$count;$i++){
                if($getCandidateDocumentType[3]['document_type_id'] == $getCandidateDocuments[$i]['document_title']){
                    $document_path = $getCandidateDocuments[$i]['document_path'];
                    break;                    
                }
                else{
                    $document_path = '';
                }
            }  
            if($document_path != ''){
                return view('print_file.print_file',compact('document_path','getCandidateDetail'));
            }
            else{
                return back()->with('error','No Driving Licence is available to print');
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
