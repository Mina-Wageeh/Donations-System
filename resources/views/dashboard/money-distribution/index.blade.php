@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('money.distribution.create')}}" type="button" class="btn btn-success rounded w-100 col-12">تحويل مبلغ مالي الي مؤسسة</a>
            </div>
            @include('dashboard.money-distribution.show')
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function()
        {
            $(document).on('click' , '.delete-btn' , function(e)
            {
                e.preventDefault()
                var branch_id = $(this).attr('branch_id')
                var parent = $(this).parent().parent().parent();
                $.ajax({
                    type: 'post',
                    {{--url: '{{route('givers.delete')}}',--}}
                    data:
                        {
                            '_token' : '{{csrf_token()}}',
                            'branch_id' : branch_id
                        },
                    success : function(data)
                    {
                        parent.fadeOut(500);
                    }
                })
            })
        })
    </script>
@endsection
