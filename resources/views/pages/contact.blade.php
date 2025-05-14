@extends('layouts.app')

@section('content')

  <main class="main pages">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                        @auth
                            <a class="active" href="{{ route('dashboard') }}">Home</a>  
                        @else
                            <a class="active" href="{{ route('home') }}">Home</a>   
                        @endauth
                    <span></span> Contact
                </div>
            </div>
        </div>

        <div class="page-content pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-from-area padding-20-row-col">
                            <h5 class="text-brand mb-10">Contact Form</h5>
                            <h2 class="mb-10">We’d love to hear from you</h2>
                            <p class="text-muted mb-30 font-sm">Whether it's feedback, questions, or partnerships—send us a message below.</p>
                            <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="First Name" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="telephone" placeholder="Your Phone" type="tel" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="subject" placeholder="Subject" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-lg-4 pl-50 d-lg-block d-none">
                        <img class="border-radius-15 mt-50" src="assets/imgs/page/contact-2.png" alt="Contact Hain Express" />
                    </div>
                </div>
            </div>
        
          <br><br>
          <section class="container mb-50 d-none d-md-block">
            <div class="border-radius-15 overflow-hidden" style="height: 400px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0636973459747!2d121.24340927505928!3d14.165033088125317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd61c9cb37f075%3A0xd34a0b066fd35820!2sUniversity%20of%20the%20Philippines%20Los%20Ba%C3%B1os!5e0!3m2!1sen!2sph!4v1715611973796!5m2!1sen!2sph"
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

           <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 m-auto">
                        <section class="mb-50">
                            <div class="row mb-60">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <h4 class="mb-15 text-brand">Office</h4>
                                    Hain Express HQ<br />
                                    Los Baños, Laguna, Philippines<br />
                                    <abbr title="Phone">Phone:</abbr> (+02) 540-025-124553<br />
                                    <abbr title="Email">Email: </abbr>hainexpress@gmail.com<br />
                                    <a href="https://www.google.com/maps/place/University+of+the+Philippines+Los+Baños" 
                                    target="_blank" 
                                    class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                                        <i class="fi-rs-marker mr-5"></i>View map
                                    </a>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <h4 class="mb-15 text-brand">Satellite Kitchen</h4>
                                    Barangay Batong Malake<br />
                                    Los Baños, Laguna<br />
                                    <abbr title="Phone">Phone:</abbr> (+02) 540-025-124553<br />
                                    <abbr title="Email">Email: </abbr>hainexpress@gmail.com<br />
                                    <a href="https://www.google.com/maps/place/University+of+the+Philippines+Los+Baños" 
                                    target="_blank" 
                                    class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                                        <i class="fi-rs-marker mr-5"></i>View map
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="mb-15 text-brand">Main Hub</h4>
                                    UPLB Campus Zone, Lopez Ave.<br />
                                    Los Baños, Laguna<br />
                                    <abbr title="Phone">Phone:</abbr> (+02) 540-025-124553<br />
                                    <abbr title="Email">Email: </abbr>hainexpress@gmail.com<br />
                                    <a href="https://www.google.com/maps/place/University+of+the+Philippines+Los+Baños" 
                                    target="_blank" 
                                    class="btn btn-sm font-weight-bold text-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                                        <i class="fi-rs-marker mr-5"></i>View map
                                    </a>
                                </div>
                            </div>

                        
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection