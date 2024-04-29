@php
$session_data = json_decode(session('user_ip'), true);
@endphp


<form id="common_form" action="{{url(route('contact.create'))}}" method="post" enctype="multipart/form-data">
    @csrf

    <h5 class="text-center">{{ $title }}</h5>

    <input type="hidden" name="section" value="{{$section}}" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
    </div>

    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="country" placeholder="Your Country" required />
    </div>

    <div class="form-group">
        <input type="tel" class="form-control" name="phone" placeholder="Mobile no with country code" required />
    </div>

    @if(!empty($course_name))
        <div class="form-group">
            <input type="text" class="form-control" name="services" value="{{$course_name}}" placeholder="{{$course_name}}" readonly="">
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
    @if(!isset($msgfield) || empty($msgfield) || $msgfield == 1)
        <div class="form-group">
            <textarea aria-labelledby="Message" name="description" class="form-control" placeholder="Message"></textarea>
        </div>
    @endif

    <input type="hidden" name="ip" value="{{ $session_data['ip'] }}" data-aos-once="true" data-aos="fade-up" />

    <input type="hidden" name="ref_url" value="{{ url()->previous() }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group text-center">
        <input class="btn btn-primary submit_button" type="submit" value="send" />
    </div>

</form>

@section("common_form.scripts")
<script>
    $(document).ready(function() {
        initValidate('#common_form');
        $("#common_form").submit(function(e) {
            var form = $(this);
        ajaxSubmit(e, form, responseHandler);
    });
    
    var responseHandler = function(response) {
        $('input, textarea').val('');
        $("select option:first").prop('selected', true);
        setTimeout(function() {
            window.location.href = $('#baseUrl').attr('href') + '/thank-you';
        }, 2000);
    }
});
</script>
@endsection