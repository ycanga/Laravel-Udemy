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
                <div class="form-group">
                    <input type="file" name="course_file" id="">
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
                    <input class="form-control" type="submit" value="Kurs Ekle">
                </div>
            </div>
        </form>
    </div>
@endsection
