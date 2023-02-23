<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Page1Controller extends Controller
{
    public function index()
    {
        // $blog = DB::table('blog')->get();
        // //dd($blog);
        // foreach($blog as $key)
        // {
        //     echo $key->blog_title."<br>";
        // } // Veritabanından tüm verileri çeker.

        // $blog = DB::table('blog')
        //     ->where('blog_id',3)
        //     //->get();
        //     ->first();
        // //dd($blog);
        // echo $blog->blog_title;
        // echo "<br>";
        // echo $blog->blog_content; // First kullanarak verileri tek tek çekebiliriz. Where kullanarak sorgumuzu koşullandırabiliriz.

        // $blog = DB::table('blog')
        //     ->where('blog_id',3)
        //     ->orwhere('blog_id',1)
        //     ->orwhere('blog_id',4)
        //     ->get();
        // dd($blog); // Where koşullarını istediğimiz kadar arttırabiliriz.

        // $blog = DB::table('blog')
        //     ->whereBetween('blog_id', [1,3])
        //     ->get();
        // dd($blog); // Aralık olarak verilen değerler arasında yer alan verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereNotBetween('blog_id', [1,3])
        //     ->get();
        // dd($blog); // Aralık olarak verilen değerler arasında yer almayan verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereIn('blog_id', [1,3])
        //     ->get();
        // dd($blog); // Aralık olarak verilen değerlerdeki verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereNotIn('blog_id', [1,3])
        //     ->get();
        // dd($blog); // Aralık olarak verilen değerler haricinde kalan verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereNull('blog_must')
        //     ->get();
        // dd($blog); // Seçilen kolonun içeriği Null olan verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereNotNull('blog_must')
        //     ->get();
        // dd($blog); // Seçilen kolonun içeriği Null olmayan verileri çeker.
        
        // $blog = DB::table('blog')
        //     ->whereDate('blog_date', '2023-02-4')
        //     ->get();
        // dd($blog); // Date kolonunda yer alan verileri eşleştirmeye çalışır eşleşen verileri çeker.
        
        // $blog = DB::table('blog')
        //     ->whereMonth('blog_date', '02')
        //     ->get();
        // dd($blog); // Date kolonunda yer alan Ay kısmını eşleştirmeye çalışır eşleşen verileri çeker.
        
        // $blog = DB::table('blog')
        //     ->whereDay('blog_date', '02')
        //     ->get();
        // dd($blog); // Date kolonunda yer alan Gün kısmını eşleştirmeye çalışır eşleşen verileri çeker.

        // $blog = DB::table('blog')
        //     ->whereTime('blog_date', '12:00:05')
        //     ->get();
        // dd($blog); // Date kolonunda yer alan Saat kısmını eşleştirmeye çalışır eşleşen verileri çeker.
        
        // $blog = DB::table('blog')
        //     ->whereColumn('blog_title', 'blog_content')
        //     ->get();
        // dd($blog); // Girilen iki kolonun içeriğinin eşit olup olmadığını sorgular eşit olan verileri çeker.

        // $blog = DB::table('blog')
        //     ->where('blog_id', 1)
        //     ->value('blog_title');
        // dd($blog); 
        // echo $blog; // Db den tek bir şekilde sadece istenilen veri çeker.
        
        // $blog = DB::table('blog')->find(intval(1)); // intval kullanarak string değeri int çeviririz find fonksiyonu sadece int değer kabul eder. Bu fonksiyonun kullanılabilmesi için DB tarafında id kolununu 'id' şeklinde isimlendirilmelidir.
        // dd($blog); 

        // $blog = DB::table('blog')->pluck('blog_title');
        // dd ($blog); // Db tarafında verilen kolondaki tüm verileri çeker.

        // $blog = DB::table('blog')
        //     ->count();
        // dd ($blog); // Db de bulunan veri sayısını geri döndürür.

        // $blog = DB::table('blog')
        //     ->min('blog_must');
        //     ->max('blog_must');
        // dd ($blog); // Verilen kolon içerisindeki max/min değeri geri döndürür.

        // $blog = DB::table('blog')
        //     ->where('blog_title', 'Blog title 2')
        //     ->min('blog_must');
        //     ->max('blog_must');
        // dd ($blog); // Min/max durumlarını where ile koşullandırabiliriz.

        // $blog = DB::table('blog')
        //     ->where('id', '1')
        //     ->exists(); // tabloda olan kolon ismi ve aranacak parametre girilir eğer belirtilen kolonda belirtilen parametre bulunuyorsa true döner.
        //     ->doesntExist(); // tabloda olan kolon ismi ve aranacak parametre girilir eğer belirtilen kolonda belirtilen parametre bulunuyorsa false döner.
        // dd($blog);

        // $blog = DB::table('blog')
        //     ->select('blog_title') // sadece belirtilen kolon ismini çeker tekli veri çekilir.
        //     ->select(['blog_title','blog_must']) // tabloda yer alan tüm verilerin belirtilen kolonunda yer alan verilerini çeker.
        //     ->get();
        // dd($blog);
        
        // $blog = DB::table('blog')
        //     // ->select('blog_title as title') // belirtilen kolon ismini yeniden adlandırır. (Alias tanımlama)
        //     ->select(['blog_title as title', 'blog_content as content']) // belritilen kolonları yeniden isimlendirir birden fazla kolon için array yapısı kullanılır.
        //     ->get();
        // dd($blog);


        // <--- JOIN KULLANIMI -->
        // $blog = DB::table('user')
        //     ->join('blog', 'blog.user_id', '=', 'user.id')
        //     ->get();
        // // dd($blog);
        // foreach($blog as $key){
        //     echo $key->user_name.'-'.$key->blog_title.'<br>';
        // } // İki tablodaki içerikleri belirtilen kolonlar üzerinde eşler.

        // $blog = DB::table('user')
        //     ->join('blog', 'blog.user_id', '=', 'user.id')
        //     ->where('user.id', 4)
        //     ->where('user.id', '<' ,4) // küçüktür operatörünün yerine diğer işlem operatörleri kullanılabilir.
        //     ->get();
        // // dd($blog);
        // foreach($blog as $key){
        //     echo $key->user_name.'-'.$key->blog_title.'<br>';
        // } // İki tablodaki içerikleri eşlerken koşul kullanımı

        // $blog = DB::table('user')
        //     ->orderBy('user_name', 'ASC') // girilen kolon içeriğine göre sıralama yapar, ikinci parametre girilmesi zorunlu değildir.
        //     ->get();
        // foreach($blog as $key){
        //     echo $key->id."- ".$key->user_name."<br>";
        // }

        // $blog = DB::table('user')
        //     ->inRandomOrder() //random şekilde veri çeker.
        //     ->first(); // veriyi tek tek çeker yerine get() kullanılarak foreach de değişkeni çağırıp kullanılabilir.
        // dd($blog);

        // $blog = DB::table('user')
        //     ->orderBy('id', 'DESC')
        //     ->limit(1)
        //     ->get();
        // dd($blog); // tablodaki en son veriye ulaşır.

        // $blog = DB::table('user')
        //     ->orderBy('id', 'ASC')
        //     ->offset(3) // girilen değer kadar kayıt atlar ve sonraki kaydı döndürür.
        //     ->limit(2) // girilen değer kadar veri çeker.
        //     ->get();
        // dd($blog);

    /*################################## >>> INSERT IŞLEMLERİ <<< #############################################*/

    
        // $blog = DB::table('blog')->insert([
        //     'blog_title' => 'Blog Title 05',
        //     'blog_content' => 'Blog content 05'
        // ]); // Tek tek veri eklemek için kullanılır.
        
        // $blog = DB::table('blog')->insert(
        //     [
        //         [
        //             'blog_title' => 'Blog Title 06',
        //             'blog_content' => 'Blog content 06'
        //         ],
        //         [
        //             'blog_title' => 'Blog Title 07',
        //             'blog_content' => 'Blog content 07'
        //         ]
        //     ]
        // ); // Birden fazla veriyi tek seferde eklemek için kullanılır.

        // $blog = DB::table('blog')->insertGetId(
        //     [
        //         'blog_title' => 'Blog Title 05',
        //         'blog_content' => 'Blog content 05',
        //         'blog_must' => 5
        //     ]
        // ); // kayıt işlemi yapar işlem tamamlandıktan sonra yapılan kaydın id değerini geri döndürür.
        // echo $blog;



    /*################################## >>> UPDATE İŞLEMLERİ <<< #############################################*/


        // $blog = DB::table('blog')
        //     ->where('id', '1')
        //     ->update(
        //         [
        //             'blog_title' => 'Blog Title 21',
        //             'blog_content' => 'Blog content 21',
        //             'blog_must' => 21
        //         ]
        // );

        // echo $blog;

        // $blog = DB::table('blog')
        //     ->updateOrInsert(
        //         [
        //             'blog_title' => 'Blog Title 31',
        //             'blog_content' => 'Blog content 31',
        //             'blog_must' => 31
        //         ],
        //         [
        //             'blog_title' => 'Blog Title 31',
        //             'blog_content' => 'Blog content 31',
        //             'blog_must' => 31
        //         ] // İlk arrayde ki içeriği tabloda arar bulabilirse ikinci arraydeki gibi günceller bulamazsa ikinci arraydeki değerlerde yeni kayıt oluşturur.
        // );

        // echo $blog;

        // $blog = DB::table('blog')
        //     // ->increment('blog_must', '1'); // Girilen kolondaki değerleri girilen ikinci parametre kadar arttırır.
        //     ->decrement('blog_must', '2'); // Girilen kolondaki değerleri girilen ikinci parametre kadar azaltır.
        // echo $blog;


    /*################################## >>> DELETE İŞLEMLERİ <<< #############################################*/

        
        // $blog = DB::table('blog')
        //     ->Where('id', '13')
        //     ->Delete();
        // echo $blog; // Belirtilen kolondaki belirtilen değere sahip olan veriyi tablodan kalıcı olarak siler.
        
        // $blog = DB::table('blog')
        //     ->truncate();
        // echo $blog; // Belirtilen tablodaki tüm verileri kalıcı olarak siler.


    }
}