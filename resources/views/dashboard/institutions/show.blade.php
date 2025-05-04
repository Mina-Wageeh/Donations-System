<div class="row d-flex justify-content-center">
    <div class="col-12">
        <input type="text" id="giver-search" class="form-control mb-3" placeholder="بحث">
        <div class="card">
            <div class="card-body table-responsive p-0">
{{--                <table class="table text-nowrap text-center">--}}


                <table class="table show-table text-center">
                    <thead>
                    <tr>
                        <th class="col-2">الاسم</th>
                        <th class="col-2">الموقع</th>
                        <th class="col-2">العمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($institutions as $institution)
                    <tr>
                        <td>{{$institution->name ?? '-'}}</td>
                        <td>{{$institution->location ?? '-'}}</td>
                        <td searchable="false">
                            <div  class="d-flex justify-content-around">
                                <a href="{{route('institution.edit' , $institution->id)}}" class="edit-btn text-success">تعديل</a>
                                <a href="#" class="delete-btn " institution_id = "{{$institution->id}}" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
