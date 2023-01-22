<h1>BLADE YAPISI</h1>

<?php
//    $ad = "emrah yuksel";
//    echo $ad;
//?>

@php
    $ad = "emrah";
    echo $ad;
@endphp

<br>
Adınız: {{$ad}}
<br>
@php
    $deger = "<script>alert('hack')</script>";
@endphp
{{--{{$deger}}--}}
{{--{!! $deger !!}--}}

{{--Yorum satırı--}}
