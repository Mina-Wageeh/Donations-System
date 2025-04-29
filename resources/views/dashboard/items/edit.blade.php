@extends('layouts.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة فرع جديد</h3>
                <form  method="POST" action="{{ route('givers.update' , $branch->id) }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="branch_name" type="text" class="form-control" value="{{$branch->name}}" placeholder="اسم الفرع">
                        @error('branch_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <select class="custom-select" name="branch_area">
                            <option selected class="text-muted">اختر المنطقة</option>
                            <option value="المنطقة الاولي">المنطقة الاولي</option>
                            <option value="المنطقة الثانية">المنطقة الثانية</option>
                            <option value="المنطقة الثالثة">المنطقة الثالثة</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input name="branch_location" type="text" class="form-control" value="{{$branch->location}}" placeholder="عنوان الفرع">
                        @error('branch_location')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
