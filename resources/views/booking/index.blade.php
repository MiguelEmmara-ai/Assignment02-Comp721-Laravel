@extends('layouts.main')

@section('container')
    @php
    // Define variables and initialize with empty values
    $fName = $lName = $phoneNumber = $unitNumber = $streetNumber = $streetName = $suburb = $destinationSuburb = $cars = '';
    $fName_err = $lName_err = $phoneNumber_err = $unitNumber_err = $streetNumber_err = $streetName_err = $suburb_err = $destinationSuburb_err = '';
    @endphp
    @include('partials.navbar')
    <!-- Start: Contact Form Clean -->
    <section class="contact-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <form action="booking" method="POST" style="margin-top: 70px;max-width: 1000px;">
                        @csrf

                        <h2 class="text-center">Book A Ride</h2>
                        <div class="mb-3">
                            <p><strong>First Name</strong></p>
                            <input type="text" id="fName" name="fName" placeholder="👤 Miguel" required=""
                                class="form-control @php echo !empty($fName_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $fName; @endphp">
                            <span class="invalid-feedback">@php echo $fName_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Last Name</strong></p>
                            <input type="text" id="lName" name="lName" placeholder="👤 Emmara" required=""
                                class="form-control @php echo !empty($lName_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $lName; @endphp">
                            <span class="invalid-feedback">@php echo $lName_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Contact Phone</strong></p>
                            <input type="text" id="phone" name="phoneNumber" placeholder="☎️ Format = 0123456789"
                                required=""
                                class="form-control @php echo !empty($phoneNumber_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $phoneNumber; @endphp">
                            <span class="invalid-feedback">@php echo $phoneNumber_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Unit Number</strong></p>
                            <input type="text" id="unumber" name="unitNumber" placeholder="🏡 143" required=""
                                class="form-control @php echo !empty($unitNumber_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $unitNumber; @endphp">
                            <span class="invalid-feedback">@php echo $unitNumber_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Street Number</strong></p>
                            <input type="text" id="snumber" name="streetNumber" placeholder="🏡 55" required=""
                                class="form-control @php echo !empty($streetNumber_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $streetNumber; @endphp">
                            <span class="invalid-feedback">@php echo $streetNumber_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Street Name</strong><br></p>
                            <input type="text" id="stname" name="streetName" placeholder="🏡 Arrow Smith Road" required=""
                                class="form-control @php echo !empty($streetName_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $streetName; @endphp">
                            <span class="invalid-feedback">@php echo $streetName_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Suburb Name</strong><br></p>
                            <input type="text" id="sbname" name="suburb" placeholder="🏙️ Auckland CBD" required=""
                                class="form-control @php echo !empty($suburb_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $suburb; @endphp">
                            <span class="invalid-feedback">@php echo $suburb_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Destination Suburb</strong><br></p>
                            <input type="text" id="dsbname" name="destinationSuburb" placeholder="🏙️ Manukau" required=""
                                class="form-control @php echo !empty($destinationSuburb_err) ? 'is-invalid' : ''; @endphp"
                                value="@php echo $destinationSuburb; @endphp">
                            <span class="invalid-feedback">@php echo $destinationSuburb_err; @endphp</span>
                        </div>
                        <div class="mb-3">
                            <p><strong>Selected Car</strong><br></p>

                            <div class="form-check form-check-inline">
                                <label>
                                    <input class="form-check-input" type="radio" name="carsNeed" id="inlineRadio1"
                                        value="Scooter" checked required>
                                    <img src="assets/img/cars/Scooter.png" alt="Car 1">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input class="form-check-input" type="radio" name="carsNeed" id="inlineRadio2"
                                        value="Hatchback" required>
                                    <img src="assets/img/cars/Hatchback.png" alt="Car 2">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input class="form-check-input" type="radio" name="carsNeed" id="inlineRadio3"
                                        value="Suv" required>
                                    <img src="assets/img/cars/Suv.png" alt="Car 3">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input class="form-check-input" type="radio" name="carsNeed" id="inlineRadio4"
                                        value="Sedan" required>
                                    <img src="assets/img/cars/Sedan.png" alt="Car 4">
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label>
                                    <input class="form-check-input" type="radio" name="carsNeed" id="inlineRadio5"
                                        value="Van" required>
                                    <img src="assets/img/cars/Van.png" alt="Car 5">
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            @php
                                $date = date('Y-m-d');
                            @endphp
                            <p><strong>Pick-Up Date</strong><br></p>
                            <input class="form-control form-control-lg" type="date" id="pickUpDate" name="pickUpDate"
                                required="" value=@php echo $date; @endphp>
                        </div>
                        <div class="mb-3">
                            @php
                                $dateTime = new DateTime('now', new DateTimeZone('Pacific/Auckland'));
                            @endphp
                            <p><strong>Pick-Up Time</strong><br></p>
                            <input class="form-control form-control-lg" type="time" id="pickUpTime" name="pickUpTime"
                                required="" value=@php echo $dateTime->format('H:i A'); @endphp>
                            <!-- @php echo $dateTime->format('H:i A'); @endphp -->
                        </div>
                        <div class="d-flex d-xxl-flex justify-content-xxl-center mb-3">
                            <input class="btn btn-secondary flex-fill" type="submit" name="book-button"
                                style="background: rgb(254,209,54);" value="Book">

                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <section id="map-head" class="map-clean" id="ride-map" style="margin-top: 70px;">
                        <div class="container">
                            <div class="intro">
                                <h3 class="text-center">Location </h3>
                                <p class="text-center">A Map For Your Convenience </p>
                            </div>
                        </div><iframe allowfullscreen frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB3YYb5sin7I3vXQiaX02RIp9zQn91ClLY&amp;q=Auckland&amp;zoom=15"
                            width="100%" height="450"></iframe>
                    </section>
                </div>
            </div>
        </div>

    </section>
    <!-- End: Contact Form Clean -->
@endsection