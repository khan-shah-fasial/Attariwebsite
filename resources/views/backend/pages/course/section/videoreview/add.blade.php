<!----------======================Text Add Form =============================----------------->
<section>
    <form id="add_video_form" action="{{url(route('videos.create'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">
            <div class="col-sm-8">
                <div class="form-group mb-3">
                    <label>Youtube URL  <span class="font-size11">*</span></label>
                    <input class="form-control" type="url" id="image" name="url" required>
                </div>
            </div>

            <div class="col-sm-12 d-flex justify-content-end">
                <div class="form-group d-grid mb-3 text-end">
                    <button type="submit" class="btn btn-block btn-primary">Create</button>
                </div>
            </div>
  
            
        </div>
    </form>
</section>

@section('component.scripts')
<script>
    $(document).ready(function() {
        initValidate('#add_video_form');
        initSelect2('.select2');
        initTrumbowyg('.trumbowyg');
    });

    $("#add_video_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        location.reload();
    }

</script>
@endsection
<!----------======================Text Add Form =============================----------------->