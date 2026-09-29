@component('mail::message')
# Pesan Baru dari Form Contact Website MREC

**Nama:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Subjek:** {{ $data['subject'] }}  

**Pesan:**  
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent