@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة متبرع جديد</h3>
                <form  method="POST" action="{{route('donation.money.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf

                    <div class="mb-3">
                        <label>المتبرع</label>
                        <select class="custom-select" name="giver_id">
                            @foreach($givers as $giver)
                                <option selected class="text-muted" value="{{$giver->id}}">{{$giver->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>مبلغ التبرع</label>
                        <input name="amount" type="text" class="form-control" id="" placeholder="مبلغ التبرع">
                    </div>


                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
