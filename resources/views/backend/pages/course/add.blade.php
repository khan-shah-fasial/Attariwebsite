<section>
    <form id="add_course_form" action="{{url(route('course.create'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">

                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Thumbnail  <span class="font-size11">(Max file size 80kb - 1125*196)</span></label>
                        <input class="form-control" type="file" id="thumbnail" name="thumbnail" required>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea class="form-control trumbowyg" name="description" rows="2" required></textarea>
                    </div>
                </div>
    
            </div>
            <div class="col-md-6">

                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Youtube URL</label>
                        <input type="url" class="form-control" name="url" value="" >
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group mb-3">
                        <label>Course Overview</label>
                        <textarea class="form-control trumbowyg" name="course_overview" rows="2" required></textarea>
                    </div>
                </div>

                <div class="col-sm-6 float-end">
                    <div class="form-group d-grid mb-3 text-end">
                        <button type="submit" class="btn btn-block btn-primary">Create</button>
                    </div>
                </div> 

            </div>               
        </div>
    </form>
</section>


<script>
$(document).ready(function() {
    initValidate('#add_course_form');
    initSelect2('.select2');
    initTrumbowyg('.trumbowyg');
    initTrumbowyg('#trumbowyg_0');
});

$("#add_course_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}

</script>