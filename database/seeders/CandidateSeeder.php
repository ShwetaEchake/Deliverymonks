<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Candidate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;


class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // for($i = 1;$i <= 1;$i++){
        //     $candidate = new Candidate;
        //     $name = $faker->name;
        //     $candidate->name = $name;
        //     $email = $faker->email;
        //     $candidate->email = $email;
        //     $candidate->password = Hash::make('123456');
        //     $foldername = rand(10000,99999)."_".$name;
        //     File::makeDirectory('public/'.$foldername);
        //     $candidate->folder_name = $foldername;
        //     $candidate->save();
        // }
        $faker = Faker::create();
        for($i = 1;$i <= 500;$i++){
            $phone = $faker->numerify('##########');
            $language = "English";
            $name = $faker->name;
            $interest = ["Document Delivery","Food Delivery","Parcel Delivery"];
            $city = $faker->city;
            $address = $faker->address;
            $zip = $faker->zip;
            $vehicle = "bike";

            $url = "http://45.79.124.136/Deliveryboy/API/V1/setUserDetail";
            $getJobs = Http::asForm()->post($url, [
                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                'phone' => $phone,
            ]);

            $url = "http://45.79.124.136/Deliveryboy/API/V1/setDeliveryDetail";
            $response = Http::asForm()->post($url, [
                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                    'candidate_id' => session('candidate_id'),
                    'language' => $language,
                    'vehicle_selection' => $vehicle,
                    // Storing array elemnent by separating them with comma(,)
                    'intrested_in' => implode(",",$interest),
                    'citizenship' => 1,
                    'city_id' => $city,
                    // 'location' => $this->location,
                    'address' => $address,
                    'zipcode' => $zip,
                    'name' => $name,
            ]);
        }
    }
}
