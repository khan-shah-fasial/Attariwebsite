<!----------======================Text Add Form =============================----------------->
<section>
    <form id="add_text_form" action="{{url(route('text.create'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            
            <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">
            <div class="col-sm-4">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="" required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group mb-3">
                    <label>Thumbnail  <span class="font-size11">(Max file size 80kb - 1125*196)</span></label>
                    <input class="form-control" type="file" id="thumbnail" name="thumbnail" required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group mb-3">
                    <label>Type</label>
                    <select class="form-select select2" name="type">
                        <option value="">--Select--</option>
                        <option value="google">Google</option>
                        <option value="lms">LMS</option>
                    </select> 
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Description</label>
                    <textarea class="form-control trumbowyg" name="description" rows="2" required></textarea>
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
        initValidate('#add_text_form');
        initSelect2('.select2');
        initTrumbowyg('.trumbowyg');
    });

    $("#add_text_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        location.reload();
    }

</script>
@endsection
<!----------======================Text Add Form =============================----------------->