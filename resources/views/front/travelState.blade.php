@extends('front.layouts.base')
@section('title')
Travel.State.Gov recommendations
@endsection
@section('meta_title2')
Inspiring sights around the world
@endsection
@section('meta_description2')
Inspiring sights around the world

@endsection
@section('content')
<div class="container-fluid d-flex  justify-content-center align-items-center p-2"
    style="background-image:linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url({{ asset('img/bosque.jpg') }});background-size:cover; height:250px;background-position:center;">
    <h1 class="patua text-center text-white fs-4">Travel.State.Gov recommendations</h1>

</div>
<div class="container">
    <div class="row">

        <div class="col-md-8  mx-auto mt-5">
            <h2 class="patua fs-4">Travel safe and informed</h2>
            <p class="open texto">Your safety comes first, especially when it comes to such a rewarding activity as
                traveling.
                To travel
                safely and make
                the most of your destination, it is very important to stay well informed.</p>
            <p class="open texto">Based on the information provided on the <span><a target="_blank"
                        href="https://travel.state.gov/content/travel.html">Travel.State.Gov</a></span> site
                for each of the destinations,
                we have
                applied the warning
                level and recommendations to each destination.</p>
            <p class="open texto">Travel advisories follow a consistent format and use plain language to help U.S.
                citizens
                find and use
                important safety
                information. The travel advisories apply up to four standard levels of advice, describe risks, and
                provide clear steps
                that U.S. citizens should take to help ensure their safety.</p>
            <p class="open texto">Below, we describe each of the warning levels, listing all destinations that are
                classified
                at that
                level. In addition
                to considering the information shown here, we recommend that you visit the <span><a target="_blank"
                        href="https://travel.state.gov/content/travel.html">Travel.State.Gov</a></span> website for
                more detailed
                information.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <h2 style="background-color: #003875" class="patua p-2 text-white text-center fs-4">Level 1 - Exercise Normal
                Precautions.
            </h2>
            <p class="open texto">This is the lowest warning level for safety risks. Any international travel carries
                some risk. Conditions in other
                destinations may differ from those in the United States and may change at any time. The following
                destinations are
                classified at this level:</p>
            <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
                @foreach ($countries1->sortBy('slug') as $country)
                <a href="{{route('country',$country)}}" class="ms-3 nav-link patua">{{$country->name}}</a>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <h2 style="background-color:#FFCC66" class="patua p-2 text-center fs-4">Level 2 - Exercise Increased Caution.
            </h2>
            <p class="open texto">Be aware of heightened security risks. The State Department offers additional advice
                for travelers in these areas in the
                Travel Advisory. Conditions in any destination may change at any time. The following destinations are
                classified at this
                level:</p>
            <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
                @foreach ($countries2->sortBy('slug') as $country)
                <a href="{{route('country',$country)}}" class="ms-3 nav-link patua">{{$country->name}}</a>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <h2 style="background-color:#FF9900" class="patua p-2 text-white text-center fs-4">Level 3 - Reconsider Travel.
            </h2>
            <p class="open texto">Avoid travel due to serious security risks. The Department of State offers additional
                advice for travelers in these
                areas in the Travel Advisory. Conditions in any destination may change at any time. The following
                destinations are
                classified at this level:</p>
            <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
                @foreach ($countries3->sortBy('slug') as $country)
                <a href="{{route('country',$country)}}" class="ms-3 nav-link patua">{{$country->name}}</a>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <h2 style="background-color:#FF0000" class="patua p-2 text-white text-center fs-4">Level 4 - Do not travel.
            </h2>
            <p class="open texto">This is the highest level of warning due to the increased likelihood of
                life-threatening hazards. During an emergency,
                the U.S. government may have very limited ability to provide assistance. The State Department advises
                U.S. citizens not
                to travel to the destination or to leave the destination as soon as it is safe to do so. The State
                Department provides
                additional advice for travelers in these areas in the Travel Advisory. Conditions in any destination can
                change at any
                time. The following destinations are classified at this level:</p>
            <div class="d-flex flex-row flex-wrap p-2 justify-content-center mb-5">
                @foreach ($countries4->sortBy('slug') as $country)
                <a href="{{route('country',$country)}}" class="ms-3 nav-link patua">{{$country->name}}</a>
                @endforeach
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <h2 class="patua fs-4">Varying Levels
            </h2>
            <p class="open texto">The Department of State issues a general level of travel advice for a destination, but
                levels of advice may vary for
                specific locations or areas within a destination. For example, we may advise U.S. citizens to "exercise
                extreme caution"
                (level 2) in a destination, but to "reconsider travel" (level 3) to a particular area of the
                destination. Please review
                all of this information on the <span><a target="_blank"
                        href="https://travel.state.gov/content/travel.html">Travel.State.Gov</a></span> website. For a
                complete list of travel advisories for
                all destinations
                worldwide, visit
                <span><a target="_blank"
                        href="https://travel.state.gov/content/travel.html">travel.state.gov/traveladvisories</a></span>
                .
            </p>

        </div>

    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mt-5 d-flex justify-content-center mb-5">
            <a href="" class="btn btn-outline-dark border border-dark mt-5 mb-5 patua px-3 py-2 rounded-pill">Start to
                plan my
                trip</a>
        </div>
    </div>
</div>
@endsection