@extends('front.layouts.base')
@section('title')
Our Services
@endsection
@section('meta_title2')
//
@endsection
@section('meta_description2')
//

@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h1 class="patua text-center text-white fs-4">Our Services</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5 mb-5">
            <p class="open texto">In accordance with our commercial policy and within the luxury travel industry, we
                charge an initial fee for
                consultation, planning and research. Since each client and each trip is unique, it is not possible to
                provide a complete
                list of fares that cover every situation. Below is a general guideline.</p>
            <div class="card open">
                <h2 class="patua card-header bg-white fs-4">
                    Tailor-Made / Bespoke Trips & Vacations
                </h2>
                <div class="card-body">
                    <p>Once we receive your request and your preferences and payment, we will send you a proposal in
                        three business days.</p>
                    <p>Your tailor-made design includes up to 2 modifications of the proposed trip based on your
                        feedback. We will provide a
                        modified itinerary based on your feedback within two business days of receiving your feedback.
                    </p>
                    <p>You will get a personalized online guide about your tailor-made trip, with practical information
                        about your destination,
                        recommended places and much more.</p>
                    <p>When your tailor-made trip is designed, you can either let us book your trip for you using our
                        industry savoir-faire, or
                        you can complete the bookings by yourself.</p>
                    <p>Booking the trip with us includes 24/7 help while in the destination.</p>
                    <ul class="list-group">
                        <li class="list-group-item"><span class="fw-bold me-5">USD $450</span>For trips of up to 14
                            days.
                        </li>
                        <li class="list-group-item"><span class="fw-bold me-5">USD $650</span>For trips of between 15
                            and 30 days.</li>
                        <li class="list-group-item"><span class="fw-bold me-5">USD $850</span>For trips longer than 30
                            days.</li>

                    </ul>
                </div>
                <div class="card-footer bg-white fst-italic">
                    Please note that if you decide to book the whole trip with us, you’ll be reimbursed a 50% of the
                    design fee.
                </div>
            </div>
            <div class="card open mt-5">
                <h2 class="patua card-header bg-white fs-4">
                    Cruises and Escorted Tours - Research and Proposal
                </h2>
                <div class="card-body">


                    <ul class="list-group">
                        <li class="list-group-item">Based on your specifications, we can help you find the best cruise
                            or escorted
                            tour</li>
                        <li class="list-group-item">The service offers the proposal of up to three cruises/tours in
                            three different
                            dates.</li>
                        <li class="list-group-item"><span class="fw-bold">USD $250</span></li>

                    </ul>


                </div>
                <div class="card-footer bg-white fst-italic">
                    If you complete the reservation with us, you’ll be reimbursed a 50% of the fee.
                </div>
            </div>
            <div class="card open mt-5">
                <h2 class="patua card-header bg-white fs-4">
                    Hotels - Research and Proposal
                </h2>
                <div class="card-body">


                    <ul class="list-group">

                        <li class="list-group-item">Based on your specifications, we can help you find the hotel of your
                            dreams. The service offers the proposal of up to
                            three properties in three different dates.</li>
                        <li class="list-group-item"><span class="fw-bold">USD $150</span></li>

                    </ul>


                </div>
                <div class="card-footer bg-white fst-italic">
                    If you complete the reservation with us, you’ll be reimbursed a 50% of the fee.
                </div>
            </div>
            <div class="card open mt-5">
                <h2 class="patua card-header bg-white fs-4">
                    Domestic and International Flights
                </h2>
                <div class="card-body">


                    <ul class="list-group">

                        <li class="list-group-item">Depending on your specifications, we can help you find the most
                            convenient flight to reach your destination. The service
                            offers the proposal of up to three alternatives based on your time availability.</li>
                        <li class="list-group-item"><span class="fw-bold">USD $75</span></li>

                    </ul>


                </div>
                <div class="card-footer bg-white fst-italic">
                    If you complete the reservation with us, you’ll be reimbursed a 50% of the fee.
                </div>
            </div>
            <div class="card open mt-5">
                <h2 class="patua card-header bg-white fs-4">
                    Visa Management Service
                </h2>
                <div class="card-body">


                    <ul class="list-group">

                        <li class="list-group-item">Get our support and step-by-step guidance to obtain your travel
                            visas.</li>
                        <li class="list-group-item"><span class="fw-bold">USD $75</span></li>

                    </ul>


                </div>

            </div>
            <div class="card open mt-5">
                <h2 class="patua card-header bg-white fs-4">
                    Health Requirements, Vaccinations and Other Medical Precautions Management Service
                </h2>
                <div class="card-body">


                    <ul class="list-group">

                        <li class="list-group-item">Get our support and step-by-step guidance in meeting health
                            requirements, vaccinations and other medical precautions for
                            your trip.</li>
                        <li class="list-group-item"><span class="fw-bold">USD $75</span></li>

                    </ul>


                </div>

            </div>

        </div>
    </div>
</div>

@endsection