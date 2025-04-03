<x-mail::message>



    Thanks: {{$contact->name}}  {{$contact->surname}}

    We will contact you

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
