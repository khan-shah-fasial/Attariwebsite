<!-----==================== Edit Course ==========----------------------->

<div class="card">
    <div class="card-body">
        <div class="col-md-12">
            <h4 class="header-title"><b>Edit Course</b></h4>
            <hr>
        </div>

        <section>
            <form id="edit_course_form" action="{{ url(route('course.update')) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <input type="hidden" class="form-control" name="id" value="{{ $course->id }}">
                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $course->name }}">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group mb-3">
                                    <label>Thumbnail <span class="font-size11">(Max file size 80kb -
                                            1125*196)</span></label>
                                    <input class="form-control" type="file" id="thumbnail" name="thumbnail">
                                    @if ($course->thumbnail)
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
                                @if ($course->thumbnail)
                                    <img src="{{ asset('storage/' . $course->thumbnail) }}" class="img-thumbnail">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group mb-3">
                            <label>Youtube URL</label>
                            <input type="url" class="form-control" name="url" value="{{ $course->url }}">
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label>Description</label>
                            <textarea class="form-control trumbowyg" name="description" rows="2">{{ $course->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group mb-3">
                            <label>Course Overview</label>
                            <textarea class="form-control trumbowyg" name="course_overview" rows="2">{{ $course->course_overview }}</textarea>
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




    </div>
    <!-- end card-body-->
</div>

<!-----==================== Edit Course ==========----------------------->
