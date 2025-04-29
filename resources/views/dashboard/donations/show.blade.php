<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
{{--                <table class="table text-nowrap text-center">--}}
                <table class="table show-table text-center">
                    <thead>
                    <tr>
                        <th class="col-2">المتبرع</th>
                        <th class="col-2">العنوان</th>
                        <th class="col-2">المبلغ</th>
                        <th class="col-2">السلعة</th>
                        <th class="col-2">الكمية</th>
{{--                        <th class="col-2">العمليات</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($donations as $donation)
                    <tr>
                        <td>{{$donation->name ?? '-'}}</td>
                        <td>{{$donation->address ?? '-'}}</td>
                        <td>{{$donation->money_donation->amount ?? '-'}}</td>
                        <td>{{$donation->item_donation->item ?? '-'}}</td>
                        <td>{{$donation->item_donation->quantity ?? '-'}}</td>
{{--                        <td>--}}
{{--                            <div  class="d-flex justify-content-around">--}}
{{--                                <a href="{{route('doctor.edit' , $user->id)}}" class="edit-btn">Edit</a>--}}
{{--                                <a href="#" class="delete-btn" user_id = "{{$user->id}}">Delete</a>--}}

{{--                                <a href="" class="edit-btn">Edit</a>--}}
{{--                                <a href="#" class="delete-btn" user_id = "">Delete</a>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{--<!--Script-->--}}
{{--<script>--}}
{{--    function showPharmacyModal(event) {--}}
{{--        var pharmacyId = event.target.id;--}}
{{--            $.ajax({--}}
{{--                url: "".replace(':id', pharmacyId),--}}
{{--                method: "GET",--}}
{{--                success: function(response) {--}}
{{--                    $('#pharmacyAvatar').attr("src","{{ asset('storage/pharmacies_Images/image') }}".replace('image', response.pharmacy.avatar_image));--}}
{{--                    $('#pharmacyID').text(response.pharmacy.id);--}}
{{--                    $('#pharmacyName').text(response.pharmacy.pharmacy_name);--}}
{{--                    $('#pharmacyOwnerName').text(response.user.name);--}}
{{--                    $('#pharmacyOwnerEmail').text(response.user.email);--}}
{{--                    $('#pharmacyPriority').text(response.pharmacy.priority)--}}
{{--                    $('#pharmacyArea').text(response.areas.find(area=>area.id === response.pharmacy.area_id).name)--}}
{{--                }--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}


