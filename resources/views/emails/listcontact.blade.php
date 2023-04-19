<x-mail::message>



Thanks you your email : {{$listcontact['email']}}

has been added.








<x-mail::button :url="'https://sojournplanet.com/'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
