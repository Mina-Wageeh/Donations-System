@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة تبرع بسلعة</h3>
                <form  method="POST" action="{{route('donation.item.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

                    @csrf


                    <div class="mb-3">
                        <label>المتبرع</label>
                        <select class="custom-select select2" name="giver_id" id="giver_id_multi_select">
                            @foreach($givers as $giver)
                                <option selected class="text-muted" value="{{$giver->id}}">{{$giver->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>السلعة</label>
                        <select class="custom-select select2" name="item_id">
                            @foreach($items as $item)
                                <option selected class="text-muted" value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
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

@section('scripts')

@endsection
