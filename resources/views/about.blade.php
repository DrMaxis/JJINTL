@extends('layouts.ui')
@section('canonical-url')
{{URL::current()}}
@endsection


@section('xcss')

@endsection




@section('content')

@include('partials.aboutus.title')

@include('partials.aboutus.content')




@endsection

@section('xjs') 
@endsection