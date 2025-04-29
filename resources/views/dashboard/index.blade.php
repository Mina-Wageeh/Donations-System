@extends('layouts.dashboard.master')

@section('breadcrumb')
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 d-flex justify-content-between">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لوحة التحكم</h1>
          </div><!-- /.col -->
{{--          <div class="col-sm-6">--}}
{{--            <ol class="breadcrumb float-sm-right">--}}
{{--              <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--              <li class="breadcrumb-item active">Dashboard</li>--}}
{{--            </ol>--}}
{{--          </div>--}}
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
            <div class="small-box bg-info">
              <div class="inner">
                <h4>عدد الكنائس</h4>
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
                        <h4>اجمالي مبالغ التبرعات</h4>
                        <h3>{{$totalMoneyDonations}}</h3>
                    </div>
                    <a href="#" class="small-box-footer">المزيد</a>
                </div>
            </div>


        </div>
      </div>
    </section>
@endsection
