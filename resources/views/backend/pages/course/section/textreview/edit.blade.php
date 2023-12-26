<!----------======================Text Edit Form =============================----------------->
<section>
    <form id="edit_text_form" action="{{url(route('text.update'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" class="form-control" name="id" value="{{ $textreview->id }}">
            <input type="hidden" class="form-control" name="course_id" value="{{ $textreview->course_id }}">
            <div class="col-sm-4">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $textreview->name }}" required>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group mb-3">
                            <label>Thumbnail <span class="font-size11">(Max file size 80kb -
                                    1125*196)</span></label>
                            <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                            @if ($textreview->thumbnail)
                                <div class="form-check form-switch">

                                    <input id="thumbnail_check" class="form-check-input" type="checkbox"
                                        name="thumbnail_check" value="1">

                                    <label class="form-check-label" for="thumbnail_check">Remove thumnail
                                        icon</label>

                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        @if ($textreview->thumbnail)
                            <img src="{{ asset('storage/' . $textreview->thumbnail) }}" class="img-thumbnail">
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group mb-3">
                    <label>Type</label>
                    <select class="form-select select2" name="type">
                        <option value="" @if($textreview->type == " ") selected @endif>--Select--</option>
                        <option value="google" @if($textreview->type == "google") selected @endif>Google</option>
                        <option value="lms" @if($textreview->type == "lms") selected @endif>LMS</option>
                    </select> 
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Description</label>
                    <textarea class="form-control trumbowyg0" name="description" rows="2" required>{{ $textreview->description }}</textarea>
                </div>
            </div>
    
            <div class="col-sm-12 d-flex justify-content-end">
                <div class="form-group d-grid mb-3 text-end">
                    <button type="submit" class="btn btn-block btn-primary">Update</button>
                </div>
            </div>
  
            
        </div>
    </form>
</section>


<script>
    $(document).ready(function() {
        initValidate('#edit_text_form');
        initSelect2('.select2');
        initTrumbowyg('.trumbowyg0');
    });

    $("#edit_text_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        location.reload();
    }

</script>

<!----------======================Text Add Form =============================----------------->