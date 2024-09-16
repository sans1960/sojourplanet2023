@extends('front.layouts.base')
@section('title')
FAQs
@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h1 class="patua text-center text-white fs-4">Frequently Asked Questions (FAQs)</h1>

</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5 mb-5">
            <h2 class="patua mb-5 fs-4">About Sojournplanet</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h3 class="accordion-header ">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            What services does Sojournplanet offer for luxury travel?
                        </button>
                    </h3>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body texto">
                            We provide comprehensive travel planning services, including luxury accommodation bookings,
                            first-class or private
                            flights, exclusive transfers, and tailor-made unique experiences for each client. We also
                            offer a visa assistance
                            system. Our goal is to create personalized itineraries that meet all your expectations of
                            luxury and exclusivity.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            What makes Sojournplanet different from other luxury travel agencies?
                        </button>
                    </h3>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body texto">
                            Our meticulous attention to detail, exclusive access to unique experiences and luxury
                            properties, and an unwavering
                            commitment to customer satisfaction set us apart. Each trip is designed and executed by
                            experts in luxury travel,
                            ensuring an unmatched experience from start to finish no matter the destination. In
                            addition, we will design your trip
                            to any part of the world you want to visit.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree ">
                            Is Sojournplanet committed to sustainable tourism?
                        </button>
                    </h3>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body texto">
                            Yes, we are committed to responsible and sustainable travel practices. We work with partners
                            who share our dedication to
                            the environment, local culture, and the economy of each destination, ensuring that your
                            travels have a positive impact.
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="patua mt-5 mb-5 fs-4">Tailor-made trips</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample2">
                <div class="accordion-item">
                    <h3 class="accordion-header ">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                            Can I fully customize my travel itinerary?
                        </button>
                    </h3>
                    <div id="flush-collapse2" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body texto">
                            Absolutely. Customization is the essence of our services. From accommodations to daily
                            activities, everything is planned
                            according to your wishes and preferences. We adapt to specific requests to ensure your trip
                            is as unique as you are.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                            What types of custom trips do you offer?
                        </button>
                    </h3>
                    <div id="flush-collapse3" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body texto">
                            We offer personalized trips around the world, tailored exclusively to our clients' interests
                            and needs. Each journey is
                            designed with meticulous attention to every detail, ensuring an exceptional travel
                            experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4 ">
                            How can I customize my trip?
                        </button>
                    </h3>
                    <div id="flush-collapse4" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body texto">
                            You can customize your trip by selecting destinations, activities, accommodations, meals,
                            and more. Our team will
                            collaborate with you to ensure every aspect of the journey meets your expectations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5 ">
                            What level of flexibility do you offer in itineraries?
                        </button>
                    </h3>
                    <div id="flush-collapse5" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body texto">
                            We offer complete flexibility in our itineraries. You can adjust your schedule both before
                            and during the trip according
                            to your preferences.
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="patua mt-5 mb-5 fs-4">Planning my vacations</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample3">
                <div class="accordion-item">
                    <h3 class="accordion-header ">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                            How does Sojournplanet website work?
                        </button>
                    </h3>
                    <div id="flush-collapse6" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Our site is full of itineraries and interesting places to visit, but each and every one of
                            them is just a guide; an
                            example of what you can do. If you like what you see, of course you can use them exactly, or
                            perhaps change them completely to your liking, delving into those details that interest you
                            most, to
                            form the trip of your dreams. Absolutely modifiable and open to change, always adapting to
                            your tastes and preferences
                            without any type of limit. Contact us using our form and a travel expert will work with you
                            to create something
                            completely custom.
                            Remember that if you are clear about the trip of your dreams, you can also contact us
                            directly by email or phone to
                            explain to us what your dream trip is, and we will be there to help you make it a reality.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                            How can I start planning my luxury travel with Sojournplanet?
                        </button>
                    </h3>
                    <div id="flush-collapse7" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            The first step is to contact us via our online form, email, or phone. A travel advisor
                            specializing in luxury
                            experiences will contact you to discuss your preferences, needs, and budget, thus beginning
                            the design of your tailored
                            trip.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8 ">
                            What information do you need from me to start planning my trip?
                        </button>
                    </h3>
                    <div id="flush-collapse8" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            We need to know your desired destinations, travel dates, activity preferences, dietary or
                            mobility needs, and budget.
                            Additionally, any specific interests or special requests would help us tailor the trip to
                            your expectations.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9 ">
                            Do you plan short getaways, or do you only specialize in extended vacations?
                        </button>
                    </h3>
                    <div id="flush-collapse9" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            We organize trips of any duration or intensity, but we typically find that trips of at least
                            4 to 5 nights enable us to
                            provide the value and creativity we are known for. This is just a guideline, and we are
                            happy to assist with any
                            request. Please feel free to reach out with your ideas, and we can discuss further.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10 ">
                            What types of activities can I expect on my trip?
                        </button>
                    </h3>
                    <div id="flush-collapse10" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Activities are chosen based on your interests, whether they include culture, adventure,
                            gastronomy, relaxation,
                            exploration, or other preferences.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11 ">
                            What do travel packages include?
                        </button>
                    </h3>
                    <div id="flush-collapse11" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Our packages include flights, accommodations, local transportation, guides, activities, and,
                            if needed, assistance with
                            visas and vaccinations.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12 ">
                            How do you ensure exclusive travel experiences?
                        </button>
                    </h3>
                    <div id="flush-collapse12" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            We collaborate with specialized local providers and seek out unique experiences that are not
                            available to the general
                            public.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13 ">
                            How much time does it take to organize a trip?
                        </button>
                    </h3>
                    <div id="flush-collapse13" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Generally, you will receive your initial itinerary within a few days. Initially, we will (1)
                            arrange a call to get
                            acquainted with you and your family, friends, or partner. Then we will (2) inquire about
                            your preferences and travel
                            style, and discuss potential ideas for your chosen destination. Following this, (3) we will
                            create a customized
                            itinerary and send it to you within a few days. You can then refine your trip as much as you
                            wish and consult with the
                            other members of your group before finalizing.


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14 ">
                            Can you organize trips for large groups or families?

                        </button>
                    </h3>
                    <div id="flush-collapse14" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Yes, we can organize trips for groups of any size, including large families, ensuring that
                            the needs of each member are
                            accommodated.


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15 ">
                            How do you handle special travel needs for seniors?
                        </button>
                    </h3>
                    <div id="flush-collapse15" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            We customize every aspect of the trip to accommodate specific mobility or health needs,
                            ensuring accessibility and
                            comfort throughout your journey.


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16 ">
                            Are Sojournplanet holidays suitable for children?
                        </button>
                    </h3>
                    <div id="flush-collapse16" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample3">
                        <div class="accordion-body texto">
                            Definitely. Our team consists of parents who understand what makes a family trip fantastic.
                            They've spent years
                            identifying the best destinations and hotels for children of all ages. Visit our family
                            travel page to find the perfect
                            trip for your family.

                        </div>
                    </div>
                </div>

            </div>
            <h2 class="patua mt-5 mb-5 fs-4">Booking my journeys</h2>
            <div class="accordion accordion-flush" id="accordion4">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
                            What occurs once I've booked?
                        </button>
                    </h3>
                    <div id="flush-collapse17" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            Once you're satisfied with your final itinerary and have booked your trip, we'll confirm all
                            details with our local
                            suppliers and start the countdown. You'll receive access to your personalized website
                            section, which includes additional
                            information about your destination and a countdown to your trip. As your departure date
                            approaches and after your final
                            payment is made, we’ll send your final travel documents and arrange a pre-departure call to
                            address any last-minute
                            questions
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18">
                            Can you help me with my visa?
                        </button>
                    </h3>
                    <div id="flush-collapse18" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            Yes, we can provide comprehensive assistance with the visa application process, including
                            filling out forms and tracking
                            your application. You can see the costs associated with this service in
                            <a href="{{route('services')}}" target="_blank" rel="noopener noreferrer">Our Services.</a>

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse19" aria-expanded="false" aria-controls="flush-collapse19">
                            How do you select accommodations?
                        </button>
                    </h3>
                    <div id="flush-collapse19" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            We choose accommodations based on their comfort, luxury, and quality, ensuring they are
                            optimally located to suit your
                            preferences and enhance your travel experience.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse20" aria-expanded="false" aria-controls="flush-collapse20">
                            Do you handle flight reservations?
                        </button>
                    </h3>
                    <div id="flush-collapse20" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            It's totally your choice. We can take care of everything and save you the hassle, but if you
                            prefer to book your own
                            flights, that's perfectly fine too. Just let us know. Additionally, we can arrange private
                            jets if required.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse21" aria-expanded="false" aria-controls="flush-collapse21">
                            Will I be part of a group?
                        </button>
                    </h3>
                    <div id="flush-collapse21" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            All of our trips are private, so you won’t be joining a group unless you’re traveling with
                            your own. There's no maximum
                            group size (within reason), so whether you want to go with five friends or 40 family
                            members, we can accommodate it.
                            We've also established strong relationships with top hotels worldwide, so if you want an
                            entire luxury hotel just for
                            your group, we can arrange a buy-out.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse22" aria-expanded="false" aria-controls="flush-collapse22">
                            Do you offer travel insurance?
                        </button>
                    </h3>
                    <div id="flush-collapse22" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            All our reservations include travel insurance, because we believe that it is a fundamental
                            and priority part to
                            guarantee that everything is under control.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse23" aria-expanded="false" aria-controls="flush-collapse23">
                            Do I need vaccines for my trip?
                        </button>
                    </h3>
                    <div id="flush-collapse23" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            Although it is your responsibility to ensure you have all necessary vaccinations for your
                            trip, we will adequately
                            inform you of the vaccinations required for your favorite destination.
                            Alternatively, we offer a health requirements management service, vaccinations and other
                            medical precautions. You can
                            see details of the service and its costs in <a href="{{route('services')}}" target="_blank"
                                rel="noopener noreferrer">Our Services.</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse24" aria-expanded="false" aria-controls="flush-collapse24">
                            Can I add extra services after I've booked and paid?
                        </button>
                    </h3>
                    <div id="flush-collapse24" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            Yes, definitely. Many of our clients do. We’re very flexible and understand that new ideas
                            may come up over time. Just
                            let us know, and we'll take care of it.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">
                            Can you accommodate specific dietary needs?
                        </button>
                    </h3>
                    <div id="flush-collapse25" class="accordion-collapse collapse" data-bs-parent="#accordion4">
                        <div class="accordion-body texto">
                            Yes, we make sure all your dietary requirements are communicated to hotels and restaurants
                            throughout your trip.
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="patua mt-5 mb-5 fs-4">Payments</h2>
            <div class="accordion accordion-flush" id="accordion5">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse26" aria-expanded="false" aria-controls="flush-collapse26">
                            When is the full payment for my trip due?
                        </button>
                    </h3>
                    <div id="flush-collapse26" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                        <div class="accordion-body texto">
                            The balance payment is required 12 weeks before your intended departure date. If you book
                            less than 12 weeks before
                            departure, the full trip cost is due at the time of booking. Prices are quoted in USD, based
                            on the current daily
                            exchange rates at the time of quotation. Payments must be made in the currency specified on
                            the invoice and can be paid
                            via bank transfer, debit, or credit card. For full booking conditions, please view here.
                            Apologies for the formality,
                            but we want to ensure everything goes smoothly for your trip.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse27" aria-expanded="false" aria-controls="flush-collapse27">
                            How can I make a payment to Sojournplanet?
                        </button>
                    </h3>
                    <div id="flush-collapse27" class="accordion-collapse collapse" data-bs-parent="#accordion5">
                        <div class="accordion-body texto">
                            You can pay for your trip using a credit card or by bank transfer to our account. We don't
                            charge any fees for credit
                            card payments, but your bank may apply fees for transferring money to our USD account, so
                            please check with them for the
                            best way to transfer the funds.
                        </div>
                    </div>
                </div>

            </div>
            <h2 class="patua mt-5 mb-5 fs-4">Cancellations</h2>
            <div class="accordion accordion-flush" id="accordion6">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse28" aria-expanded="false" aria-controls="flush-collapse28">
                            What happens if I need to change or cancel my trip?
                        </button>
                    </h3>
                    <div id="flush-collapse28" class="accordion-collapse collapse" data-bs-parent="#accordion6">
                        <div class="accordion-body texto">
                            We understand that plans can change. Modifications are subject to availability and may incur
                            additional costs. In the
                            event of a cancellation, charges will apply according to our detailed policy at the time of
                            booking. We strive to be as
                            flexible as possible within the constraints of our service providers. You can see more
                            details in our <a href="{{route('booking')}}" target="_blank"
                                rel="noopener noreferrer">Booking
                                Conditions.</a>
                        </div>
                    </div>
                </div>


            </div>
            <h2 class="patua mt-5 mb-5 fs-4">During the holidays</h2>
            <div class="accordion accordion-flush" id="accordion7">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse29" aria-expanded="false" aria-controls="flush-collapse29">
                            Do you provide assistance during the trip?

                        </button>
                    </h3>
                    <div id="flush-collapse29" class="accordion-collapse collapse" data-bs-parent="#accordion7">
                        <div class="accordion-body texto">
                            Yes, we offer 24/7 assistance during your trip. You can contact us at any time for any need
                            or emergency. Our goal is to
                            ensure your peace of mind and satisfaction at every stage of your journey.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse30" aria-expanded="false" aria-controls="flush-collapse30">
                            Who do I contact in case of an emergency?
                        </button>
                    </h3>
                    <div id="flush-collapse30" class="accordion-collapse collapse" data-bs-parent="#accordion7">
                        <div class="accordion-body texto">
                            If you need to reach us in an emergency while traveling, you'll find the contact details in
                            your travel documents or in
                            the Sojournplanet site under emergency contacts. For anything beyond this, we have a 24/7
                            emergency line staffed by our
                            team.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse31" aria-expanded="false" aria-controls="flush-collapse31">
                            I’ve already booked some elements of my trip. Can you organize just my activities or
                            experiences?
                        </button>
                    </h3>
                    <div id="flush-collapse31" class="accordion-collapse collapse" data-bs-parent="#accordion7">
                        <div class="accordion-body texto">
                            Unfortunately, we cannot. We can only add certain experiences if we're also booking the
                            majority of your trip, as this
                            is where we can provide the most value.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse32" aria-expanded="false" aria-controls="flush-collapse32">
                            How do you handle medical emergencies during the trip?
                        </button>
                    </h3>
                    <div id="flush-collapse32" class="accordion-collapse collapse" data-bs-parent="#accordion7">
                        <div class="accordion-body texto">
                            We have protocols in place to handle medical emergencies quickly, including contacts with
                            local clinics and hospitals.
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="patua mt-5 mb-5 fs-4">After the trip</h2>
            <div class="accordion accordion-flush" id="accordion8">
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse33" aria-expanded="false" aria-controls="flush-collapse33">
                            How can I provide feedback on my travel experience?
                        </button>
                    </h3>
                    <div id="flush-collapse33" class="accordion-collapse collapse" data-bs-parent="#accordion8">
                        <div class="accordion-body texto">
                            We highly value your feedback. After your trip, we will invite you to complete a survey to
                            share your experience with
                            us. You can also send us feedback directly by email or call us. Your feedback is crucial for
                            continuously improving our
                            services.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse34" aria-expanded="false" aria-controls="flush-collapse34">
                            I took some great photos on my trip. How can I share them with you?
                        </button>
                    </h3>
                    <div id="flush-collapse34" class="accordion-collapse collapse" data-bs-parent="#accordion8">
                        <div class="accordion-body texto">
                            We genuinely love other people’s travel photos. Send them to your Travel Expert or, if
                            you’re on social media, upload
                            your photo with the hashtag #travelSojournplanet and we’ll see it that way.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse35" aria-expanded="false" aria-controls="flush-collapse35">
                            I’m not ready to book another trip yet, but how do I stay in touch?
                        </button>
                    </h3>
                    <div id="flush-collapse35" class="accordion-collapse collapse" data-bs-parent="#accordion8">
                        <div class="accordion-body texto">
                            No problem, we understand that choosing your next destination and arranging time off work
                            can take time. Just let us
                            know when you’re ready to chat, and we’ll be here. In the meantime, stay connected by
                            signing up for our emails to
                            receive our latest travel news, products, and campaigns.

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection