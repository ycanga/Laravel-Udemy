{{--@extends('layouts.app')--}}
{{--@section("title", "Index Sayfası")--}}
{{--@section("content")--}}

{{--    <?php--}}
{{--        $sayi = 4;--}}
{{--        if ($sayi > 5)--}}
{{--            echo "sayı 5 ten büyük";--}}
{{--        else if($sayi < 5)--}}
{{--            echo "Sayı 5 ten küçük";--}}
{{--        else--}}
{{--            echo "Sayı 5 e eşit";--}}
{{--        ?>--}}

@php($sayi = 1)

{{--    {{$sayi==4 ? "Eşit" : "Değil"}}--}}
{{--    <?php echo $sayi==5 ? "5 eşit" : "Değil";?>--}}

{{--    @if($sayi>5)--}}
{{--        sayı 5 ten büyük--}}
{{--        @elseif($sayi < 5)--}}
{{--            sayı 5 ten küçük--}}
{{--        @else--}}
{{--        sayı 5 e eşit--}}
{{--    @endif--}}

{{--@unless($sayi)--}}
{{--    ok false--}}
{{--@endunless--}}
{{--@br--}}
{{--@isset($sayi)--}}
{{--    tanımlı--}}
{{--@endisset--}}
{{--@br--}}
{{--@empty($sayi)--}}
{{--    Boş--}}
{{--@endempty--}}

{{--<?php switch ($sayi)--}}
{{--    {--}}
{{--        case 0:--}}
{{--            echo "sayı 0";--}}
{{--            break;--}}
{{--        case 1:--}}
{{--            echo "sayı 1";--}}
{{--            break;--}}
{{--        default:--}}
{{--            echo "sayı eşit değil";--}}
{{--            break;--}}
{{--    }--}}
{{--?>--}}

{{--@switch($sayi)--}}
{{--    @case(0)--}}
{{--        sayı 0 a eşit--}}
{{--        @break--}}
{{--    @case(1)--}}
{{--        sayı 1 e eşit--}}
{{--        @break--}}
{{--    @default--}}
{{--        sayı eşit değil--}}
{{--@endswitch--}}
