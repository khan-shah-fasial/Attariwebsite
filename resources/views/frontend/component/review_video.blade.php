@php


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
        ->orderBy('c1.created_at', 'ASC')
        ->get();
        


@endphp


<div class="large-12 columns">
    <div class="owl-carousel owl-theme video_testiminials">

        @foreach ($video_rev as $row)
            <div class="item">
                <div class="testimonial_video">
        
                @php
                    // Assuming $row->url contains the YouTube URL
                    if (strpos($row->url, 'embed/') === false) {
                        $videoID = basename($row->url);
                        $youtube_url = 'https://youtu.be/embed/' . $videoID; // Corrected the concatenation
                    } else {
                        $youtube_url = $row->url; // URL already in the correct format
                    }
                @endphp
        
                    <a href="{{ $youtube_url }}" aria-label="Testimonial Video Link"
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

