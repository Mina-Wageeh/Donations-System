function makeAjax(ajax_url, ajax_method, data = {}, progress_data = {}) {
    return $.ajax({
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable && progress_data.status) {
                    var percentComplete = ((evt.loaded / evt.total) * 100);
                    $(progress_data.progress_bar_selector).width(percentComplete.toFixed() + '%');
                    $(progress_data.progress_bar_selector).html(percentComplete.toFixed() + '%');
                    if(percentComplete == 100){
                        $(progress_data.status_msg_selector).html('Processing, Please Wait');
                        $(progress_data.status_msg_selector).removeClass('none');
                    }
                }
            }, false);
            return xhr;
        },
        type: ajax_method,
        url: ajax_url,
        dataType: "json",
        data: data,
        processData: data instanceof FormData ? false : true,
        contentType: false,
        beforeSend: function () {
            if (progress_data.status) {
                $(progress_data.progress_bar_selector).width('0%');
            }
        },
        success: function (response) {

        },
        error: function (response) {
            // alert('Error when make ajax');
        }
    });
}
