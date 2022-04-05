@extends('layouts.main')
@section('content')

<div id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>99.99% Positive Reviews</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('img/testimonial-1.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Christopher Heath</h3>
                            <h4>Science technician</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('img/testimonial-2.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Mollie White</h3>
                            <h4>Youtuber</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('img/testimonial-3.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Tom McKenzie</h3>
                            <h4>Videographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('img/testimonial-4.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Ruby Forster</h3>
                            <h4>Photographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="{{asset('img/testimonial-5.jpg')}}" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Leo Conway</h3>
                            <h4>Relationship manager</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection