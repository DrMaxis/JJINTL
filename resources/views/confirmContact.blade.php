  
@extends('layouts.ui') 
@section('canonical-url')
{{URL::current()}}
@endsection
@section('xcss')



@endsection
 
@section('content') 
{{-- Title --}}
@include('partials.confirmContact.title') 


@include('partials.confirmContact.content')


@endsection

 
 
@section('xjs')





<script>
    (function () {
            
        var count = 10;
            document.getElementById('redirect-button').innerHTML = 'Redirecting to CountDown in <span id="countDown">'+ count + '</span> seconds....' + 'Or <a id="fadeLink"  href="https://jjinternational.com"><span style="text-decoration:underline;">Click here to continue</span> ';
            setInterval(function(){
                count--;
                document.getElementById('countDown').innerHTML = count;
                if (count == 0) {
                    window.location = "{{url('/')}}"; 
                }
            },1000);
        
    })();

</script>
@endsection