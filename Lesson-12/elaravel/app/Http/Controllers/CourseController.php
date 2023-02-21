<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Validator;
use App\Rules\Age;

class CourseController extends Controller
{
    public function index()
    {
        return view("course");
    }

    public function course_insert(Request $request)
    {
        // // bail: yapılan kontrollerden biri hatalı olursa devamındaki kontrollerin yapılmasını durdurup sistemin yorulmasını engeller.
        // $validateData = $request->validate([
        //     "course_title" => "bail|required|min:5",
        //     "course_content" => "required"
        // ]);
        
        // return $request->all();

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required'
        // ]);
        // if($validator->fails())
        //     return "Doğrulama işleminde hata var. !"; // form elemanlarını manuel olarak kontrol eder. Geriye vermiş olduğumuz değer döner.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required'
        // ])->validate(); // form elemanlarını manuel olarak kontrol eder. Default olarak tanımlı olan validate uyarısı geri döner.
        
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required'
        // ]);
        // $validator->after(function($validator){
        //     $validator->errors()->add("Ek bilgi","Ben sonradan dahil edildim 1.");
        //     $validator->errors()->add("Ek bilgi1","Ben sonradan dahil edildim 2.");
        // })->validate(); // Default olarak dönen validate uyarılarına aynı style a sahip kişiselleştirilebilir uyarı verilir.

        // $messages=[
        //     'required' => 'Bu alan :attribute çok zorunlu.',
        //     'min' => 'Minimum değerden küçük olamaz. :attribute'
        // ];
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required',
        //     'course_content' => 'min:4'
        // ], $messages)->validate(); // Var olan validate uyarılarını etiket üzerinden değişiklik yapılır ve girilen etiket değerinde hata dönerse verilen hata mesajı ekrana bastırılır.
        
        // $messages=[
        //     'course_title.required' => 'Bu alan :attribute çok zorunlu.',
        //     'min' => 'Minimum değerden küçük olamaz. :attribute'
        // ];
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required',
        //     'course_content' => 'required'
        // ], $messages)->validate(); // Default olan validate uyarılarını etiket üzerinden değişiklik yapılır ancak yapılan değişiklik etiket öncesinde verilen name ile sadece o name değerien sahip elementden hata dönerse çalışır aksi durumlarda default değerler döner.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'sometimes|required',
        //     'course_content' => 'required'
        // ])->validate(); // Belirtilen input name e sahip bir input bulunmuyorsa uyarı ekrana bastırılmaz. Aksi halde form elemanı bulunmasa bile ekrana sürekli olarak uyarı çıkacaktır. 

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'sometimes|required',
        //     'course_content' => 'required',
        //     'course_must' => ['required',new Age]
        // ])->validate(); // RULE oluşturulur rule içerisinde verilen şartlara göre geriye uyarı mesajı vs. döner.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'sometimes|required',
        //     'course_content' => 'required',
        //     'course_must' => [
        //         'required',
        //         function($attribute, $value, $fail){
        //             if($value>=18)
        //             $fail($attribute.' 18 Yaşından büyükler kayıt olamaz. !!');
        //         }
        //         ]
        // ])->validate(); // RULE hıuzlı bir şekilde oluşturmak için bu yöntem kullanılabilir ancak oldukça kalabalık bir görünüm oluşacağı için rule dosyası içerisinde oluşturulması dah tercih edilebilirdir.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'sometimes|required',
        //     'course_content' => 'required',
        //     'course_must' => 'required',
        //     'course_confirm' => 'accepted'
        // ])->validate(); // Checkbox kontrolü yapılır aktif olmadığı sürece form çalışmaz.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required|active_url',
        //     'course_content' => 'required',
        //     'course_must' => 'required',
        //     'course_confirm' => 'accepted'
        // ])->validate(); // active_url etiketi eklendiği taktirde input içeriğinin çalışan bir link olması halinde form çalışır. Aksi halde form çalışmaz.(Girilen linkin gerçekten var olması ve çalışıyor olması gerekiyor.)

        // $validator =Validator::make($request->all(),[
        //     'course_date' => 'after:02/02/2023',
        //     'course_title' => 'required',
        //     'course_content' => 'required',
        //     'course_must' => 'required',
        //     'course_confirm' => 'accepted'
        // ])->validate(); // after kullanılırsa verilen tarihten sonraki bir tarhite seçim yapılması için için kullanıcıya baskı yapılır. Before kullanılırsa verilen tarihten eski bir tarih seçilmesi için kullanıcıya baskı yapılır.
        
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'required',
        //     'course_content' => 'required',
        //     'course_must' => 'required',
        //     'course_confirm' => 'array'
        // ])->validate(); // array kullanıldığında form içerisinden yollanacak olan input değerlerinin dizi halinde yollanması gerektiğine dair baskı uygular.
        
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'email:rfc,dns',
        //     'course_content' => 'required',
        //     'course_must' => 'required',
        //     'course_confirm' => 'array'
        // ])->validate(); // email etiketini kullanınca input verisinin email olması için baskı uygular kulllanıcıya. Ekstra olarak eklenen ":rfc,dns" ile email adresinin gerçekçiliği sorgulanır eğer gerçek bir memail adresi değilse kullanıcıya hata bildirilir.
        
        // $validator =Validator::make($request->all(),[
        //     'password' => 'confirmed'
        // ])->validate(); // Burada şifre tekrarı işlemlerinde kolaylık olması için bir kısayol tanımlanmış. Kısayolun kullanılabilmesi için ikinci parola name kısmı şu şekilde olmalıdır; " name="password_confirmation" " aksi takdirde çalışmayabilir. !

        // $validator =Validator::make($request->all(),[
        //     'course_file' => 'file'
        // ])->validate(); // Burada form içerisinde bir file alanı olup olmadığı kontrolü yapılır. File içeriğinin dolu veya boş olması önemsizdir.

        // $validator =Validator::make($request->all(),[
        //     'course_file' => 'mimes:jpeg,png'
        // ])->validate(); // Yüklenen file dosya tipinin kontrolü verilen dosya tipleri ile kıyaslanır.
        
        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'filled'
        // ])->validate(); // Required mantığıyla çalışan bir komut.

        // $validator =Validator::make($request->all(),[
        //     'course_file' => 'image'
        // ])->validate(); // Yüklenecek olan dosya tipinin sadece resim olarak sabitlenmesini sağlar.

        // $validator =Validator::make($request->all(),[
        //     'course_title' => 'same:course_content'
        // ])->validate(); // Girilen iki name değerinin içeriğinin aynı olmasını şart koşar confirmed benzeri.

        // https://laravel.com/docs/9.x/validation#available-validation-rules linki üzerinden doğrulama kurallarına ulaşabilirsiniz.

    }
}
