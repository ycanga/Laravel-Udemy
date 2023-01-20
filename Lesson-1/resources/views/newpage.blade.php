<h1>New Page Sayfası</h1>

<a href="{{route("homepage")}}">Git</a>
<a href="{{route("welcome")}}">welcome</a>
<a href="{{route("newPageParam",['ad'=>'emrah','soyad'=>'yuksel'])}}">NewPagePAram</a>

{{--<p>Method: <?php echo $_SERVER["REQUEST_METHOD"]; ?></p>--}}
<form action="/post" method="post">
    @csrf
    <input type="submit" value="gönder">
</form>
