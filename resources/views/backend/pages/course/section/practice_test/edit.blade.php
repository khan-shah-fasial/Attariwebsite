<!---------------------------------- edit form --------------------------------------->

<section>
    <form id="edit_batch_form" action="{{ url(route('batch.update')) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
                <div class="card">
                    <div class="card-body">

                        <input type="hidden" class="form-control" name="id" value="{{ $batch->id }}">

                        <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title"><b>PDF Manage</b></h4>
                                <hr>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="paced_title" value="{{ $batch->paced_title }}" required>
                                </div>
                            </div>
                                    
                            <div class="col-sm-8">
                                <div class="form-group mb-3">
                                    <label>Pointer <span class="red">*</span></label>
                                    <div id="pointer_list_add_more1" style=""> @php $i = 1; $paced_pointer_list = json_decode($batch->paced_pointer_list); 
                                    if(!empty($paced_pointer_list)) { foreach ($paced_pointer_list as $row){  @endphp
                                        <div class="pointer_list">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 3px;" class="form-control" name="paced_pointer_list[]" placeholder="Enter pointer List here..." value="{{ $row }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"> @if($i == 1) <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_pointer_list1"></i> @else <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_pointer_list1($(this));"></i> @endif </div>
                                                </div>
                                            </div>
                                            </br>
                                        </div> @php $i++; } @endphp  @php } else { @endphp
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="paced_pointer_list[]" placeholder="Enter pointer List here..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_pointer_list1"></i>
                                                    </div>
                                            </div>
                                            </br>
                                        </div> @php } @endphp </div>
                                </div>
                            </div>


                        </div>

<!-------==========================================================-------------------->

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title"><b>Online / Classroom</b></h4>
                                <hr>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="oc_title" value="{{ $batch->oc_title }}" required>
                                </div>
                            </div>
                                    
                            <div class="col-sm-8">
                                <div class="form-group mb-3">
                                    <label>Pointer <span class="red">*</span></label>
                                    <div id="oc_pointer_list_add_more1" style=""> 
                                    @php $i = 1; $oc_pointer_list = json_decode($batch->oc_pointer_list); 
                                    if(!empty($oc_pointer_list)) { foreach ($oc_pointer_list as $row){  @endphp
                                        <div class="oc_pointer_list">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 3px;" class="form-control" name="oc_pointer_list[]" placeholder="Enter pointer List here..." value="{{ $row }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"> @if($i == 1) <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_oc_pointer_list1"></i> @else <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_oc_pointer_list1($(this));"></i> @endif </div>
                                                </div>
                                            </div>
                                            </br>
                                        </div> @php $i++; } @endphp  @php } else { @endphp
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="oc_pointer_list[]" placeholder="Enter pointer List here..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_oc_pointer_list1"></i>
                                                    </div>
                                            </div>
                                            </br>
                                        </div> @php } @endphp </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Date / Schedule / Time <span class="red">*</span></label>
                                    <div id="batch_detail_add_more1" style=""> 
                                    @php $i = 1; $batch_detail = json_decode($batch->batch_detail, true); 
                                    if(!empty($batch_detail)) { foreach ($batch_detail as $row){  @endphp
                                        <div class="batch_detail">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">

                                                            <div class="col col-md-3">
                                                                <input type="text" style="margin-bottom: 5px;" class="form-control" name="batch_detail_date[]" placeholder="Enter Date here..." 
                                                                value="{{ $row['date'] }}" required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_sch[]" placeholder="Enter Schedule here..." 
                                                                value="{{ $row['schedule'] }}" required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_remark[]" placeholder="Enter Remark here..." value="{{ $row['remark'] }}" required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_time[]" placeholder="Enter Time here..." value="{{ $row['time'] }}" required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"> @if($i == 1) <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_batch_detail1"></i> @else <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_batch_detail1($(this));"></i> @endif </div>
                                                </div>
                                            </div>
                                            </br>
                                        </div> @php $i++; } @endphp  @php } else { @endphp
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">

                                                            <div class="col col-md-3">
                                                                <input type="text" style="margin-bottom: 5px;" class="form-control" name="batch_detail_date[]" placeholder="Enter Date here..." required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_sch[]" placeholder="Enter Schedule here..." required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_remark[]" placeholder="Enter Remark here..." required>
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_time[]" placeholder="Enter Time here..." required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_batch_detail1"></i>
                                                    </div>
                                                </div>
                                            </br>
                                        </div> @php } @endphp </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>OFF Percentage <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="off_percentage" value="{{ $batch->off_percentage }}" required>
                                </div>
                            </div>

                        </div>
<!-------==========================================================-------------------->

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title"><b>Corporate Training</b></h4>
                                <hr>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title <span class="red">*</span></label>
                                    <input type="text" class="form-control" name="corp_title" value="{{ $batch->corp_title }}" required>
                                </div>
                            </div>
                                    
                            <div class="col-sm-8">
                                <div class="form-group mb-3">
                                    <label>Pointer <span class="red">*</span></label>
                                    <div id="corp_pointer_list_add_more1" style=""> 
                                    @php $i = 1; $corp_pointer_list = json_decode($batch->corp_pointer_list); 
                                    if(!empty($corp_pointer_list)) { foreach ($corp_pointer_list as $row){  @endphp
                                        <div class="corp_pointer_list">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 3px;" class="form-control" name="corp_pointer_list[]" placeholder="Enter pointer List here..." value="{{ $row }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"> @if($i == 1) <i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_corp_pointer_list1"></i> @else <i style="font-size: 25px; color: red; cursor: pointer; margin-left: 5px;" class="ri-delete-bin-2-fill" onclick="remove_corp_pointer_list1($(this));"></i> @endif </div>
                                                </div>
                                            </div>
                                            </br>
                                        </div> @php $i++; } @endphp  @php } else { @endphp
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="corp_pointer_list[]" placeholder="Enter pointer List here..." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_corp_pointer_list1"></i>
                                                    </div>
                                            </div>
                                            </br>
                                        </div> @php } @endphp </div>
                                </div>
                            </div>


                        </div>

<!------===========================================================------------------>
                        
                        <div class="col-sm-12">
                           {{-- <div class="d-flex justify-content-start">
                                <div class="form-check form-switch">

                                    <input id="batch_check" class="form-check-input" type="checkbox"
                                    name="batch_check" value="0" @if($batch->status == '0') checked @endif>

                                    <label class="form-check-label" for="batch_check">Hide Batch Schedule
                                    </label>

                                </div>
                            </div> --}}
                            <div class="d-flex justify-content-end">
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

<!---------------------------------- edit form --------------------------------------->

@section('component.scripts')
    <script>
        function remove_progress_bar(_this) {
            _this.closest(".progress_bar").remove();
        }

        function remove_faq(_this) {
            _this.closest(".faq").remove();
        }


        $(document).ready(function() {
            initValidate('#add_batch_form');
            initTrumbowyg('#trumbowyg_0');
        });

        $("#add_batch_form").submit(function(e) {
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

        var textareaIdCounter = 0;

        $("#add_faq").on("click", function() {
            textareaIdCounter++;

            var newFaq = `
                <div class="faq form-group">
                    <div class="row" data-id="${textareaIdCounter}">
                        <div class="col-md-11">
                            <div class="row">
                                <input type="text" style="margin-bottom: 3px;" class="form-control" name="faq[]" placeholder="Enter Question here...">
                                <span class="glyphicon form-control-feedback"></span>
                                <textarea id="trumbowyg_${textareaIdCounter}" class="trumbowyg form-control" name="faq_description[]" rows="2" placeholder="Enter Answer here..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_faq($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

            $("#faq_add_more").append(newFaq);
            initTrumbowyg(`#trumbowyg_${textareaIdCounter}`);
        });

        var pdfCounter = 1;

        $("#add_progress_bar").on("click", function() {
            pdfCounter++;

        var new_progress_bar = `
            <div class="progress_bar form-group">
                <div class="row">
                    <div class="col-md-11">
                        <div class="row">
                            <input type="text" style="margin-bottom: 3px;" class="form-control" name="progress_bar[]" placeholder="Enter Title here..." required>
                            <span class="glyphicon form-control-feedback"></span>

                            <input class="form-control" type="file" name="pdf_${pdfCounter}" required>

                        </div>
                    </div>
                    <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_progress_bar($(this));"></i></div>
                </div>
                </br>
            </div>
        `;

        $("#progress_bar_add_more").append(new_progress_bar);
        });



    </script>
@endsection