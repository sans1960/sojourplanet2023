<x-mail::message>

Thanks {{ $contact->name }}

Your tour {{$contact->tour->name}}

We work to successfully organize your trip

<x-mail::button :url="'https://sojournplanet.com/'">
Web page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
