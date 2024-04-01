@extends('frontend.layouts.app')

@section('page.title', 'Privacy Policy')

@section('page.description', 'Read for Attari Classes privacy policy.')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- privacy policy start ---------------- -->
    
    <section class="privecy_policy">
       
        <section class="sm-at banner1 privecy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrums_section paddtb80">
                            <h1 class="sm-aboutus">Privacy Policy</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="{{ url(route('index')) }}">Home</a></li>
                                    <li class="breadcrumb-item"><a>»</a></li>
                                    <li class="breadcrumb-item"><a><b>Privacy Policy</b></a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our_website">
            <div class="container">
                <div class="row">
                    @php echo html_entity_decode(get_settings('privacy_content')) @endphp
                </div>
            </div>
        </section>
    </section>


    <!-- -------------------- privacy policy  end   ---------------- -->





@endsection
