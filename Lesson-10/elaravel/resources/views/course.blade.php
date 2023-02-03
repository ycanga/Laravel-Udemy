@extends("layouts.app")
@section("title","Course Page Form")
@section("content")
    <div class="container mt-4">
        <h1>Course Page</h1>
        @custom(hr)

        <form action="{{route("courseInsert")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <h2>Kurs Ekle</h2>
                <p>
                    @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </p>
                <!--  <p>{{$errors->first()}}</p>--> <!--Gelen hata mesajlarından sadece birincisini yakalar ve bastırır. -->
                <!--  <p>{{$errors->first('course_content')}}</p> -->

                <!-- <p>
                    @if($errors->has('course_title'))
                        <b>Course Title Hatalı: </b>{{$errors->first('course_title')}}
                    @endif
                </p> -->
                <div class="form-group">
                    <input type="file" name="course_file" id="">
                </div>
                <div class="form-group">
                    <input  class="form-control" name="course_date" type="date">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="course_title" placeholder="Title" value="{{old("course_title")}}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="course_content" placeholder="Content" value="{{old("course_content")}}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="course_must" placeholder="Must" value="{{old("course_must")}}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password" placeholder="Şifre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="password_confirmation" placeholder="Tekrar Şifre">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" name="course_confirm" class="form-check-input" id="exampleCheck1">
                    <input type="checkbox" name="course_confirm" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="form-group">
                    <input class="form-control" type="submit" value="Kurs Ekle">
                </div>
            </div>
        </form>
    </div>
@endsection
