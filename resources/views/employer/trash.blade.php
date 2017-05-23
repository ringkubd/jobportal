@extends('employer.ample.index')
@section('title')
Employer Inbox
@endsection
@section('style')
{{-- {!!Html::style('css/managejobs.css')!!}  --}}
@endsection
@section('script')
{!!Html::script('js/managejob.js')!!}
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
