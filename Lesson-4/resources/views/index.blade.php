@extends('layouts.app')
@includeif("inc.navbar", ["menu1"=>"Anasayfa1", "menu2"=>"Hakkımızda2"])
@section("title", "Index")
@section("content")
    <h1>BLADE INDEX TEMEL ŞABLONU UYGULANDI</h1>
    Emrah @br yüksel
    @br
    @custom(hr)
    @custom(br)
    @addName(Yunus emre)
@endsection
