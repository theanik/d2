@component('mail::message')
# Introduction

<strong>Email : </strong> {{ $data['email_date'] }} <br>
<strong>Name : </strong> {{ $data['name_data'] }} <br>
<strong>Subject : </strong> {{ $data['subject_deta'] }} <br>

<strong>Message : </strong> {{ $data['message_data'] }} <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ 'Designer Country' }}
@endcomponent
