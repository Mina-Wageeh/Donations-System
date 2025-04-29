@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة متبرع جديد</h3>
                <form  method="POST" action="{{route('giver.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf
                    <div class="mb-3">
                        <label>اسم المتبرع</label>
                        <input name="giver_name" type="text" class="form-control" id="" placeholder="اسم المتبرع">
                    </div>

                    <div class="mb-3">
                        <label>عنوان المتبرع</label>
                        <input name="giver_address" type="text" class="form-control" id="" placeholder="عنوان المتبرع">
                    </div>

                    <div class="mb-3">
                        <label>رقم التليفون</label>
                        <input name="giver_phone" type="text" class="form-control" id="" placeholder="رقم التليفون">
                    </div>

                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
