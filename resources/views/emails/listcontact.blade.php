<x-mail::message>



Thanks you your email : {{$listcontact['email']}}

has been added.








<x-mail::button :url="'https://sojournplanet.com/'">
Web page
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
