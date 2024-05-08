@php
$session_data = json_decode(session('user_ip'), true);
// Define the amount you want to increment by
$amount = 1; // Change this to your desired amount

// Increment a session value by a specific amount and dump it
$value = Session()->increment('key', $amount);
$class = "form_" . $value;

@endphp

<form class="{{$class}}" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf

    <h5 class="text-center {{ isset($Headingclassname) ? $Headingclassname : '' }}">{!! isset($title) ? $title : '' !!}</h5>


    <input type="hidden" name="section" value="{{$section}}" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ isset($_GET['current_page']) ? $_GET['current_page'] : url()->current() }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Enter Name *" required />
    </div>

    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter Email *" required />
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="country" placeholder="Your Country *" required />
    </div>

    <div class="form-group">
        <input type="tel" class="form-control" name="phone" placeholder="Mobile no with country code *" required />
    </div>

    @if(!empty($course_name))
        <div class="form-group">
            <input type="text" class="form-control" name="services" value="{{$course_name}}" placeholder="{{$course_name}} *" readonly="">
        </div>
    @else
        <div class="form-group">
            <select name="services" class="form-select form-control" required>
                <option value="">--Select Course-</option>
                <option value="VMware">VMware</option>
                <option value="AWS Cloud">AWS Cloud</option>
                <option value="Azure Cloud">Azure Cloud</option>
                <option value="MCSE">MCSE</option>
                <option value="CCNA">CCNA</option>
            </select>
        </div>
    @endif

        <div class="form-group">
            <textarea aria-labelledby="Message" name="description" class="form-control" placeholder="Message *"></textarea>
        </div>


    <input type="hidden" name="ip" value="{{ $session_data['ip'] }}" data-aos-once="true" data-aos="fade-up" />

    <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group text-center">
        <input class="btn btn-primary submit_button" type="submit" value="send" />
    </div>

</form>
<script>

    setTimeout(() => {
 
        initValidate(".{{$class}}");
    // $("#common_form").submit(function (e) {
        $("body").on("submit", ".{{$class}}", function (e) {
            e.preventDefault();
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });
        
        var responseHandler = function (response) {
    $("input, textarea").not('[type="submit"]').val("");
    $("select option:first").prop("selected", !0);
    $("#formModal").modal("hide");
};       
    }, 1000);

</script>
