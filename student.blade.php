@extends('layouts.mainapp')

@section('content')
<section class="pt-5 bg-section-secondary">
    <div class=container>
        <div class="row justify-content-center">
            <div class=col-lg-9>
                <div class="row align-items-center">
                    <div class=col><span class=surtitle>Your account</span>
                        <h1 class="h2 mb-0">Complete Your Application</h1>
                    </div>
                </div>
                <div class="row align-items-center mt-4">
                    <div class=col>
                        <ul class="nav nav-tabs overflow-x">
                            <li class="nav-item"><a href="#" class="nav-link active">Student Informattion</a></li>
                            <li class=nav-item><a href="settings.html" class="nav-link">Parent Details</a></li>
                            <li class=nav-item><a href="billing.html" class=nav-link>Details Of Local Guardian</a></li>
                            <li class=nav-item><a href=cards.html class=nav-link>Upload Documents</a></li>
                            <li class=nav-item><a href=notifications.html class=nav-link>FEE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="slice slice-sm bg-section-secondary" x-data="{ dob: '', age:'' }">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <h5 class=mb-3>General information</h5>
                            <form method="POST" action="{{route('student.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">Surname :
                                            </label> <input
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                name="last_name" type="text" placeholder="Enter your surname name">
                                        </div>
                                        @error('last_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">First Name :
                                            </label> <input class="form-control" name="first_name" type="text"
                                                placeholder="Enter your first name"></div>
                                        @error('first_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">Middle Name :
                                            </label> <input class="form-control" name="middle_name" type="text"
                                                placeholder="Enter your middle name"></div>
                                        @error('middle_name')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class=form-group><label class="form-control-label">Class in which
                                                admission sought :</label> <input class="form-control" name="class"
                                                type="text" placeholder="Class"></div>
                                        @error('class')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-control-label d-block">Gender :</label>
                                        <div class="btn-group-toggle d-flex mt-2" data-toggle="buttons">
                                            <label class="btn btn-lg btn-neutral btn-icon flex-fill mr-sm-4 active">
                                                <i class="fas fa-mars"></i>
                                                <input type="radio" name="billing_entity" name="gender" value="male"
                                                    id="male">Male
                                            </label>
                                            <label class="btn btn-lg btn-neutral flex-fill ml-sm-4">
                                                <i class="fas fa-venus"></i>
                                                <input type="radio" name="billing_entity" name="gender" value="female"
                                                    id="female">Female
                                            </label>
                                        </div>
                                        @error('gender')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">Birthday :</label>
                                            <input type="text" class="form-control" data-toggle="date"
                                                placeholder="Select your birth date" x-model="dob" name="dob"
                                                @blur=' $refs.age.value=moment().diff(dob,"years")'></div>
                                        @error('dob')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">Age : </label>
                                            <input class="form-control" disabled type="number" name="age" minlength="0"
                                                maxlength="100" x-ref="age" placeholder="Age" required></div>
                                        @error('age')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group"><label class="form-control-label">Place of Birth :
                                            </label> <input class="form-control" name="place_of_birth" type="text"
                                                placeholder="Birthplace"></div>
                                        @error('place_of_birth')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Blood Group : </label>
                                            <select class="custom-select" name="blood_group">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                            </select>
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Nationality : </label>
                                            <select class="form-control" data-toggle="select" title="Country"
                                                data-live-search="true" name="nationality"
                                                data-live-search-placeholder="Country">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                @foreach ($country->all()->pluck('name.common')->toArray() as $item)
                                                <option>{{$item}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Religion :</label>
                                            <select class="form-control" data-toggle="select" title="Country"
                                                data-live-search="true" name="religion"
                                                data-live-search-placeholder="Country">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                <option value="Hinduism">Hinduism</option>
                                                <option value="African Traditional & Diasporic">African Traditional
                                                    & Diasporic</option>
                                                <option value="Agnostic">Agnostic</option>
                                                <option value="Atheist">Atheist</option>
                                                <option value="Baha'i">Baha'i</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Cao Dai">Cao Dai</option>
                                                <option value="Chinese traditional religion">Chinese traditional
                                                    religion</option>
                                                <option value="Christianity">Christianity</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Jainism">Jainism</option>
                                                <option value="Juche">Juche</option>
                                                <option value="Judaism">Judaism</option>
                                                <option value="Neo-Paganism">Neo-Paganism</option>
                                                <option value="Nonreligious">Nonreligious</option>
                                                <option value="Rastafarianism">Rastafarianism</option>
                                                <option value="Secular">Secular</option>
                                                <option value="Shinto">Shinto</option>
                                                <option value="Sikhism">Sikhism</option>
                                                <option value="Spiritism">Spiritism</option>
                                                <option value="Tenrikyo">Tenrikyo</option>
                                                <option value="Unitarian-Universalism">Unitarian-Universalism
                                                </option>
                                                <option value="Zoroastrianism">Zoroastrianism</option>
                                                <option value="primal-indigenous">primal-indigenous</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-control-label">Mother
                                                Tongue:</label> <input class="form-control" name="mother_tongue"
                                                type="text" placeholder="Mother Tongue"></div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Caste: </label>
                                            <select class="custom-select" name="caste">
                                                <option disabled="disabled" selected="selected" required>Select option
                                                </option>
                                                <option>OBC</option>
                                                <option>SC</option>
                                                <option>ST</option>
                                                <option>NT</option>
                                                <option>VJ</option>
                                                <option>SBC</option>
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-control-label">Student's
                                                Aadhar Number :</label> <input class="form-control" name="aadhar"
                                                type="text" placeholder="Enter Aadhar number"></div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Minority : </label>
                                            <select class="custom-select" name="minority">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                <option value="1">OBC</option>
                                                <option value="2">SC</option>
                                                <option value="3">ST</option>
                                                <option value="4">NT</option>
                                                <option value="5">VJ</option>
                                                <option value="6">SBC</option>
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class='row'>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Only Child : </label>
                                                <select class="custom-select" wire:model="child" name="only_child">
                                                    <option disabled="disabled" selected="selected">Select option
                                                    </option>
                                                    <option value="1">Yes</option>
                                                    <option value="2">No</option>
                                                </select>
                                            </div>
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        @if ($child=="2")
                                        <div class="col-md-12">
                                            <div class="form-group"><label class="form-control-label">Number of Brother
                                                    / Sister studying in this School
                                                </label> <input class="form-control" name="sibling_count"
                                                    wire:model="count" type="text" placeholder="Enter number">
                                            </div>
                                            @error('email')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        @endif

                                        @for ($i = 0; $i < $count; $i++) <div class="col-md-6">
                                            <div class="form-group"><label class="form-control-label">Name :
                                                </label><input class="form-control" type="text" name="sibling_name[]"
                                                    required placeholder="Name">
                                            </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group"><label class="form-control-label">Class :
                                            </label> <input class="form-control" type="text" name="sibling_class[]"
                                                required placeholder="Class">

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group"><label class="form-control-label">Section :
                                            </label> <input class="form-control" type="text" name="sibling_section[]"
                                                required placeholder="Section">

                                        </div>
                                    </div>
                                    @endfor


                                    <div class="col-md-12">
                                        <div class="form-group"><label class="form-control-label">Playgroup /
                                                Nursery Previously attended :
                                            </label> <input class="form-control" name="attended_class" type="text"
                                                placeholder="Enter Name"></div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Availing School Transportation :
                                            </label>
                                            <select class="custom-select" wire:model="open" name="transportation">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                <option value="1">Yes</option>
                                                <option value="2">No</option>
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @if($open==1)
                                    <div class="col-md-6">
                                        <div class="form-group"><label class="form-control-label">Area :
                                            </label> <input class="form-control" name="area" type="text"
                                                placeholder="Enter Area"></div>
                                    </div>
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    @endif

                                </div>
                                <hr>
                                <h5 class=mb-3>Full Residential Address</h5>

                                <div class="row align-items-center">
                                    <div class="col-sm-12">
                                        <div class=form-group><label class=form-control-label>Address :</label>
                                            <textarea class=form-control type=text name="address"
                                                placeholder="Enter your home address"></textarea>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group"><label class="form-control-label">Landmark :</label>
                                            <input class="form-control" type="text" placeholder="Enter Landmark">
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6" wire:ignore>
                                        <div class="form-group">
                                            <label class="form-control-label">Country : </label>
                                            <select class="form-control" name="country" data-toggle="select"
                                                title="Country" data-live-search="true"
                                                data-live-search-placeholder="Country">
                                                <option disabled="disabled" selected="selected">Select option
                                                </option>
                                                @foreach ($countries as $item)
                                                <option value="{{$item}}">{{$item}}</option>
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label class="form-control-label">Pin-Code :</label>
                                            <input class="form-control" wire:model='pincode' type="text" name="pincode"
                                                placeholder="Enter Your Pin-Code">
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label">State :</label>
                                            <input class="form-control" type="text" disabled name="district"
                                                placeholder="Enter Your District" value="{{$state}}">
                                            <option disabled="disabled" selected="selected">
                                            </option>
                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label">District :</label>
                                            <input class="form-control" type="text" disabled name="district"
                                                placeholder="Enter Your District" value="{{$district}}">

                                            </select>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-control-label">City :</label>
                                            <input class="form-control" type="text" name="city"
                                                placeholder="Enter Your City" value={{$city}}>
                                        </div>
                                        @error('email')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                        </div>


                        <div class="mt-3">
                            <button type="sumbit" class="btn btn-sm btn-primary" onclick="confirmation()">Save</button>
                            <button type="reset" class="btn btn-sm btn-danger" onclick="confor()">Reset</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

</div>
</div>
@endsection

@push('js')

@endpush