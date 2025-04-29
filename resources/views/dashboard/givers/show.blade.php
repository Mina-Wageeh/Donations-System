<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
{{--                <table class="table text-nowrap text-center">--}}
                <table class="table show-table text-center">
                    <thead>
                    <tr>
                        <th class="col-2">الاسم</th>
                        <th class="col-2">العنوان</th>
                        <th class="col-2">رقم التليفون</th>
                        <th class="col-2">العمليات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($givers as $giver)
                    <tr>
                        <td>{{$giver->name ?? '-'}}</td>
                        <td>{{$giver->address ?? '-'}}</td>
                        <td>{{$giver->phone ?? '-'}}</td>
                        <td>
                            <div  class="d-flex justify-content-around">
                                <a href="{{route('giver.edit' , $giver->id)}}" class="edit-btn text-success">تعديل</a>
                                <a href="#" class="delete-btn " giver_id = "{{$giver->id}}">حذف</a>
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
