@component('mail::message')
<h1>Mr :{{$contactperson}}</h1>
 <h2><i>{{$jobtitle}}</i> job has been Unpublished</h2> 
 <p>To published  contract 4with us</p>
@component('mail::button', ['url' => ''])
Button Text

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
