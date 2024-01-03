<section>
    <form id="add_cms_form" action="{{url(route('cms.create'))}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
  

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course</label>
                                <select class="form-select select2" name="course_id">
                                    <option value="">--Select--</option>
                                    @foreach ($course as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                    
                                    
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="title" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Replace Keyword</label>
                                <input type="text" class="form-control" name="replace_keyword" value="" required>
                            </div>
                        </div>



                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control trumbowyg" name="description" rows="2" ></textarea>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Create</button>
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
    initValidate('#add_cms_form');
    initSelect2('.select2');
    initTrumbowyg('.trumbowyg');
    initTrumbowyg('#trumbowyg_0');
});

$("#add_cms_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}

</script>