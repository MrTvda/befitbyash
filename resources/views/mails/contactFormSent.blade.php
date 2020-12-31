@component('mail::message')
# Bedankt voor het contact opnemen

Beste {{ $name }},

{{ config('app.name') }} heeft uw mail ontvangen, <br> 
wij proberen u zo snel mogelijk van dienst te zijn!

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
