<!----------======================Text Add Form =============================----------------->
<section>
    <form id="add_syllabus_form" action="{{ url(route('syllabus.create')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Title <span class="red">*</span></label>
                    <input maxlength="255" type="text" class="form-control" name="title" value="" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Description <span class="red">*</span></label>
                    <textarea class="trumbowyg form-control" name="description" rows="5" required></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-block btn-primary">Create</button>
                </div>
            </div>
        </div>
    </form>
</section>

@section('component.scripts')
    <script>
        $(document).ready(function() {
            initValidate('#add_syllabus_form');
            initTrumbowyg('.trumbowyg');
        });

        $("#add_syllabus_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        var responseHandler = function(response) {
            location.reload();
        }
    </script>
@endsection
<!----------======================Text Add Form =============================----------------->
