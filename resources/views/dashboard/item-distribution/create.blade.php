@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">قم بمنح سلعة الي مؤسسة</h3>
                <form  method="POST" action="{{route('item.distribution.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf

                    <div class="mb-3">
                        <label>المؤسسة المراد التحويل لها</label>
                        <select class="custom-select" name="institution_id">
                            @foreach($institutions as $institution)
                                <option selected class="text-muted" value="{{$institution->id}}">{{$institution->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>السلعة</label>
                        <select class="custom-select" name="item_id">
                            @foreach($items as $item)
                                <option selected class="text-muted" value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>الكمية</label>
                        <input name="quantity" type="text" class="form-control" id="" placeholder="الكمية">
                    </div>

                    <button type="submit" class="btn btn-success col-md-12">تحويل</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
