@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('giver.create')}}" type="button" class="btn btn-success rounded w-100 col-12">اضافة متبرع جديد</a>
            </div>

            @include('dashboard.givers.delete')
            @include('dashboard.givers.show')
        </div>
    </div>

@endsection

@section('scripts')
{{--    <script>--}}
{{--        $(document).ready(function()--}}
{{--        {--}}
{{--            $(document).on('click' , '.delete-btn' , function(e)--}}
{{--            {--}}
{{--                e.preventDefault()--}}
{{--                var giver_id = $(this).attr('giver_id')--}}
{{--                var parent = $(this).parent().parent().parent();--}}

{{--                $(document).on('click' , '.delete-confirm' , function(e) {--}}
{{--                    $.ajax({--}}
{{--                        type: 'post',--}}
{{--                        url: '{{route('giver.delete')}}',--}}
{{--                        data:--}}
{{--                            {--}}
{{--                                '_token': '{{csrf_token()}}',--}}
{{--                                'giver_id': giver_id--}}
{{--                            },--}}
{{--                        success: function (data) {--}}
{{--                            parent.fadeOut(500);--}}
{{--                        }--}}
{{--                    })--}}

{{--                });--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}

<script>
    let selectedGiverId = null;
    let rowToDelete = null;

    $(document).ready(function () {

        // لما تدوس على زر الحذف
        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            selectedGiverId = $(this).attr('giver_id');
            rowToDelete = $(this).closest('tr');

            // افتح المودال
            $('#deleteModal').modal('show');
        });

        // لما يدوس تأكيد الحذف
        $(document).on('click', '.delete-confirm', function ()
        {
            $('#exampleModal').modal('hide');

            $.ajax({
                type: 'POST',
                url: '{{ route('giver.delete') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    giver_id: selectedGiverId
                },
                success: function (response)
                {
                    rowToDelete.fadeOut(300, function ()
                    {
                        $(this).remove();
                    });
                }
            });
        });

    });
</script>
@endsection
