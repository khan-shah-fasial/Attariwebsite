<!-----==================== Batch schedule Course ==========----------------------->
@php 
    $batch = DB::table('batches')->where('course_id',$course->id)->get()->first();
@endphp
<div class="card">
    <div class="card-body">
        <div class="col-md-12">
            <h4 class="header-title"><b>Batch Schedules</b></h4>
            <hr>
        </div>

        @if(empty($batch))
<!----================================= Add Form ========================-------------------->
            @include('backend.pages.course.section.batch.add')
<!----================================== Add Form end ======================-------------------->
        @else
<!----================================== Edit Form ========================-------------------->
            @include('backend.pages.course.section.batch.edit')
<!----================================== Edit Form end ======================-------------------->

        @endif


    </div>
    <!-- end card-body-->
</div>

<!-----==================== Batch schedule ==========----------------------->