@php
    $text_rev = DB::table('text_reviews')->whereIn('course_id', [5, 7, 8, 9, 10])->where('status','1')->select('course_id','thumbnail','name','description','type', DB::raw('MAX(created_at) as latest_created_at'))->groupBy('course_id', 'thumbnail', 'name','description','type')->orderBy('latest_created_at', 'desc')->limit(5)->get();
@endphp

<!-----======================= review comment ============-------------------->

<div class="large-12 columns mt-4 slider_content_dots">
    <div class="owl-carousel owl-theme">

        @foreach ($text_rev as $row)
            <div class="item">
                <div class="testimonial_box">
                    <div class="testimonial__header">
                        <div class="row">
                            <div class="col-lg-9 col-10">
                                <div class="testimonial__image"> <img
                                        data-src="{{ asset('storage/' . $row->thumbnail) }}"
                                        class="lazyload d-block w-100" alt="unnamed"> <span
                                        class="testimonial__name">{{ $row->name }}</span> </div>
                            </div>
                            <div class="col-lg-3 col-2">
                                <div class="testimonial__icon"> 
                                    @if($row->type == 'google')
                                        <i aria-hidden="true" class="fab fa-google-plus"></i>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__content">
                        <div class="testimonial__text">
                            @php echo html_entity_decode($row->description) @endphp
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>

<!------========================= review comment ============------------------>