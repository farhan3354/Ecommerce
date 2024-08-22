@extends('layouts.base')

@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <!-- Contact Section Start -->
<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>Contact Us</h2>
                            <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                marked *</p>
                        </div>
                    </div>
                    <div class="row g-4 mt-md-1 mt-2">
                        <div class="col-md-6">
                            <label for="first" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first" placeholder="Enter Your First Name"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="last" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last" placeholder="Enter Your Last Name"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Enter Your Email Address" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="email2" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="email2"
                                placeholder="Enter Your Phone Number" required="">
                        </div>

                        <div class="col-12">
                            <label for="comment" class="form-label">Comment</label>
                            <textarea class="form-control" id="comment" rows="5" required=""></textarea>
                        </div>

                        <div class="col-auto">
                            <button class="btn btn-solid-default" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>Let's get in touch</h2>
                        <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Address :</h4>
                                <p ><a href='https://maps.app.goo.gl/v8py9s3PL7vWYATb8'>Ali Town Lahore</a></p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Phone Number :</h4>
                                <p><a href='tel:+923141637204'>03141637204</a></p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Email Address :</h4>
                                <p><a href='mailto:farhanbashir3354@gmail.com'>farhanbashir3354@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection



{{-- 





@extends('layouts.base')

@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> <!-- Contact Section Start -->
<section class="contact-section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="materialContainer">
                    <div class="material-details">
                        <div class="title title1 title-effect mb-1 title-left">
                            <h2>Contact Us</h2>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                            <p class="ms-0 w-100">Your email address will not be published. Required fields are
                                marked *</p>
                        </div>
                    </div>
                    <div class="row g-4 mt-md-1 mt-2">
                        <div class="col-md-6">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                        <br>
                
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                        <br>
                
                        </div>
                        
                        <div class="col-md-6">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message">{{ old('message') }}</textarea>
                            @error('message')
                            <p>{{ $message }}</p>
                        @enderror
                        <br>
                                        </div>

                        <div class="col-auto">
                            <button class="btn btn-solid-default" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contact-details">
                    <div>
                        <h2>Let's get in touch</h2>
                        <h5 class="font-light">We're open for any suggestion or just to have a chat</h5>
                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="map-pin"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Address :</h4>
                                <p>NIT, Faridabad, Haryana, India</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="phone"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Phone Number :</h4>
                                <p>+1 0000000000</p>
                            </div>
                        </div>

                        <div class="contact-box">
                            <div class="contact-icon">
                                <i data-feather="mail"></i>
                            </div>
                            <div class="contact-title">
                                <h4>Email Address :</h4>
                                <p>contact@surfsidemedia.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection --}}