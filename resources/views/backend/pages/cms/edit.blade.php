<section>
    <form id="edit_cms_form" action="{{ url(route('cms.update')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $cms->id }}">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course</label>
                                <select class="form-select select2" name="course_id" required>
                                    <option value="">--Select--</option>
                                    @foreach ($course as $row)
                                        <option value="{{ $row->id }}"
                                            @if ($cms->course_id == $row->id) selected @endif>{{ $row->name }}
                                        </option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ $cms->title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Menu Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="menu_title" value="{{ $cms->menu_title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $cms->slug }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Replace Keyword</label>
                                <input type="text" class="form-control" name="replace_keyword"
                                    value="{{ $cms->replace_keyword }}" >
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Rating</label>
                                <input type="text" class="form-control" name="rating"
                                    value="{{ $cms->rating }}" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Total Review</label>
                                <input type="text" class="form-control" name="total_review"
                                    value="{{ $cms->total_review }}" required>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control trumbowyg" name="description" rows="2">{{ $cms->description }}</textarea>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Update</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </form>
</section>


<script>
    $(document).ready(function() {
        initValidate('#edit_cms_form');
        initSelect2('.select2');
        initTrumbowyg('.trumbowyg');
        initTrumbowyg('#trumbowyg_0');
    });

    $("#edit_cms_form").submit(function(e) {
        var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });

    var responseHandler = function(response) {
        location.reload();
    }
</script>
