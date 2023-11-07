<div>
    {{-- toastr css --}}
    <link href="{{ asset('bootstrap/css/toastr.min.css') }}" rel="stylesheet" />    
    {{-- form --}}
    <section class="vh-100 shadow-lg bg-light">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <a href="{{ url('/logout') }}" class="button mt-2">
                    <button class="btn btn-outline-danger px-4 d-block float-end"><i class="fa fa-power-off"></i> Logout</button>
                  </a>
                  @if ($currentStep == 1)
                  <ul class="text-success mt-2">
                    <li>You need to fill out this form.</li>
                    <li>If you are not applying for delivery person's job, kindly don’t take serious and select others in options.</li>
                  </ul>
                  <p class="text-danger ml-2"><strong>Note:</strong> We collect this information for further processing.</p>
                  @endif
                <div class="col-md-9 col-lg-6 col-xl-5">
                    
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-5 offset-xl-1">
            <form wire:submit.prevent="register">

                {{-- STEP 1 --}}

                @if ($currentStep == 1)
                    
             
                <div class="step-one">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 1/5 - Language</div>
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Choose Your Language</h3>
                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="radio" class="radiobtn" wire:model="language" value="English">
                                    <img src="{{ asset('uploads/en.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        English
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="language" value="Hindi">
                                    <img src="{{ asset('uploads/hi.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Hindi
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="language" value="Marathi">
                                    <img src="{{ asset('uploads/hi.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Marathi
                                    </p>
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
        
                {{-- STEP 2 --}}
        
                @if ($currentStep == 2)
                    
               
                <div class="step-two">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 2/5 - Vehicle</div>
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Choose Your Vehicle</h3>
                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="radio" class="radiobtn" wire:model="vehicle" value="truck">
                                    <img src="{{ asset('uploads/truck.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Truck
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="vehicle" value="bike">
                                    <img src="{{ asset('uploads/bike.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Bike
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="vehicle" value="cycle">
                                    <img src="{{ asset('uploads/cycle.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Cycle
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="vehicle" value="trolley">
                                    <img src="{{ asset('uploads/trolley.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Trolley
                                    </p>
                                  </label>
                                  <label>
                                    <input type="radio" class="radiobtn" wire:model="vehicle" value="walk">
                                    <img src="{{ asset('uploads/walk.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Walk
                                    </p>
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>
        
                @endif
                {{-- STEP 3 --}}
        
                @if ($currentStep == 3)
                    
            
                <div class="step-three">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 3/5 - Interest In</div>
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Choose Your Interest</h3>
                            <div class="row mt-3 justify-content-center">
                                <label>
                                    <input type="checkbox" class="chkbox" wire:model="interest" value="Document Delivery">
                                    <img src="{{ asset('uploads/document.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Document
                                    </p>
                                  </label>
                                  <label>
                                    <input type="checkbox" class="chkbox" wire:model="interest" value="Food Delivery">
                                    <img src="{{ asset('uploads/food.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Food
                                    </p>
                                  </label>
                                  <label>
                                    <input type="checkbox" class="chkbox" wire:model="interest" value="Grocery Delivery">
                                    <img src="{{ asset('uploads/grocery.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Grocery
                                    </p>
                                  </label>
                                  <label>
                                    <input type="checkbox" class="chkbox" wire:model="interest" value="Parcel Delivery">
                                    <img src="{{ asset('uploads/parcel.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Parcel
                                    </p>
                                  </label>
                                  <label>
                                    <input type="checkbox" class="chkbox" wire:model="interest" value="Medicine Delivery">
                                    <img src="{{ asset('uploads/medicine.png') }}">
                                    <p class="text-center font-weight-bold mb-1">
                                        Medicine
                                    </p>
                                  </label>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
        
                {{-- STEP 4 --}}
                @if ($currentStep == 4)
            
                <div class="step-four">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 4/5 - Address</div>
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Enter Your Address</h3>
                            <div class="container">
                                <div class="row mt-3">
                                    <label class="font-weight-bold">Select City:</label> 
                                    <select wire:model="city" class="form-control">
                                        <option value="" selected>Select City</option>
                                        @php
                                            $url = "http://45.79.124.136/Deliveryboy/API/V1/getLocations";
                                            $city = Http::asForm()->post($url, [
                                                'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                                'candidate_id' => session('candidate_id'),
                                            ]);
                                            $city_count = count($city->json());
                                        @endphp
                                        @for ($i = 0; $i < $city_count; $i++)
                                            <option value="{{ $city[$i]['location_id']; }}">{{ $city[$i]['location_name']; }}</option>
                                        @endfor
                                    </select>
                                    <label class="font-weight-bold">Select Location:</label> 
                                    @if ($this->city != '')
                                        <select wire:model="location" class="form-control">
                                            <option value="" selected>Select Location</option>
                                            @php
                                                $url = "http://45.79.124.136/Deliveryboy/API/V1/getZones";
                                                $location = Http::asForm()->post($url, [
                                                    'ACCESSKEY' => 'PdnQUTJ6ubhGIcvkDgbOHgncYM0ALZB71Mi6tZrUfmdKdNAwl6',
                                                    'candidate_id' => session('candidate_id'),
                                                    'location_id' => $this->city,
                                                ]);
                                                $location_count = count($location->json());
                                            @endphp
                                            @for ($i = 0; $i < $location_count; $i++)
                                                <option value="{{ $location[$i]['zone_name']; }}">{{ $location[$i]['zone_name']; }}</option>
                                            @endfor
                                        </select>
                                    @else
                                        <select wire:model="location" class="form-control">
                                            <option value="" selected>Select Location</option>
                                        </select>
                                    @endif
                                    <label class="font-weight-bold">Address</label>
                                    <input type="text" wire:model="address" class="form-control" placeholder="Enter Your Address">
                                    <label class="font-weight-bold">Zip</label>
                                    <input type="text" wire:model="zip" class="form-control" placeholder="Zip">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                @endif
        
        
                {{-- STEP 5 --}}
                @if ($currentStep == 5)
                    
            
                <div class="step-four">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">STEP 5/5 - Personal Detail</div>
                        <div class="card-body">
                            <h3 class="text-center text-white font-weight-bold">Enter Your Detail</h3>
                            <div class="row gx-4 gx-lg-5 row-cols-3 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                <div class="col-sm-4">
                                    <label>
                                        <input type="radio" class="radiobtn" wire:model="gender" name="gender" id="gender" value="Male">
                                        <img src="{{ asset('uploads/male.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Male
                                        </p>
                                    </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>
                                        <input type="radio" class="radiobtn" wire:model="gender" name="gender" id="gender" value="Female">
                                        <img src="{{ asset('uploads/female.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Female
                                        </p>
                                    </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>
                                        <input type="radio" class="radiobtn" wire:model="gender" name="gender" id="gender" value="Other">
                                        <img src="{{ asset('uploads/transgender.png') }}" class="rounded mx-auto d-block" style="height: 50px; width: 50px;">
                                        <p class="text-center font-weight-bold mb-1">
                                            Other
                                        </p>
                                    </label>
                                </div>
                                </div>
                                <hr class="bg-danger">
                                <div class="container mt-3">
                                <div class="row">
                                    <br>
                                    <label class="fieldlabels">Full Name:</label> 
                                    <input type="text" wire:model="name" class="form-control" placeholder="Enter Your Name">
                                    <label class="fieldlabels">Date of Birth:</label> 
                                    <input type="date" wire:model="date_of_birth" class="form-control" placeholder="Enter Your Age">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                @endif
        
                <div class="action-buttons d-flex justify-content-between mb-3 pt-2 pb-2" style="  background: linear-gradient(90deg,pink,lightblue);">
        
                   @if ($currentStep == 1)
                       <div></div>
                   @endif
        
                   @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                       <button type="button" class="btn btn-md btn-secondary w-50 ml-3 mr-1" wire:click="decreaseStep()">Back</button>
                   @endif
                   
                   @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                       <button type="button" class="btn btn-md btn-warning w-50 ml-1 mr-3" id="next" wire:click="increaseStep()">Next</button>
                   @endif
                   
                   @if ($currentStep == 5)
                        <button type="submit" class="btn btn-md btn-success w-50 mr-3">Submit</button>
                   @endif
                       
                      
                </div>
        
            </form>

        </div>
      </div>
    </div>
    </section>

{{-- jQuery js --}}
<script src="{{ asset('bootstrap/js/jquery.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.radiobtn').on('click', function(){
            var selected = $(this).val();
            console.log(selected);
        });
        $('#next').on('click', function(){
            console.log("clicked");
        });
    });
</script>
{{-- toastr js --}}
<script src="{{ asset('bootstrap/js/toastr.min.js') }}"></script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
          toastr.error('{{ $error }}')
        </script>
    @endforeach
@endif
        
@if (session('success'))
      <script>
        toastr.success('{{ session('success') }}')
      </script>
@endif
  
@if (session('error'))
      <script>
        toastr.error('{{ session('error') }}')
      </script>
@endif

</div>