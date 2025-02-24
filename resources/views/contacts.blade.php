@extends('layouts.master_other')

@section('content')
    <!--Content-->
    <div class="contact">
		<div class="container">
            <div class="menu-top">
                <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h3>Contact</h3>
                    <label><i class="glyphicon glyphicon-menu-up"></i></label>
                    <span>Here are our contacts.</span>
                </div>
                <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <p>Incase of any queries, concerns, suggestions regarding our services, feel free to contact us in the section below. You can also visit our offices at the address provided below.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="contact-top">
                <div class="col-md-5 contact-map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h5>Google Map</h5>
                    <div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
                    </div>
                    <div class="address">
                        <h4>Address</h4>
                        <p> Nairobi Garage</p>
                        <p>7th Floor, Pinetree Plaza, Kaburu Drive </p>
                        <p>Off Ngong Rd. Nairobi.</p>
                        <p>Tel: +254 7XX XXX XXX</p>
                        <p>Email : <a href="mailto:example@gmail.com">example@wakande.com</a></p>
                    </div>
                </div>
                <div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <h5>Contact Form</h5>
                    <form>
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Name </p>
                                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Phone number</p>
                                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="grid-contact">
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Email</p>
                                <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                            </div>
                            <div class="col-md-6 contact-grid">
                                <p class="your-para">Password</p>
                                <input type="Password" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <p class="your-para msg-para">MESSAGE</p>
                        <textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
                        <div class="send">
                            <input type="submit" value="Send " >
                        </div>
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
	    </div>
	</div>
    <!-- // Content -->

@endsection
