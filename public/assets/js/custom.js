$(document).ready(function()
{
    $('#giver-search').on('keyup', function()
    {
        var value = $(this).val().toLowerCase();
        $('.show-table tbody tr').filter(function()
        {
            var rowText = $(this).find('td:not([searchable="false"])').text().toLowerCase();
            $(this).toggle(rowText.indexOf(value) > -1);
        });
    });
});

$(document).ready(function()
{
    $('.select2').select2
    ({
        dir: "rtl", // لو الموقع عربي
        allowClear: false
    });

    $('.select2').on('select2:open', function ()
    {
        let searchField = $('.select2-container--open .select2-search__field');
        searchField.attr('placeholder', 'ابحث');
    });
});
