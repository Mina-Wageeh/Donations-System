@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('giver.create')}}" type="button" class="btn btn-success rounded w-100 col-12">اضافة متبرع جديد</a>
            </div>
            @include('dashboard.givers.show')
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
                var giver_id = $(this).attr('giver_id')
                var parent = $(this).parent().parent().parent();
                $.ajax({
                    type: 'post',
                    url: '{{route('giver.delete')}}',
                    data:
                        {
                            '_token' : '{{csrf_token()}}',
                            'giver_id' : giver_id
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
