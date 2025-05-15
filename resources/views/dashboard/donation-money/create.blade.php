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
                        <label for="giver-select">المتبرع</label>
                        <select class="form-control select2" name="giver_id" id="giver-select">
                            @foreach($givers as $giver)
                                <option value="{{$giver->id}}">{{$giver->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>مبلغ التبرع</label>
                        <input name="amount" type="text" class="form-control" id="" placeholder="مبلغ التبرع">
                    </div>

                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif


                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


@section('scripts')
    <script>

    </script>
@endsection
