<!---================================ SECTION heading =======================--->
<section>
    @php 
        $heading = DB::table('courses')->where('id', $course->id)->value('faq_section_heading');
    @endphp
    <form id="updating_heading_form" action="{{ url(route('course.update_heading')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">
        <input type="hidden" class="form-control" name="section" value="faq">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Faq Section Title <span class="red">*</span></label>
                    <input maxlength="255" type="text" class="form-control" name="heading" value="{{ $heading }}" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-block btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
</section>

<!---================================ SECTION heading =======================--->

<!----------======================Text Add Form =============================----------------->
<section>
    <form id="add_faq_form" action="{{ url(route('faq.create')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Question <span class="red">*</span></label>
                    <input maxlength="255" type="text" class="form-control" name="question" value="" required>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group mb-3">
                    <label>Answer <span class="red">*</span></label>
                    <textarea class="trumbowyg form-control" name="answer" rows="5" required></textarea>
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
            initValidate('#add_faq_form');
            initValidate('#updating_heading_form');
            initTrumbowyg('.trumbowyg');
        });

        $("#add_faq_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#updating_heading_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        var responseHandler = function(response) {
            location.reload();
        }
    </script>
@endsection
<!----------======================Text Add Form =============================----------------->
