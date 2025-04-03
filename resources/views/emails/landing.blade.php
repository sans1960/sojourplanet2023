<x-mail::message>
# Travel Contact

Thanks: {{$contact->name}}  {{$contact->surname}}

We will contact you

<x-mail::button :url="'https://sojournplanet.com/'">
Visit web
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
