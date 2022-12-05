@extends('layouts.master')

@section('content')
    <div class="d-flex align-items-baseline justify-content-between">

        <!-- Title -->
        <h1 class="h2">
            Account
        </h1>

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-4 col-xxl-3">

            <!-- Card -->
            <div class="card border-0 sticky-md-top top-10px">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <div class="avatar avatar-xxl avatar-circle mb-5">
                            <label class="d-block cursor-pointer">
                                <span
                                    class="position-absolute bottom-0 end-0 m-0 bg-primary text-white w-30px h-30px rounded-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14"
                                        width="14">
                                        <g>
                                            <path
                                                d="M2.65,16.4a.5.5,0,0,0-.49-.13.52.52,0,0,0-.35.38L.39,23a.51.51,0,0,0,.6.6l6.36-1.42a.52.52,0,0,0,.38-.35.5.5,0,0,0-.13-.49Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M17.85,7.21l-11,11a.24.24,0,0,0,0,.35l1.77,1.77a.5.5,0,0,0,.71,0L20,9.68A.48.48,0,0,0,20,9L18.21,7.21A.25.25,0,0,0,17.85,7.21Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M16.79,5.79,15,4a.48.48,0,0,0-.7,0L3.71,14.63a.51.51,0,0,0,0,.71l1.77,1.77a.24.24,0,0,0,.35,0l11-11A.25.25,0,0,0,16.79,5.79Z"
                                                style="fill: currentColor" />
                                            <path
                                                d="M22.45,1.55a4,4,0,0,0-5.66,0l-.71.71a.51.51,0,0,0,0,.71l5,4.95a.52.52,0,0,0,.71,0l.71-.71A4,4,0,0,0,22.45,1.55Z"
                                                style="fill: currentColor" />
                                        </g>
                                    </svg>
                                </span>
                                <input type="file" name="avatar" id="avatar" class="d-none"
                                    accept="image/jpeg, image/png">
                            </label>
                            <img src="{{ isset($personalData->photo) ? $personalData->photo : 'https://via.placeholder.com/30x30' }}"
                                alt="Profile picture" class="avatar-img" id="avatar_preview" width="112" height="112">
                        </div>

                        <h3 class="mb-0">
                            {{ isset($personalData->name) ? $personalData->name : '[Nama Belum Di Set]' }}
                        </h3>
                        <span
                            class="small text-secondary fw-semibold">{{ isset($personalData->job) ? $personalData->job : '[Job Title Belum Di Set]' }}</span>
                    </div>

                    <!-- Divider -->
                    <hr class="mb-0">
                </div>

                <ul class="scrollspy mb-5" id="account" data-scrollspy='{"offset": "30"}'>
                    <li class="active">
                        <a href="#basicInformationSection" class="d-flex align-items-center py-3">
                            <svg viewBox="0 0 24 24" height="14" width="14" class="me-3"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.750 6.000 A5.250 5.250 0 1 0 17.250 6.000 A5.250 5.250 0 1 0 6.750 6.000 Z"
                                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" />
                                <path d="M2.25,23.25a9.75,9.75,0,0,1,19.5,0" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>

                            Basic information
                        </a>
                    </li>
                </ul>

                <div class="card-footer text-center">

                    <!-- Button -->
                    <a href="user.html" class="btn btn-secondary">View Public Profile</a>
                </div>
            </div>
        </div>

        <div class="col">
            <form action="{{ route('pd.update') }}" enctype="multipart/form-data" method="post">
                @csrf
                <!-- Card -->
                <input type="text" name="avatar_hidden" id="avatar_hidden" class="d-none">
                <input type="text" name="avatar_hidden_type" id="avatar_hidden_type" class="d-none">
                <div class="card border-0 scroll-mt-3" id="basicInformationSection">
                    <div class="card-header">
                        <h2 class="h3 mb-0">Basic information</h2>
                    </div>

                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="fullName" class="col-form-label">Full Name</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" name="name" id="fullName"
                                    value="{{ isset($personalData->name) ? $personalData->name : '' }}">
                                <div class="invalid-feedback">Please add your full name</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="phone" class="col-form-label">Phone</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    value="{{ isset($personalData->phone) ? $personalData->phone : '' }}">
                                <div class="invalid-feedback">Please add your phone number</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="emailAddress" class="col-form-label">Email address</label>
                            </div>

                            <div class="col-lg">
                                <input type="email" class="form-control" name="email" id="emailAddress"
                                    value="{{ isset($personalData->email) ? $personalData->email : '' }}">
                                <div class="invalid-feedback">Please add your email address</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="addressLine1" class="col-form-label">Address</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" name="address" class="form-control" id="addressLine1"
                                    value="{{ isset($personalData->address) ? $personalData->address : '' }}">
                                <div class="invalid-feedback">Please add an address</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="overview" class="col-form-label">Overview</label>
                            </div>

                            <div class="col-lg">
                                <textarea class="form-control" name="introduction" id="overview" rows="4">{{ isset($personalData->introduction) ? $personalData->introduction : '' }}</textarea>
                                <div class="invalid-feedback">Please tell something about yourself</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="job" class="col-form-label">Job Title</label>
                            </div>

                            <div class="col-lg">
                                <input type="text" class="form-control" name="job" id="job"
                                    value="{{ isset($personalData->job) ? $personalData->job : '' }}">
                                <div class="invalid-feedback">Please add your job title</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="row mb-4">
                            <div class="col-lg-3">
                                <label for="years_experience" class="col-form-label">Years of Experience</label>
                            </div>

                            <div class="col-lg">
                                <input type="number" class="form-control" name="years_experience" id="years_experience"
                                    value="{{ isset($personalData->years_experience) ? $personalData->years_experience : '' }}">
                                <div class="invalid-feedback">Please add your years experience</div>
                            </div>
                        </div> <!-- / .row -->

                        <div class="d-flex justify-content-end mt-5">

                            <!-- Button -->
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- / .row -->
@endsection



@push('scriptAdd')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        // $('#avatar').blur(function() {
        //     console.log('tes');
        // if (!$(this).val()) {
        //     $(this).parents('p').addClass('warning');
        // }
        // });
        if (document.getElementById("avatar").files.length == 0) {
            console.log("no files selected");
        }
        // if ($('#avatar').val() != undefined || $('#avatar').val() != null) {
        //     console.log($('#avatar').val());
        // }

        function checkFile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#avatar_preview').attr('src', e.target.result);
                    $('#avatar_hidden').val(e.target.result);
                    $('#avatar_hidden_type').val(input.files[0].type);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function() {
            checkFile(this);
        });
    </script>
@endpush
