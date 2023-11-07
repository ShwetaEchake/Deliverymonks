<?php

namespace App\Http\Livewire;

use App\Models\Documents;
use App\Models\PersonDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{ 
    use WithFileUploads;

    public $job_id;
    public $category_id;
    public $location_id;
    public $client_id;
    public $enquiry_id;

    public $language;
    public $vehicle;
    public $interest = [];
    public $country;
    public $city;
    public $location;
    public $address;
    public $zip;
    public $name;
    public $gender;
    public $date_of_birth;
    public $cv;
    public $terms;

    public $totalSteps = 5;
    public $currentStep = 0;


    public function mount($job_id,$category_id,$location_id,$client_id,$enquiry_id){
        $this->job_id = $job_id;
        $this->category_id = $category_id;
        $this->location_id = $location_id;
        $this->client_id = $client_id;
        $this->enquiry_id = $enquiry_id;
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'language' => 'required',
            ]);
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'vehicle' => 'required'
            ]);
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'interest' => 'required|array|min:1|max:5'
            ]);
        }
        elseif($this->currentStep == 4){
            $this->validate([
                'city' => 'required',
                'location' => 'required',
                'address' => 'required',
                'zip' => 'required',
            ]);
        }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 5){
            $this->validate([
                'name' => 'required|string',
                'gender' => 'required',
                'date_of_birth' =>'required|date|before:18 years ago',
            ]);
        }
        $age = Carbon::parse($this->date_of_birth)->diff(Carbon::now())->y;

        try{
            $url = "http://45.79.124.136/Deliveryboy/API/V1/setDeliveryDetail";
            $response = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
                    'language' => $this->language,
                    'vehicle_selection' => $this->vehicle,
                    // Storing array elemnent by separating them with comma(,)
                    'intrested_in' => implode(",",$this->interest),
                    'citizenship' => 1,
                    'city_id' => $this->city,
                    'location' => $this->location,
                    'address' => $this->address,
                    'zipcode' => $this->zip,
                    'name' => $this->name,
                    'gender' => $this->gender,
                    'date_of_birth' => $this->date_of_birth,
                    'age' => $age,
            ]);

            if($response != ''){
                return redirect('profile?job_id='.$this->job_id.'?category_id='.$this->category_id.'?location_id='.$this->location_id.'?client_id='.$this->client_id);
            }
        }catch(Exception $e){
            echo '<html><head><title>Error 404</title><meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge"></head>
            <body>
            <div style="top:5%;margin-left:10px;margin-right:10px;">
            <div style="background-color:pink;">
                <h1 style="text-align:center;font-size:60px;">404</h1>
                <p style="text-align:center;font-size:25px;"><span style="color:red;">Oops!</span> Something went wrong.</p>
                <p style="text-align:center;font-size:20px;">These might be tha possible reasons.</p>
                <ul style="font-size:18px;"><li>You are not connected to internet! Try connecting to internet.</li><li>We are not able to communicate with server! Please try again after some time.</li></ul>
            </div>
            </div>
            </body></html>';
        }
              

    }
    
}
