@php
    $video_rev = DB::table('video_reviews')->whereIn('course_id', [5, 7, 8, 9, 10])->where('status','1')->select('course_id','image','url', DB::raw('MAX(created_at) as latest_created_at'))->groupBy('course_id', 'image', 'url')->get();
@endphp

<!----================================= Review Video ====================-------------->

<div class="large-12 columns">
    <div class="owl-carousel owl-theme video_testiminials">

        @foreach ($video_rev as $row)
            <div class="item">
                <div class="testimonial_video">
                    <a href="{{ $row->url }}" aria-label="Testimonial Video Link"
                        data-fancybox="gallery">
                        <div class="pulse-button"></div>
                        <img data-src="{{ asset('storage/' . $row->image) }}" width="352" height="198"
                            class="lazyload d-block w-100" alt="">
                    </a>
                </div>
            </div>
        @endforeach


    </div>
</div>

<!----================================= Review Video ====================-------------->
