<script src="sweetalert.min.js"></script>

<form method="POST" action="do-something.php" onsubmit="return submitForm(this);">
    <input type="submit" />
</form>

<script>
    function submitForm(form) {
        swal({
            title: "Your Data is Updated Successfully!",
            icon: "success",
            button: "OK",
            });
        return false;
    }
</script>