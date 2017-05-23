@component('mail::message')
<h1>Mr :{{$contactperson}}</h1>
 <h2><i>{{$jobtitle}}</i> job has been published</h2> 
@component('mail::button', ['url' => ''])
Button Text

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
