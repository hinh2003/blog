@extends('Client.layout.master')

@section('title', 'About')

@section('content')
    <div class="banner">
        <div class="container">
            <div class="banner-top">
                <div class="banner-text">
                    <h2>Aliquam erat</h2>
                    <h1>Suspendisse potenti</h1>
                    <div class="banner-btn">
                        <a href="single.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-end-->
    <!----start-contact---->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h3>CONTACT</h3>
            </div>
            <div class="contact-bottom">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" frameborder="0" style="border:0"></iframe>
                <div class="contact-text">
                    <div class="col-md-4 contact-left">
                        <h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
                        <p>Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                        <div class="address">
                            <h4>Address</h4>
                            <p>The company name,
                                <span>Lorem ipsum dolor,</span>
                                Glasglow Dr 40 Fe 72.</p>
                        </div>
                    </div>
                    <div class="col-md-8 contact-right">
                        <input placeholder="Name" type="text" required>
                        <input placeholder="Email" type="text" required>
                        <textarea placeholder="Message" required></textarea>
                        <div class="submit-btn">
                            <form>
                                <input type="submit" value="SUBMIT">
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
