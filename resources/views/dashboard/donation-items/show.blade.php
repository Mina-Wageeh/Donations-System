<div class="row d-flex justify-content-center">
    <div class="col-12">
        <input type="text" id="giver-search" class="form-control mb-3" placeholder="بحث">
        <div class="card">
            <div class="card-body table-responsive p-0">
{{--                <table class="table text-nowrap text-center">--}}
                <table class="table show-table text-center">
                    <thead>
                    <tr>
                        <th class="col-2">المتبرع</th>
                        <th class="col-2">السلعة</th>
                        <th class="col-2">الكمية</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($itemDonations as $itemDonation)
                    <tr>
                        <td>{{$itemDonation->giver_name ?? '-'}}</td>
                        <td>{{$itemDonation->item_name ?? '-'}}</td>
                        <td>{{$itemDonation->quantity ?? '-'}}</td>
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


