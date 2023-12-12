<!-----------================= Modal form start =============--------------->

<div class="modal fade enquiry_modal" id="enquiry_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close close_button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <form class="" method="action">
                    <h5 class="text-center">Enquire Now</h5>

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="your_country" placeholder="Your Country"
                            required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="mobile_code"
                            placeholder="Mobile no with country code" required />
                    </div>


                    <div class="form-group">
                        <select aria-labelledby="-Select Course-" class="form-select form-control" required>
                            <option selected>-Select Course-</option>
                            <option value="1">VMware</option>
                            <option value="2">AWS Cloud</option>
                            <option value="3">Azure Cloud</option>
                            <option value="4">MCSE</option>
                            <option value="5">CCNA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea aria-labelledby="Message" class="form-control" placeholder="Message"></textarea>
                    </div>

                    <div class="form-group text-center">
                        <input class="btn btn-primary submit_button" type="submit" value="send" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- enquiry form popup close-->



<!-- enquiry form popup course page open -->

<div class="modal fade enquiry_modal" id="enquiry_modal_coursepg" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close close_button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <form class="" method="action">
                    <h5 class="text-center">Enquire Now</h5>

                    <div class="form-group">
                        <input type="text" class="form-control" name="coursename" placeholder="VMware Training"
                            required readonly />
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="your_country" placeholder="Your Country"
                            required />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="mobile_code"
                            placeholder="Mobile no with country code" required />
                    </div>

                    <div class="form-group text-center">
                        <input class="btn btn-primary submit_button" type="submit" value="send" />
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


<!-----------================= Modal form end =============--------------->