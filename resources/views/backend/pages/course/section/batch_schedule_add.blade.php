<!-----==================== Batch schedule Course ==========----------------------->
<div class="card">
    <div class="card-body">
        <div class="col-md-12">
            <h4 class="header-title"><b>Batch Schedules</b></h4>
            <hr>
        </div>

        <section>
            <form id="add_batch_form" action="{{ url(route('batch.update')) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                        <div class="card">
                            <div class="card-body">

                                <input type="hidden" class="form-control" name="id" value="">

                                <input type="hidden" class="form-control" name="course_id" value="{{ $course->id }}">

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="header-title"><b>Paced Training</b></h4>
                                        <hr>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group mb-3">
                                            <label>Title <span class="red">*</span></label>
                                            <input type="text" class="form-control" name="paced_title" value="" required>
                                        </div>
                                    </div>
                                            
                                    <div class="col-sm-8">
                                        <div class="form-group mb-3">
                                            <label>Pointer <span class="red">*</span></label>
                                            <div id="pointer_list_add_more" style="">
                                                <div class="form-group">
                                                    <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="paced_pointer_list[]" placeholder="Enter pointer List here...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_pointer_list"></i></div>
                                                    </div>
                                                    </br>
                                                </div>
                                            </div>
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
                                            <input type="text" class="form-control" name="oc_title" value="" required>
                                        </div>
                                    </div>
                                            
                                    <div class="col-sm-8">
                                        <div class="form-group mb-3">
                                            <label>Pointer <span class="red">*</span></label>
                                            <div id="oc_pointer_list_add_more" style="">
                                                <div class="form-group">
                                                    <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="oc_pointer_list[]" placeholder="Enter pointer List here...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_oc_pointer_list"></i></div>
                                                    </div>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label>Date / Schedule / Time</label>
                                            <div id="batch_detail_add_more" style="">
                                                <div class="form-group">
                                                    <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">

                                                            <div class="col col-md-3">
                                                                <input type="text" style="margin-bottom: 5px;" class="form-control" name="batch_detail_date[]" placeholder="Enter Date here...">
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_sch[]" placeholder="Enter Schedule here...">
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_remark[]" placeholder="Enter Remark here...">
                                                            </div>

                                                            <div class="col col-md-3">
                                                                <input class="form-control" name="batch_detail_time[]" placeholder="Enter Time here...">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_batch_detail"></i></div>
                                                    </div>
                                                    </br>
                                                </div>
                                            </div>
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
                                            <input type="text" class="form-control" name="corp_title" value="" required>
                                        </div>
                                    </div>
                                            
                                    <div class="col-sm-8">
                                        <div class="form-group mb-3">
                                            <label>Pointer</label>
                                            <div id="corp_pointer_list_add_more" style="">
                                                <div class="form-group">
                                                    <div class="row">
                                                    <div class="col-md-11">
                                                        <div class="row">
                                                            <input type="text" style="margin-bottom: 5px;" class="form-control" name="corp_pointer_list[]" placeholder="Enter pointer List here...">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 5px;" class="ri-add-circle-fill" id="add_corp_pointer_list"></i></div>
                                                    </div>
                                                    </br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

        <!------===========================================================------------------>
                                
                                <div class="col-sm-12">
                                    <div class="d-flex justify-content-start">
                                        <div class="form-check form-switch">

                                            <input id="batch_check" class="form-check-input" type="checkbox"
                                                name="batch_check" value="0">

                                            <label class="form-check-label" for="batch_check">Remove Batch
                                            </label>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="form-group d-grid mb-3 text-end">
                                            <button type="submit" class="btn btn-block btn-primary">update</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                </div>
            </form>
        </section>




    </div>
    <!-- end card-body-->
</div>

<!-----==================== Batch schedule ==========----------------------->