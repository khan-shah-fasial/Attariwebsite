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
                                <label>Menu Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="menu_title" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Breadcrumb Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="breadcrumb_title" value="" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Zone</label>
                                <select class="form-select select2" name="zone">
                                    <option value="0">--- Select ---</option>
                                    <option value="1">City</option>
                                    <option value="2">Country</option>
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course Alias</label>
                                <input type="text" class="form-control" name="alias" value="" >
                            </div>
                        </div>



                        <div class="col-sm-8">

                            <div class="form-group mb-3">
                                <label>Replace Keyword</label>
                                <div id="replace_key_add_more" style="">
                                    <div class="form-group">
                                        <div class="row">
                                        <div class="col-md-11">
                                            <div class="row">

                                                <div class="col col-sm-6">
                                                <input type="text" style="margin-bottom: 5px;" class="form-control" name="replace_key[]" placeholder="Enter Keyword here...">
                                                </div>

                                                <div class="col col-sm-6">
                                                <input class="form-control" name="replace_key_word[]" placeholder="Enter Replace Keyword here...">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_replace_key"></i></div>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label>Description</label>
                                <textarea class="form-control trumbowyg" name="description" rows="2" ></textarea>
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="form-group d-flex mb-3 justify-content-end">
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

function remove_replace_key(_this) {
    _this.closest(".replace_key").remove();
}


$("#add_replace_key").on("click", function() {

var new_replace_key = `
    <div class="replace_key form-group">
        <div class="row">
            <div class="col-md-11">
                <div class="row">

                    <div class="col col-sm-6">
                    <input type="text" style="margin-bottom: 5px;" class="form-control" name="replace_key[]" placeholder="Enter Keyword here...">
                    </div>

                    <div class="col col-sm-6">
                    <input class="form-control" name="replace_key_word[]" placeholder="Enter Replace Keyword here...">
                    </div>

                </div>
            </div>
            <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
        </div>
        </br>
    </div>
`;

$("#replace_key_add_more").append(new_replace_key);
});

</script>