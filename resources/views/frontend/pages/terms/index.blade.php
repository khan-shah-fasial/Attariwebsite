@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', ' ')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- terms start ---------------- -->
    <style>
        .our_website {
            padding-top: 50px;
        }

        .privacy_heading {
            color: #012749;
            font-size: 30px;
            font-weight: 500;
            line-height: 1.2em;

        }

        .our_website .items {
            list-style: none;
            padding-left: 0px;
        }

        .our_website .items .item span i {
            font-size: 20px;
        }

        .our_website .items .item .list_text {
            font-size: 19px;
        }
    </style>
    <section class="privecy_policy">
        <section class="privecy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb">
                            <h1 class="sm-aboutus">Terms of Service</h1>
                            <p> <span class="home_breadcrumb"><a href="{{ url(route('index')) }}">Home</a></span> » <span
                                    class="first_breadcrumb"><a href="">Terms of Service</a></span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_website">

            <div class="container">
                <div class="row">
                    @php echo html_entity_decode(get_settings('terms_content')) @endphp
                </div>
            </div>
        </section>
    </section>

    <!-- -------------------- terms end   ---------------- -->

@endsection
