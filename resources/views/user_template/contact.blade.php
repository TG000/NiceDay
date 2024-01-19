@extends('user_template.layouts.template')
@section('page_title')
Contact | Nice Day
@endsection
@section('content')
<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.4610600053957!2d106.62684242594285!3d10.852494157784138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zVMOyYSBuaMOgIElubm92YXRpb24sIEzDtCAyNCwgQ8O0bmcgdmnDqm4gUGjhuqduIG3hu4FtIFF1YW5nIFRydW5nLCBRdeG6rW4gMTIsIFRQLkhDTQ!5e0!3m2!1sen!2s!4v1705520328645!5m2!1sen!2s" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Information</span>
                        <h2>Contact Us</h2>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                            strict attention.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>District 12</h4>
                            <p>Innovation Building, Block 24, QTSC, District 12, HCM City <br />+84 969 925 459</p>
                        </li>
                        <li>
                            <h4>Binh Tan</h4>
                            <p>633 Le Trong Tan, Binh Tan District, HCM City <br />+84 969 925 459</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection