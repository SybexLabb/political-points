@extends('layouts.main')
@section('content')
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0">WEB CMS</h4>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">System</li>
                            <li class="breadcrumb-item active"><a href="#">Configuration</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->
            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Home</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('cms.generator') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">About Us Section</h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <label
                                                            class="col-md-12 col-sm-12 col-form-label">{{ getCMS('home_section1_image', 'name') }}</label>
                                                    </div>
                                                    <img class="banner-image"
                                                        src="{{ asset(getCMS('home_section1_image', 'value')) }}">
                                                    <input style="display:none;" type="file"
                                                        name="{{ getCMS('home_section1_image', 'slug') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section1_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section1_title', 'slug') }}"
                                                        value="{{ getCMS('home_section1_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section1_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section1_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section1_heading', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section1_description', 'name') }}</span>
                                                    </div>
                                                    <textarea required rows="5" class="form-control input-cms"
                                                        id="description"
                                                        name="{{ getCMS('home_section1_description', 'slug') }}">{{ getCMS('home_section1_description', 'value') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 1 End --}}
                                        <hr>
                                        {{-- Home Section 2 Start --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Mission and Vision Section </h5>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section2_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section2_title', 'slug') }}"
                                                        value="{{ getCMS('home_section2_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section2_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section2_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section2_heading', 'value') }}">
                                                </div>
                                            </div>



                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section2_description', 'name') }}</span>
                                                    </div>
                                                    <textarea required rows="5" class="form-control input-cms"
                                                        id="description"
                                                        name="{{ getCMS('home_section2_description', 'slug') }}">{{ getCMS('home_section2_description', 'value') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Section 2 End --}}

                                        {{-- Section 3 Start --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Politik Point Market Caps Section</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section3_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section3_title', 'slug') }}"
                                                        value="{{ getCMS('home_section3_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section3_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section3_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section3_heading', 'value') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 3 End  --}}

                                        {{-- Home Section 4 Start --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Top Interst Scores Section </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section4_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section4_title', 'slug') }}"
                                                        value="{{ getCMS('home_section4_title', 'value') }}">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section4_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section4_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section4_heading', 'value') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 4 End --}}

                                        {{-- Home Section 5 Start --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Contribute Now! Section </h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section5_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section5_title', 'slug') }}"
                                                        value="{{ getCMS('home_section5_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section5_heading', 'name') }}</span>
                                                    </div>
                                                    <textarea required rows="5" class="form-control input-cms"
                                                        id="description"
                                                        name="{{ getCMS('home_section5_heading', 'slug') }}">{{ getCMS('home_section5_heading', 'value') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        {{-- Home Section 5 End  --}}

                                        {{-- Home Section 6 Start  --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Political Point Section </h5>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section6_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section6_title', 'slug') }}"
                                                        value="{{ getCMS('home_section6_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section6_heading', 'name') }}</span>
                                                    </div>
                                                    <textarea required rows="5" class="form-control input-cms"
                                                        id="description"
                                                        name="{{ getCMS('home_section6_heading', 'slug') }}">{{ getCMS('home_section6_heading', 'value') }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 6 End --}}
                                        <hr>
                                        {{-- Home Section 7 Start --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Stay Updated Section</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section7_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section7_title', 'slug') }}"
                                                        value="{{ getCMS('home_section7_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section7_heading', 'name') }}</span>
                                                    </div>
                                                    <textarea required rows="5" class="form-control input-cms"
                                                        id="description"
                                                        name="{{ getCMS('home_section7_heading', 'slug') }}">{{ getCMS('home_section7_heading', 'value') }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('active_volunteer', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('active_volunteer', 'slug') }}"
                                                        value="{{ getCMS('active_volunteer', 'value') }}">
                                                </div>
                                            </div>
                                               <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('area_coverage', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('area_coverage', 'slug') }}"
                                                        value="{{ getCMS('area_coverage', 'value') }}">
                                                    </div>
                                               </div>



                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span
                                                        class="input-group-text">{{ getCMS('success_campaign', 'name') }}</span>
                                                </div>
                                                <input required class="form-control input-cms" type="text"
                                                    name="{{ getCMS('success_campaign', 'slug') }}"
                                                    value="{{ getCMS('success_campaign', 'value') }}">
                                                </div>
                                           </div>

                                           <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text">{{ getCMS('year_experience', 'name') }}</span>
                                             </div>
                                                <input required class="form-control input-cms" type="text"
                                                name="{{ getCMS('year_experience', 'slug') }}"
                                                value="{{ getCMS('year_experience', 'value') }}">
                                            </div>
                                       </div>
                                    </div>
                                        {{-- Home Section 7 End --}}
                                        <hr>
                                         {{-- Home Section 8 Start --}}
                                         <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">Watchlist Section 8</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section8_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section8_title', 'slug') }}"
                                                        value="{{ getCMS('home_section8_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section8_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section8_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section8_heading', 'value') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 8 End --}}
                                        <hr>
                                         {{-- Home Section 9 Start --}}
                                         <div class="row mb-3">
                                            <div class="col-md-12 mb-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <h5 class="cms-heading">News Section</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section9_title', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section9_title', 'slug') }}"
                                                        value="{{ getCMS('home_section9_title', 'value') }}">
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                <label for="validationCustomUsername"></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span
                                                            class="input-group-text">{{ getCMS('home_section9_heading', 'name') }}</span>
                                                    </div>
                                                    <input required class="form-control input-cms" type="text"
                                                        name="{{ getCMS('home_section9_heading', 'slug') }}"
                                                        value="{{ getCMS('home_section9_heading', 'value') }}">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Home Section 9 End --}}
                                        
                                        <hr>

                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>

        <hr>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
        <!-- END: Card DATA-->
        </div>
    </main>
@endsection
@section('css')
    <style>
        .banner-image {
            padding: 10px;
            width: 400px;
            height: 200px;
        }

        .max-size-banner-images {
            width: 100%;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).on("click", ".banner-image", function() {
            $(this).closest(".input-group").find("input").trigger("click");
        });
    </script>
@endsection
