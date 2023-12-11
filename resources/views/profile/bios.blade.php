@extends('profile.profile')




    @section('profileContetn')



        {{-- Bios Edit  Form --}}
        <form method="post" action="{{ route('profile.boisEdit') }}">
            @csrf
            @method('patch')
            <div class="d-flex flex-column justify-content-start align-items-center">
                <h2>Hi {{ Auth::user()->name }}</h2>
                <p>Please update your bois. * are required</p>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="father" :value="__('Father\'s name')" class="mb-1" />
                    <x-text-input id="father" name="father" type="text" class="mt-1 block w-full" :value="old('father', $user->bios->father)" required autocomplete="father" />
                    <x-input-error class="mt-2" :messages="$errors->get('father')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="fmobile" :value="__('Father\'s Mobile Number')" class="mb-1" />
                    <x-text-input id="fmobile" name="fmobile" type="text" class="mt-1 block w-full" :value="old('fmobile', $user->bios->fmobile)" required autocomplete="fmobile" placeholder="eg: 019........" />
                    <x-input-error class="mt-2" :messages="$errors->get('fmobile')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="mother" :value="__('Mother\'s Name')" class="mb-1" />
                    <x-text-input id="mother" name="mother" type="text" class="mt-1 block w-full" :value="old('mother', $user->bios->mother)" required autocomplete="mother" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('mother')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="mmobile" :value="__('Mother\'s Mobile Number')" class="mb-1" />
                    <x-text-input id="mmobile" name="mmobile" type="text" class="mt-1 block w-full" :value="old('mmobile', $user->bios->mmobile)" required autocomplete="mmobile" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('mmobile')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="date_of_birth" :value="__('Date of Birth')" class="mb-1" />
                    <x-text-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full" :value="old('date_of_birth', $user->bios->date_of_birth)" required autocomplete="date_of_birth" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('date_of_birth')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="nid_dob" :value="__('Nid or Birth Certificate Number')" class="mb-1" />
                    <x-text-input id="nid_dob" name="nid_dob" type="number" class="mt-1 block w-full" :value="old('nid_dob', $user->bios->nid_dob)" required autocomplete="nid_dob" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('nid_dob')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="height" :value="__('Height (in Inch)')" class="mb-1" />
                    <x-text-input id="height" name="height" type="text" class="mt-1 block w-full" :value="old('height', $user->bios->height)" required autocomplete="height" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('height')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="weight" :value="__('Weight (in KG)')" class="mb-1" />
                    <x-text-input id="weight" name="weight" type="text" class="mt-1 block w-full" :value="old('weight', $user->bios->weight)" required autocomplete="weight" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('weight')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="blood" :value="__('Blood Group')" class="mb-1" />
                    <x-select id="blood" class="block w-full" name="blood" required>
                        <option value="" selected hidden>{{ __('Select Your Blood Group') }}</option>
                        <option value="A+">A positive (A+)</option>
                        <option value="A-">A negative (A-)</option>
                        <option value="B+">B positive (B+)</option>
                        <option value="B-">B negative (B-)</option>
                        <option value="O+">O positive (O+)</option>
                        <option value="O-">O negative (O-)</option>
                        <option value="AB+">AB positive (AB+)</option>
                        <option value="AB-">AB negative (AB-)</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('blood')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="emergency" :value="__('Emergency Contact Person')" class="mb-1" />
                    <x-text-input id="emergency" name="emergency" type="text" class="mt-1 block w-full" :value="old('emergency', $user->bios->emergency)" required autocomplete="emergency" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('emergency')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="emobile" :value="__('Emergency Contact Person\'s Mobile')" class="mb-1" />
                    <x-text-input id="emobile" name="emobile" type="text" class="mt-1 block w-full" :value="old('emobile', $user->bios->emobile)" required autocomplete="emobile" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('emobile')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="religion" :value="__('Religion')" class="mb-1" />
                    <x-select id="religion" class="block w-full" name="religion" required>
                        <option value="" selected hidden>{{ __('Select Your Religion') }}</option>
                        <option value="A+">Islam</option>
                        <option value="B+">Hinduism</option>
                        <option value="B-">Buddhism</option>
                        <option value="O+">Christianity</option>
                        <option value="O-">Others</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('religion')" />
                </div>



                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <h4>Present Address</h4>
                </div> 
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pe_division" :value="__('Division')" class="mb-1" />
                    <x-select id="pe_division" class="block w-full" name="pe_division" onchange="divisionsList();" required>
                        <option value="" selected hidden>{{ __('Select Your Division') }}</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_division')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pe_distric" :value="__('Distric')" class="mb-1" />
                    <x-select id="pe_distric" class="block w-full" name="pe_distric" onchange="thanaList();" required>
                        <option value="" selected hidden>{{ __('Select Your Distric') }}</option>
                        
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_distric')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pe_thana" :value="__('Thana')" class="mb-1" />
                    <x-select id="pe_thana" class="block w-full" name="pe_thana" required>
                        <option value="" selected hidden>{{ __('Select Your Thana') }}</option>
                        
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_thana')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pe_postoffice" :value="__('Post Office')" class="mb-1" />
                    <x-text-input id="pe_postoffice" name="pe_postoffice" type="text" class="mt-1 block w-full" :value="old('pe_postoffice', $user->bios->pe_postoffice)" required autocomplete="pe_postoffice" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_postoffice')" />
                </div>
                <div class="col-lg-8 col-md-12 mb-3 bios_input">
                    <x-input-label for="pe_village" :value="__('Village/Woard/House/Road')" class="mb-1" />
                    <x-text-input id="pe_village" name="pe_village" type="text" class="mt-1 block w-full" :value="old('pe_village', $user->bios->pe_village)" required autocomplete="pe_village" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_village')" />
                </div>



                <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                    <h4>Perminent Address</h4>
                </div> 
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pa_division" :value="__('Division')" class="mb-1" />
                    <x-select id="pa_division" class="block w-full" name="pa_division" required>
                        <option value="" selected hidden>{{ __('Select Your Division') }}</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Chattogram">Chattogram</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Sylhet">Sylhet</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pa_division')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pa_distric" :value="__('Distric')" class="mb-1" />
                    <x-select id="pa_distric" class="block w-full" name="pa_distric" required>
                        <option value="" selected hidden>{{ __('Select Your Distric') }}</option>
                        
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pa_distric')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pa_thana" :value="__('Thana')" class="mb-1" />
                    <x-select id="pa_thana" class="block w-full" name="pa_thana" required>
                        <option value="" selected hidden>{{ __('Select Your Thana') }}</option>
                        
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('pa_thana')" />
                </div>
                <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="pa_postoffice" :value="__('Post Office')" class="mb-1" />
                    <x-text-input id="pa_postoffice" name="pa_postoffice" type="text" class="mt-1 block w-full" :value="old('pa_postoffice', $user->bios->pa_postoffice)" required autocomplete="pa_postoffice" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('pa_postoffice')" />
                </div>
                <div class="col-lg-8 col-md-12 mb-3 bios_input">
                    <x-input-label for="pa_village" :value="__('Village/Woard/House/Road')" class="mb-1" />
                    <x-text-input id="pa_village" name="pa_village" type="text" class="mt-1 block w-full" :value="old('pa_village', $user->bios->pa_village)" required autocomplete="pa_village" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('pe_village')" />
                </div>
                


                {{-- <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="" :value="__('')" class="mb-1" />
                    <x-select id="" class="block w-full" name="" required>
                        <option value="" selected hidden>{{ __('Select Your ') }}</option>
                        <option value="A+">Islam</option>
                        <option value="B+">Hinduism</option>
                        <option value="B-">Buddhism</option>
                        <option value="O+">Christianity</option>
                        <option value="O-">Others</option>
                    </x-select>
                    <x-input-error class="mt-2" :messages="$errors->get('')" />
                </div> --}}

                {{-- <div class="col-lg-4 col-md-6 mb-3 bios_input">
                    <x-input-label for="" :value="__('')" class="mb-1" />
                    <x-text-input id="" name="" type="text" class="mt-1 block w-full" :value="old('', $user->bios->)" required autocomplete="" placeholder=""/>
                    <x-input-error class="mt-2" :messages="$errors->get('')" />
                </div> --}}
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </form>



        @section('mainScripts')
            @parent

            <script src="{{ asset('js/distric.js') }}"></script>
        @endsection
    @endsection

