@extends('layouts.dashboard.master')

@section('breadcrumb')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-between">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لوحة التحكم</h1>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h4>عدد المؤسسات</h4>
                    <h3>{{$institutionsCount}}</h3>
                  </div>
                  <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>عدد المتبرعين</h4>
                        <h3>{{$giversCount}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>عدد السلع</h4>
                        <h3>{{$giversCount}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>


            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4>اجمالي التبرعات المالية</h4>
                        <h3>{{$totalMoneyDonations}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>اجمالي التوزيعات المالية</h4>
                        <h3>{{$totalMoneyDistributions}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4>الميزانية الحالية</h4>
                        <h3>{{$totalMoneyDonations - $totalMoneyDistributions}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>

        </div>
      </div>
    </section>
@endsection
