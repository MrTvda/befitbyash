@component('mail::message')
# {{ config('app.name') }} heeft jouw inschrijving ontvangen

Beste {{ $name }}, 

Wij hebben jouw inschrijving ontvangen met de volgende gegevens:

# Naam <br>
{{ $name }}

# Email <br>
{{ $email }}

# Telefoonnummer
{{ $phoneNumber }}

# Adres <br>
{{ $address }}, {{ $postalCode }}, {{ $country }}

Met vriendelijke groet,<br>
{{ config('app.name') }}
@endcomponent
