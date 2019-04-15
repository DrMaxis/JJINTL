@extends('layouts.ui')
@section('canonical-url')
{{URL::current()}}
@endsection


@section('xcss')

@endsection




@section('content')

@include('partials.contactUs.title')

@include('partials.contactUs.content')




@endsection

@section('xjs') 


<script>
    
    function refreshCaptcha(){
    $.ajax({
    url: "/refreshcaptcha",
    type: 'get',
      dataType: 'html',        
      success: function(json) {
        $('.refereshrecapcha').html(json);
      },
      error: function(data) {
        alert('Try Again.');
        console.log(data);
      }
    });
    }
    
    
    </script>
@endsection