@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة مؤسسة جديدة</h3>
                <form  method="POST" action="{{route('institution.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf
                    <div class="mb-3">
                        <label>اسم المؤسسة</label>
                        <input name="name" type="text" class="form-control" id="" placeholder="اسم المؤسسة">
                    </div>

                    <div class="mb-3">
                        <label>موقع المؤسسة</label>
                        <input name="location" type="text" class="form-control" id="" placeholder="موقع المؤسسة">
                    </div>

                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
