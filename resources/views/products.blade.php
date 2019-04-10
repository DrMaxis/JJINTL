@extends('layouts.ui')
@section('canonical-url')
{{URL::current()}}
@endsection


@section('xcss')

@endsection




@section('content')

@include('partials.products.allProducts')



@endsection