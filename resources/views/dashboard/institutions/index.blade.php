@extends('layouts.dashboard.master')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('institution.create')}}" type="button" class="btn btn-success rounded w-100 col-12">اضافة مؤسسة جديدة</a>
            </div>

            @include('dashboard.institutions.show')
            @include('dashboard.institutions.delete')
        </div>
    </div>

@endsection

@section('scripts')

<script>
    let selectedInstitutionId = null;
    let rowToDelete = null;

    $(document).ready(function () {

        $(document).on('click', '.delete-btn', function (e) {
            e.preventDefault();
            selectedInstitutionId = $(this).attr('institution_id');
            rowToDelete = $(this).closest('tr');

            $('#deleteModal').modal('show');
        });

        $(document).on('click', '.delete-confirm', function ()
        {
            $('#exampleModal').modal('hide');

            $.ajax({
                type: 'POST',
                url: '{{ route('institution.delete') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    institution_id: selectedInstitutionId
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
