@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-3">تحديث بيانات المتبرع</h3>
                    <form  method="POST" action="{{route('giver.update' , $giver->id)}}" enctype="multipart/form-data" class="gy-3 gx-2">

                        @csrf
                        <div class="mb-3">
                            <label>اسم المتبرع</label>
                            <input name="name" type="text" class="form-control" value="{{$giver->name}}" placeholder="اسم المتبرع">
                        </div>

                        <div class="mb-3">
                            <label>عنوان المتبرع</label>
                            <input name="address" type="text" class="form-control" value="{{$giver->address}}" placeholder="عنوان المتبرع">
                        </div>

                        <div class="mb-3">
                            <label>رقم التليفون</label>
                            <input name="phone" type="text" class="form-control" value="{{$giver->phone}}" placeholder="رقم التليفون">
                        </div>

                        <button type="submit" class="btn btn-success col-md-12">تحديث</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
