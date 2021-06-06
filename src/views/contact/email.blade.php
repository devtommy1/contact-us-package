@component('mail::message')
# Introduction
Hello Sir !
There is a new message from {{ $fullname }}
Message :
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
