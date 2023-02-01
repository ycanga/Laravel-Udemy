<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CourseController extends Controller
{
    public function index()
    {
        return view("course");
    }

    public function course_insert(Request $request)
    {
//        dd($request);
//        return $request->all();
//        return $request->input();
//        return $request->input("course_title");
//        echo $request->input("course_title");
//        echo "<br>";
//        echo $request->input("course_content");
//        echo "<br>";
//        echo $request->input("course_must");
//        echo "<br>";
//        echo $request->course_title;
//        echo "<br>";
//        echo $request->course_content;
//        echo "<br>";
//        echo $request->course_must;
//        echo "<br>";
//        return $request->path();
//            if ($request->path() == "courseInsert")
//                return  $request->all();
//            else
//                echo  "Beklenmeyen istek";
//        if ($request->is("admin/*"))
//            return  $request->all();
//        else
//            echo  "Beklenmeyen istek";
//        echo  $request->url();
//        if ($request->isMethod("POST"))
//           echo "post methodu";
//        else
//            echo  "get methodu";
//        return $request->except(["_token"]); // request içeriğinde çıkarmak istediğimizi ayıklar.

//        return $request->only("course_title","_token"); // request içeriğinde sadece istenilen içerikleri bastırır.

//            if ($request->has("course_titles")) // belirtilen name değerine sahip bir değişken olup olmadığını kontrol eder.
//                echo "deger var";
//            else
//                echo "deger yok";

//            if ($request->filled("course_title")) // belirtilen name değerindeki değişkenin içeriğinin boş olup olmadığı kontrol edilir.
//                echo  "deger var";

//        $request->flash(); // hatalı giriş yapıldığı durumda doğru olan input değerlerini saklı tutar.
//        if ($request->filled("course_title"))
//         echo  "deger var";
//        else{
//            return back();
//        }

//        $request->flashOnly("course_content"); // hatalı giriş yapıldığı durumda doğru olan input değerlerini saklı tutar ancak sadece izin verilen inputlardaki değerleri saklı tutar.
//        if ($request->filled("course_title"))
//         echo  "deger var";
//        else{
//            return back();
//        }

//        $request->flashExcept("course_content");  // hatalı giriş yapıldığı durumda sadece istenilmeyen değer dışındakileri sessionda tutar.
//        if ($request->filled("course_title"))
//         echo  "deger var";
//        else{
//            return back();
//        }

       // return $request->file("course_file"); //form içeriğinde yüklenen dosya ile ilgili bilgiler elde edilir.
        //dd($request->file("course_file"));

//        if ($request->hasFile("course_file")){
//            echo "işlem başarılı. !";
//        }else{
//            return redirect()->route("courseGet");
//        }

//        if ($request->hasFile("course_file")){
//             echo "işlem başarılı. !";
//        }else{
//            return back()->with("status", "Dosya eklemelisiniz. !"); // session ile uyarı vermek için kullanılır. ({{session("status")}} şeklinde kerana bastırılır.)
//        }
        // return $request->all();

        $collection = collect([1,2,3,4,5,6,7,8,9,10]);
    // return $collection->all(); //tüm değerleri döndürür.
    // return $collection->dd(); //tüm değerleri döndürür ve ekrana bastırır ve kendinden sonraki işlemleri sonlandırır.

    }
}
