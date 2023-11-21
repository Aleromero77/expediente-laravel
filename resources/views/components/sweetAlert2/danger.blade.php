<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    var title = @json($title ?? '');
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: title,
        showConfirmButton: true,
    })
</script>