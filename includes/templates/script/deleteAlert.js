function submitForm(form) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this data.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Deleted successfully!", {
                icon: "success",
                });
            }
        });
    return false;
}
