<section>
    <form id="edit_cms_form" action="{{ url(route('cms.update')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $cms->id }}">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="form-check form-switch d-flex justify-content-end mb-2">

                            <input id="zone_check" class="form-check-input mx-2" type="checkbox"
                                name="zone_check" value="1" @if($cms->zone != "0") checked @endif>
            
                            <label class="form-check-label" for="thumbnail_check">City wise / Country wise Course</label>
            
                        </div>

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
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{ $cms->slug }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4" id="menu-title">
                            <div class="form-group mb-3">
                                <label>Menu Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="menu_title" value="{{ $cms->menu_title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Breadcrumb Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="breadcrumb_title" value="{{ $cms->breadcrumb_title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Zone</label>
                                <select class="form-select select2" name="zone">
                                    <option value="0" @if($cms->zone == "0") selected @endif>--- Select ---</option>
                                    <option value="1" @if($cms->zone == "1") selected @endif>City</option>
                                    <option value="2" @if($cms->zone == "2") selected @endif>Country</option>
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course Alias</label>
                                <input type="text" class="form-control" name="alias" value="{{ $cms->alias }}" >
                            </div>
                        </div>


                        <div class="col-sm-8">

                            <div class="form-group mb-3">
								<label>Replace Keyword</label>
								<div id="replace_key_add_more" style=""> @php $i = 1; $replace_key = json_decode($cms->replace_keyword); 
								if(!empty($replace_key)) { foreach ($replace_key as $fkey => $fvalue) { $farr_value = (array)$fvalue; foreach ($farr_value as $fkey1 => $fvalue1) { @endphp
									<div class="replace_key">
										<div class="form-group">
											<div class="row">
												<div class="col-md-11">

                                                    <div class="row">

                                                        <div class="col col-sm-6">
                                                        <input type="text" style="margin-bottom: 5px;" class="form-control" name="replace_key[]" placeholder="Enter Keyword here..." value="{{ $fkey1 }}">
                                                        </div>

                                                        <div class="col col-sm-6">
                                                        <input class="form-control" name="replace_key_word[]" placeholder="Enter Replace Keyword here..." value="{{ $fvalue1 }}"> 
                                                        </div>

                                                    </div>

												</div>
												<div class="col-md-1"> @if($i == 1) <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_replace_key"></i> @else <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i> @endif </div>
											</div>
										</div>
										</br>
									</div> @php $i++; } @endphp @php } @endphp @php } else { @endphp
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
									</div> @php } @endphp </div>
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

    var zoneCheck = document.getElementById('zone_check');
    var menuTitle = document.getElementById('menu-title');

    // Initial check
    toggleMenuTitle();

    // Add event listener to the checkbox
    zoneCheck.addEventListener('change', function () {
        toggleMenuTitle();
    });

    // Function to toggle menu title visibility and required attribute
    function toggleMenuTitle() {
        if (zoneCheck.checked) {
            menuTitle.style.display = 'none';
            document.getElementsByName('menu_title')[0].removeAttribute('required');
        } else {
            menuTitle.style.display = 'block';
            document.getElementsByName('menu_title')[0].setAttribute('required', 'required');
        }
    }

</script>
