
@php
    $setting=\App\Http\Controllers\HomeController::getsetting()

@endphp


<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright {{$setting->company}}</div>
            <div class="col-lg-4 my-3 my-lg-0">
                @if($setting->twitter != null)<a class="btn btn-dark btn-social mx-2"  href="$setting->twitter" target="_blank"><i class="fab fa-twitter"></i></a>@endif
                @if($setting->facebook != null)<a  class="btn btn-dark btn-social mx-2" href="$setting->facebook" target="_blank"><i class="fab fa-facebook"></i></a>@endif
                @if($setting->instagram != null)<a class="btn btn-dark btn-social mx-2"  href="$setting->instagram" target="_blank"><i class="fab fa-instagram"></i></a>@endif

                <a class="btn btn-dark btn-social mx-2" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
             <h4>Address</h4>
                {{$setting->company}}<br>
                {{$setting->address}}<br>
                <strong>Phone :</strong>{{$setting->phone}}<br>
                <strong>Fax :</strong>{{$setting->fax}}<br>
                <strong>Email :</strong>{{$setting->email}}<br>



        </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('assets')}}/https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="{{asset('assets')}}/https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset('assets')}}/assets/mail/jqBootstrapValidation.js"></script>
<script src="{{asset('assets')}}/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="{{asset('assets')}}/js/scripts.js"></script>
