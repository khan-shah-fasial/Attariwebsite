<section>
    <form id="edit_cms_form" action="{{ url(route('cms.update')) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $cms->id }}">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="row">

                    {{--    <div class="form-check form-switch d-flex justify-content-end mb-2">

                            <input id="zone_check" class="form-check-input mx-2" type="checkbox"
                                name="zone_check" value="1" @if($cms->zone != "0") checked @endif>
            
                            <label class="form-check-label" for="thumbnail_check">City wise / Country wise Course</label>
            
                        </div> ---}}

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course</label>
                                <select class="form-select" name="course_id" onchange="toggleCourse();" id="course_id" required>
                                    <option data-slug="Please Select Course" data-title="Please Select Course" data-descrip="Please Select Course" data-zone="0" value="">--Select--</option>
                                    @foreach ($course as $row)
                                        @php $zone_count = DB::table('cms')->where('course_id', $row->id)->where('zone', 0)->count(); @endphp
                                        <option data-slug="{{ $row->slug_url }}" data-title="{{ $row->meta_title }}" data-descrip="{{ $row->meta_description }}" data-zone="{{$zone_count}}" value="{{ $row->id }}" @if ($cms->course_id == $row->id) selected @endif>{{ $row->name }}
                                        </option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course Title <span class="red">*</span></label>
                                <input type="text" class="form-control" name="title" value="{{ $cms->title }}"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Slug</label>
                                <input type="text" class="form-control opacity-50" id="slug_url" name="slug" value=""
                                    readonly>
                            </div>
                        </div>

                        <div class="col-sm-4" id="menu-title">
                            <div class="form-group mb-3">
                                <label>Course Name in the menu<span class="red">*</span></label>
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
                                <select class="form-select" name="zone" id="typeSelect" onclick="toggleInput1();" required>
                                    <option value="">--Select--</option>
                                    <option id="main_zone" value="0" @if($cms->zone == "0") selected @endif>Main</option>
                                    <option value="1" @if($cms->zone == "1") selected @endif>City</option>
                                    <option value="2"  @if($cms->zone == "2") selected @endif>Country</option>
                                </select> 
                            </div>
                        </div>

                        <div class="col-sm-4" id="alisa-select">
                            <div class="form-group mb-3">
                                <label>Course Alias (bottom Section)</label>
                                <input type="text" class="form-control" id="alias" name="alias" value="{{ $cms->alias }}" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course Meta Title <span class="red">*</span></label>
                                <input type="text" class="form-control opacity-50" value="" id="meta_title" readonly>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group mb-3">
                                <label>Course Meta Description <span class="red">*</span></label>
                                <textarea class="form-control opacity-50" rows="2" id="meta_description" readonly></textarea>
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



    var menuTitle1 = document.getElementById('menu-title');
    var aliasSelect1 = document.getElementById('alisa-select');

    // Initial check
    toggleMenuTitle1();




    // Function to toggle menu title visibility and required attribute based on the selected option
    function toggleMenuTitle1(selectedOption) {
        if (selectedOption == 1 || selectedOption == 2) {
            menuTitle1.style.display = 'none';
            aliasSelect1.style.display = 'block';

            document.getElementsByName('menu_title')[0].removeAttribute('required');
            document.getElementsByName('alias')[0].setAttribute('required', 'required');
        } else {
            menuTitle1.style.display = 'block';
            aliasSelect1.style.display = 'none';

            document.getElementsByName('menu_title')[0].setAttribute('required', 'required');
            document.getElementsByName('alias')[0].removeAttribute('required');
        }

    }



    /*------============================== auto slug and meta title and description ================----------*/ 


    var slug_field = document.getElementById('slug_url');
    var meta_title_field = document.getElementById('meta_title');
    var meta_description_field = document.getElementById('meta_description');

    var main = document.getElementById('main_zone');

    var old_slug;


    function toggleCourse() {
        var selected_course_Option = document.getElementById('course_id').querySelector('option:checked');
        var course_slug = selected_course_Option.getAttribute('data-slug');
        var course_title = selected_course_Option.getAttribute('data-title');
        var course_decrip = selected_course_Option.getAttribute('data-descrip');

        var course_zone = selected_course_Option.getAttribute('data-zone');

        
        if (course_zone !== "0") {
            main.style.display = "none";
        } else if (course_zone === "yes") {
            main.style.display = "block";
        } else {
            main.style.display = "block";
        }

        old_slug = course_slug;

        if (selected_course_Option.value === '') {
            slug_field.value = '';
            meta_title_field.value = '';
            meta_description_field.value = '';
        } else {
            slug_field.value = course_slug;
            meta_title_field.value = course_title;
            meta_description_field.value = course_decrip;
        }
    }

    toggleCourse();


    var alias_name = document.getElementById('alias');

    alias_name.addEventListener('keyup', function() {
        if (alias_name.value === "") {
            slug_field.value = old_slug;
        } else {
            var new_slug = old_slug + '-' + alias_name.value.replace(/\s+/g, '-').toLowerCase();
            slug_field.value = new_slug;
        }
    });


    if (alias_name.value !== "") {
        var new_slug = old_slug + '-' + alias_name.value.replace(/\s+/g, '-').toLowerCase();
        slug_field.value = new_slug;
    }

        // Function to toggle menu title visibility and required attribute
    function toggleInput1() {
        // Get the value of the selected option
        const selectedOption = document.getElementById('typeSelect').value;

        // Call the toggleMenuTitle1 function with the selected option value
        toggleMenuTitle1(selectedOption);

        if(selectedOption === "0"){
            slug_field.value = old_slug;
        } else {
            var new_slug = old_slug + '-' + alias_name.value.replace(/\s+/g, '-').toLowerCase();
            slug_field.value = new_slug;
        }
    }

    toggleInput1();


    </script>
