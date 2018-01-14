@component('mail::message')
# Introduction

Thank you for your registration.

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
Start Browsing
@endcomponent
@component('mail::panel', ['url' => ''])
hello world
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
