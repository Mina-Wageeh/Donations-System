@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">تحديث بيانات المؤسسة</h3>
                    <form  method="POST" action="{{route('institution.update' , $institution->id)}}" enctype="multipart/form-data" class="gy-3 gx-2">

                        @csrf
                        <div class="mb-3">
                            <label>اسم المتبرع</label>
                            <input name="name" type="text" class="form-control" value="{{$institution->name}}" placeholder="اسم المؤسسة">
                        </div>

                        <div class="mb-3">
                            <label>عنوان المتبرع</label>
                            <input name="location" type="text" class="form-control" value="{{$institution->location}}" placeholder="عنوان المؤسسة">
                        </div>

                        <button type="submit" class="btn btn-success col-md-12">تحديث</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
