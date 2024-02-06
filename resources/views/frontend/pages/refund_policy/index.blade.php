@extends('frontend.layouts.app')

@section('page.title', ' ')

@section('page.description', 'Seedling & Associates is one of the best law firms in Delhi, India. We provide legal
    assistance for startups, FDI, Property law, IP, and more')

@section('page.type', 'website')

@section('page.content')
    <!-- -------------------- Refund policy start ---------------- -->
    <style>
        .our_website {
            padding-top: 50px;
        }

        .privacy_heading {
            color: #012749;
            font-weight: 500;
            line-height: 1.2em;

        }

        .our_website .items {
            list-style: none;
            padding-left: 0px;
        }
    </style>
    <section class="privecy_policy">
        <section class="privecy_banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb">
                            <h1 class="sm-aboutus">Refunds & Cancellations</h1>
                            <p>
                                <span class="home_breadcrumb"><a href="{{ url(route('index')) }}">Home</a></span> »
                                <span class="first_breadcrumb"><a href="">Refunds & Cancellations</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our_website">
            <div class="container">
                <div class="row">
                    @php echo html_entity_decode(get_settings('refund_policy_content')) @endphp
                </div>
            </div>
        </section>
    </section>

    <!-- -------------------- Refund policy  end   ---------------- -->

@endsection
