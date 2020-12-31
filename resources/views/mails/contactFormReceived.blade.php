@component('mail::message')
# Nieuw contact formulier ontvangen

# Naam <br>
{{ $name }}

# Onderwerp <br>
{{ $subject }}

# Bericht <br>
{{ $message }}
@endcomponent
