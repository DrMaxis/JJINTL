@extends('layouts.ui')
@section('canonical-url')
{{URL::current()}}
@endsection


@section('xcss')

@endsection




@section('content');

@include('partials.contactUs.title')

@include('partials.contactUs.content')




@endsection

@section('xjs') 
@endsection