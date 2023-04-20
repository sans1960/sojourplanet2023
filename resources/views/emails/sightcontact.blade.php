<x-mail::message>
# {{$contact['sight']}}

Thanks {{$contact['name']}}

We work to successfully organize your trip

<x-mail::button :url="'https://sojournplanet.com/'">
Web page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
