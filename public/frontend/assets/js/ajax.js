$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

// Thêm 1 ảnh
$("#file").on("change", () => {
    var formData = new FormData();
    var file = $("#file")[0].files[0];
    formData.append("file", file);
    $.ajax({
        url: "/upload",
        processData: false, //illega invocation
        dataType: "json",
        data: formData,
        method: "POST",
        contentType: false, // khong hien o preview
        success: function (result) {
            if (result.success == true) {
                html = "";
                html += '<img src="' + result.path + '" alt="">';
                $("#input-file-img").html(html);
                $("#input-file-img-hiden").val(result.path);
            }
        },
    });
});

// Thêm nhiều ảnh
$("#files").on("change", () => {
    var formData = new FormData();
    var files = $("#files")[0].files;
    for (let index = 0; index < files.length; index++) {
        formData.append("files[]", files[index]);
    }
    $.ajax({
        url: "/uploads",
        method: "POST",
        dataType: "JSON",
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
            if ((result.success = true)) {
                html = "";
                for (let index = 0; index < result.url.length; index++) {
                    html +=
                        '<img src="' +
                        result.url[index] +
                        '" alt=""><input name="tour_anh_chi_tiet[]" type="hidden" value="' +
                        result.url[index] +
                        '">';
                    $("#input-file-imgs").html(html);
                }
            }
        },
    });
});

// Delete
function removeRow(product_id, url) {
    if (confirm("Bạn có chắc chắn muốn xóa không?")) {
        $.ajax({
            url: url,
            data: { product_id },
            method: "GET",
            dataType: "JSON",
            success: function (res) {
                if (res.success == true) {
                    location.reload();
                }
            },
        });
    }
}
