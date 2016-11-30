@extends('layouts.master')
@section('content')
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Registration Form</h2>
                    <h3 class="section-subheading text-muted">Seminas Nasional Teknik Informatika</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                        	<div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                	<h4 for="name" class="section-heading">Name</h4>
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                	<h4 for="email" class="section-heading">Email</h4>
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                	<h4 for="phone" class="section-heading">Handphone</h4>
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                	<h4 class="section-heading">Category</h4>
                                	<label for="mhs" class="section-heading">
                                		<input type="radio" name="optionsCategory" id="mhs" value="opsi1"> Mahasiswa
                                	</label><br>
                                	<label for="umum" class="section-heading">
                                		<input type="radio" name="optionsCategory" id="umum" value="opsi2"> Umum
                                	</label>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <a href="/..">
                                <button type="submit" class="btn btn-xl">Daftar</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection