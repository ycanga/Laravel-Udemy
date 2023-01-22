@extends('layouts.app')
@section("title", "Index Sayfası")
@section("content")

    {{--    <?php--}}
    {{--            for ($i=0;$i<=10;$i++)--}}
    {{--                echo $i." ";--}}
    {{--        ?>--}}

    {{--    @for($i=0;$i<=10;$i++)--}}
    {{--        {{$i}}--}}
    {{--    @endfor--}}

    <?php
    $dizi = ["PHP", "bootstrap", "js"];
//        foreach ($dizi as $key)
//            echo $key." ";
    ?>
    {{--    @foreach($dizi as $key)--}}
    {{--        {{$key}}--}}
    {{--    @endforeach--}}

    <?php
    $deger = 0;
//        while($deger < 10)
//            echo $deger++." ";
    ?>


    {{--@while($deger < 10)--}}
    {{--    {{$deger}}--}}
    {{--    @php($deger++)--}}
    {{--@endwhile--}}

    {{--    ForElse--}}
    {{--    @php($dizi=["php"])--}}
    {{--    @if(count($dizi)>0)--}}
    {{--        @foreach($dizi as $key)--}}
    {{--            <li>{{$key}}</li>--}}
    {{--        @endforeach--}}
    {{--    @else--}}
    {{--        Eleman bulunamadı--}}
    {{--    @endif--}}

    {{--    @php($dizi=["php","bootstrap","js"])--}}
    {{--    @forelse($dizi as $key)--}}
    {{--        <li>{{$key}}</li>--}}
    {{--    @empty--}}
    {{--        eleman bulunamadı--}}
    {{--    @endforelse--}}

    @php($dizi=["php","bootstrap","js"])
    <ul>
        @foreach($dizi as $key)
            <li>{{$loop->depth}} {{$key}}</li> {{-- depth kısmı değişkendir araştırılabilir. --}}
        @endforeach
    </ul>

@endsection
