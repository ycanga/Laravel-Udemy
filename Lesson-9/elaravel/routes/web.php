<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // return redirect(\route("courseGet"));//sayfaya yönlendirme yapar.
   // return view('course',["ad"=>"emrah"]);
    return response()->json([
        "course_title"=> "php",
        "course_content"=> "php içerik",
        "course_must"=> "100"
    ]);
});

Route::get("/message",function (){
    return response()->HomeMessage("Burasi mesaj sayfasidir.");//app/Providers/AppServiceProvider.php içerisinde tanımladığımız macro fonksiyonu ekrana mesaj bastırır.
});

Route::get("/url",function(){
    // return url()->full(); //tam url adresini döndürür.
    // return url()->previous(); //önceki ziyaret edilen url adresini döndürür.
    // return redirect(url()->previous()); //önceki ziyaret edilen url adresine yönlendirir.
});

Route::get("/file",function (){
    // return redirect("/download/file.txt"); //dosyayı içeriğini tarayıcıda gösterir.
    return response()->download("download/file.txt"); //dosyayı indirir.
});

Route::get("course", "\App\Http\Controllers\CourseController@index")->name("courseGet");
Route::post("courseInsert", "\App\Http\Controllers\CourseController@course_insert")->name("courseInsert");

Route::get("/collection",function(){
    $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // return $collection->all(); //tüm değerleri döndürür.
    // return $collection->avg(); //tüm değerlerin ortalamasını döndürür.
    // return $collection->count(); //tüm değerlerin eleman sayısını döndürür.
    // return $collection->min(); //tüm değerlerin en küçüğünü döndürür.
    // return $collection->max(); //tüm değerlerin en büyüğünü döndürür.
    // return $collection->dd(); //tüm değerleri döndürür ve ekrana bastırır.
    // return $collection->diff("1"); // tüm değerler içerisinde belirtilen değer ile eşleşmeyen tüm değerleri döndürür.
    // return $collection->duplicates(); //tüm değerler içerisinde tekrar eden değerleri döndürür.
    // return $collection->except("1","3"); //tüm değerler içerisinde belirtilen değer hariç(index) tüm değerleri döndürür.
    // return $collection->only("1","3"); //tüm değerler içerisinde belirtilen değerler(index) döndürür.

    // $filtered = $collection->filter(function ($value, $key) {
    //     return $value > 5;
    // });
    // return $filtered->all(); //tüm değerler içerisinde belirtilen değerden büyük olan değerleri döndürür.

    // $filtered = $collection->filter(function ($value, $key) {
    //     return $value > 5;
    // });
    // return $filtered->first(); //tüm değerler içerisinde belirtilen değerden büyük olan ilk değeri döndürür.
    
    // $filtered = $collection->filter(function ($value, $key) {
    //     return $value > 5;
    // });
    // return $filtered->last(); //tüm değerler içerisinde belirtilen değerden büyük olan son değeri döndürür.
    
    // $collection = collect([
    //     "ad" => "emrah",
    //     "soyad" => "yüksel"
    // ]);
    // return $collection->flatten(); //tüm değerleri tek bir dizi haline getirir.

    // $collection = collect([
    //     "ad" => "emrah",
    //     "soyad" => "yüksel"
    // ]);
    // return $collection->forget("ad"); //tüm değerler içerisinde belirtilen değeri siler.

    // $collection = collect([
    //     "ad" => "emrah",
    //     "soyad" => "yüksel"
    // ]);
    // return $collection->get("ad"); //tüm değerler içerisinde belirtilen değeri döndürür.

    // $collection = collect([
    //     "ad" => "emrah",
    //     "soyad" => "yüksel"
    // ]);
    // return "Sonuc: ".$collection->isEmpty(); //tüm değerler içerisinde değer varsa false yoksa true döndürür.
    // return "Sonuc: ".$collection->isNotEmpty(); //tüm değerler içerisinde değer varsa true yoksa false döndürür.

    // $collection = collect([
    //     ["id"=>"1","ad"=>"emrah"],
    //     ["id"=>"2","ad"=>"ahmet"],
    //     ["id"=>"3","ad"=>"meltem"],
    //     ["id"=>"4","ad"=>"mehmet"],
    // ]);
    // $plucked = $collection->pluck("id");
    // return $plucked->all(); // db den gelen verileri sadece istenilen kolondaki içerikleri döndürür.

    // $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // $collection->pop();
    // return $collection->all(); //tüm değerler içerisinde son değeri siler.

    // $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // $collection->prepend("emrah");
    // return $collection->all(); //tüm değerler içerisinde başa değer ekler.

    // $collection = collect([
    //     "ad" => "emrah",
    //     "soyad" => "yüksel",
    //     "course" => "laravel"
    // ]);
    // $collection->pull("ad"); //tüm değerler içerisinde belirtilen değeri siler ve döndürür.
    // return $collection->all();

    // $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // return $collection->random(2); //tüm değerler içerisinde rastgele bir değer döndürür.

    // $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // if($collection->search(21))
    //     return "var";
    // else
    //     return "yok"; //tüm değerler içerisinde belirtilen değer varsa index değerini yoksa false döndürür.

    // $collection = collect([1,2,3,4,5,6,7,8,9,10,8]);
    // $shuffled = $collection->shuffle();
    // return $shuffled->all(); //tüm değerler içerisinde rastgele değerler atar.

    // $collection = collect([8,2,3,4,5,10,9,1,7,6]);
    // return $collection->sort()->values()->all(); //tüm değerleri küçükten büyüğe sıralar.

    // $collection = collect([
    //     ["id"=>"1","ad"=>"emrah"],
    //     ["id"=>"2","ad"=>"ahmet"],
    //     ["id"=>"3","ad"=>"meltem"],
    //     ["id"=>"4","ad"=>"mehmet"],
    // ]);
    // return $collection->sortBy("ad")->values()->all(); //tüm değerleri belirtilen kolona göre küçükten büyüğe sıralar.

    // $collection = collect([
    //     ["id"=>"1","ad"=>"emrah"],
    //     ["id"=>"2","ad"=>"ahmet"],
    //     ["id"=>"3","ad"=>"meltem"],
    //     ["id"=>"4","ad"=>"mehmet"],
    // ]);
    // return $collection->sortByDesc("id")->values()->all(); //tüm değerleri belirtilen kolona göre büyükten küçüğe sıralar.

    // $collection = collect([1,2,3,4,5]);
    // return $collection->sum(); //tüm değerlerin toplamını döndürür.


    // $collection = collect([1,1,2,3,4,5,5,4]);
    // return $collection->unique()->values()->all(); //tüm değerler içerisinde tekrar eden değerleri siler.
    
    //https://laravel.com/docs/9.x/collections#available-methods //laravel collections dökümantasyonu (Sürüm kısmını değiştirerek erişebilirsiniz.)
});
