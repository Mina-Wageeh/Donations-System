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
