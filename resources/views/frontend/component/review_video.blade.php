@php
/*
     = DB::table('video_reviews')->whereIn('course_id', [5, 7, 8, 9, 10])->where('status','1')->select('course_id','image','url', DB::raw('MAX(created_at) as latest_created_at'))->groupBy('course_id', 'image', 'url')->orderBy('latest_created_at', 'desc')->limit(5)->get();
      */

    $video_rev = DB::table('video_reviews as c1')
        ->whereIn('c1.course_id', [5, 7, 8, 9, 10])
        ->where('c1.status', '1')
        ->select('c1.course_id', 'c1.image', 'c1.url', 'c1.created_at as latest_created_at')
        ->join(DB::raw('(SELECT course_id, MAX(created_at) as max_created_at
                        FROM video_reviews
                        WHERE course_id IN (5, 7, 8, 9, 10) AND status = \'1\'
                        GROUP BY course_id) as c2'), function ($join) {
                            $join->on('c1.course_id', '=', 'c2.course_id')
                                ->on('c1.created_at', '=', 'c2.max_created_at');
                        })
        ->orderBy('c1.created_at', 'desc')
        ->get();
        


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
