<!-----==================== Edit Course ==========----------------------->

<div class="card">
    <div class="card-body">
        <div class="col-md-12">
            <h4 class="header-title"><b>Batch Schedules</b></h4>
            <hr>
        </div>

        <section>
            <form id="add_batch_form" action="{{ url(route('course.update')) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="header-title"><b>Placed Training</b></h4>
                                    <hr>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Title <span class="red">*</span></label>
                                        <input type="text" class="form-control" name="placed_title" value="" required>
                                    </div>
                                </div>
                                        
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Pointer</label>
                                        <div id="pointer_list_add_more" style="margin: 10px;">
                                            <div class="form-group">
                                                <div class="row">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <input type="text" style="margin-bottom: 5px;" class="form-control" name="placed_pointer_list[]" placeholder="Enter pointer List here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_pointer_list"></i></div>
                                                </div>
                                                </br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="header-title"><b>Online / Classroom</b></h4>
                                    <hr>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Title <span class="red">*</span></label>
                                        <input type="text" class="form-control" name="oc_title" value="" required>
                                    </div>
                                </div>
                                        
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Pointer</label>
                                        <div id="oc_pointer_list_add_more" style="margin: 10px;">
                                            <div class="form-group">
                                                <div class="row">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <input type="text" style="margin-bottom: 5px;" class="form-control" name="oc_pointer_list[]" placeholder="Enter pointer List here...">
                                                    </div>
                                                </div>
                                                <div class="col-md-1"><i style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;" class="ri-add-circle-fill" id="add_oc_pointer_list"></i></div>
                                                </div>
                                                </br>
                                            </div>
                                        </div>
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

<!-----==================== Edit Course ==========----------------------->