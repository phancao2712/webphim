$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    var elems = Array.prototype.slice.call(
        document.querySelectorAll(".js-switch")
    );

    elems.forEach(function (html) {
        var switchery = new Switchery(html, { size: "small" });
    });

    $(".delete-btn").on("click", function (e) {
        e.preventDefault();

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
                let url = $(this).attr("href");
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    method: "DELETE",
                    url: url,
                    data: {
                        _token: csrfToken
                    },
                    success: function (response) {
                        window.location.reload();
                    },
                    error: function (xhr,status ,error) {
                        swal(xhr.responseJSON.message, {
                            icon: "error",
                        });
                    },
                });
            }
          });
    });
});
