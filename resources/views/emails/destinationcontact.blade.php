<x-mail::message>
# {{$contact->destination->name}}


Thanks: {{$contact->name}}  {{$contact->surname}}

We work to successfully organize your trip



<x-mail::button :url="'https://sojournplanet.com/'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
