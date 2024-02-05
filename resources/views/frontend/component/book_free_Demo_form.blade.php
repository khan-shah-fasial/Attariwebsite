@php
$session_data = json_decode(session('user_ip'), true);
@endphp

<!---============================== Book Free Demo ================= ------------->

<form id="add_demo1_form" action="{{url(route('contact.create'))}}" method="post"
enctype="multipart/form-data">
@csrf

    <h5 class="text-center color_white">Book a <b>FREE</b> Demo</h5>

    <input type="hidden" name="section" value="Book a FREE Demo Course Page" data-aos-once="true" data-aos="fade-up" />
    <input type="hidden" name="url" value="{{ url()->current() }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Enter Name" required />
    </div>

    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Enter Email" required />
    </div>

    <div class="form-group">
        <input type="text" class="form-control" name="country" placeholder="Your Country"
            required />
    </div>

    <div class="form-group">
        <input type="tel" class="form-control" name="phone"
            placeholder="Mobile no with country code" required />
    </div>

    <div class="form-group">
        <select name="services" class="form-select form-control" required />
            <option selected>-Select Course-</option>
            <option value="VMware">VMware</option>
            <option value="AWS Cloud">AWS Cloud</option>
            <option value="Azure Cloud">Azure Cloud</option>
            <option value="MCSE">MCSE</option>
            <option value="CCNA">CCNA</option>
        </select>
    </div>

    <div class="form-group">
        <textarea aria-labelledby="Message" name="description" class="form-control" placeholder="Message"></textarea>
    </div>

    <input type="hidden" name="ip" value="{{ $session_data['ip'] }}" data-aos-once="true" data-aos="fade-up" />

    <div class="form-group text-center">
        <input class="btn btn-primary submit_button" type="submit" value="send" />
    </div>

</form>

<!---============================== Book Free Demo ================= ------------->