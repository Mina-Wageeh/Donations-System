@extends('layouts.dashboard.master')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">اضافة تبرع جديد</h3>
                <form  method="POST" action="{{route('donation.store')}}" enctype="multipart/form-data" class="gy-3 gx-2">

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
                        <label>مبلغ التبرع</label>
                        <input name="donation_money_amount" type="text" class="form-control" id="" placeholder="مبلغ التبرع">
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label>السلعة</label>
                            <input name="donation_item_name" type="text" class="form-control" id="" placeholder="السلعة">
                        </div>

                        <div class="col-6">
                            <label>الكمية</label>
                            <input name="donation_item_quantity" type="text" class="form-control" id="" placeholder="الكمية">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success col-md-12">اضافة</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
