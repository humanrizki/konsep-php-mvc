$(function(){
    const as = $('a#Hapus').toArray();
    $.each(as, function( index, value ) {
        const id = $(value).data('id');
        $(value).on('click',function(){
            $(value).attr('href','http://localhost/phpmvc/public/mahasiswa/hapus/'+id);
        })
      });
    
    $('.tombolTambahData').on('click',function(){
        $('#judulModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/tambah');
        
        $('#nama').val('');
        $('#nis').val('');
        $('#kelas').val('');
    });
    $('.tampilModalUbah').on('click',function(){
        $('#judulModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#kelas').val(data.kelas);
                $('#id').val(data.id);
            }
        });
    });
});