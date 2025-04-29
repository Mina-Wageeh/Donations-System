@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة سلعة جديدة</h3>
                <form  method="POST" action="{{route('item.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf


                    <div class="mb-3">
                        <label>السلعة</label>
                        <input name="name" type="text" class="form-control" id="" placeholder="السلعة">
                    </div>

                     <div class="mb-3">
                        <label>الكمية</label>
                        <input name="quantity" type="text" class="form-control" id="" placeholder="الكمية">
                     </div>


                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
