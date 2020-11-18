const flashData = $('.flash-data').data('flashdata');

if(flashData) {
    Swal.fire({
        icon: 'success',
        title: 'Data Mahasiswa ',
        text: 'Berhasil ' + flashData
    });
}

// TOMBOL HAPUS
$('.tombol-hapus').on('click', function (e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Data mahasiswa akan dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
})