$(function () {
    $(document).on("click", "#delete", function (e) {
        e.preventDefault();
        var link = $(this).attr("href");

        Swal.fire({
            title: "Apakah kamu yakin.?",
            text: "Akan menghapus data ini..?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus Data",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link;
                Swal.fire("Berhasil!", "Data berhasil dihapus.", "success");
            }
        });
    });
});
