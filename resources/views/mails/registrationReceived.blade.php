@component('mail::message')
# Inschrijving ontvangen

# Naam <br>
{{ $name }}

# Email <br>
{{ $email }}

# Telefoonnummer
{{ $phoneNumber }}

# Adres <br>
{{ $address }}, {{ $postalCode }}, {{ $country }}
@endcomponent
