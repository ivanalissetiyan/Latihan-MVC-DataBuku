$(function() {

    
    $('.tombolTambahData').on('click', function(){

        $('#formModalLabel').html('Tambah Data Buku');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });
    
    $('.tampilModalUbah').on('click', function() {
        
         $('#formModalLabel').html('Ubah Data Buku');
         $('.modal-footer button[type=submit]').html('Ubah Data');
         $('.modal-body form').attr('action', 'http://localhost/belajar/phpmvc/public/dataBuku/ubah');

          const no = $(this).data('no');
         
           $.ajax({
                url: 'http://localhost/belajar/phpmvc/public/dataBuku/getubah',
                data: {no : no},
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#no_buku').val(data.no_buku);
                    $('#judul').val(data.judul);
                    $('#pengarang').val(data.pengarang);
                    $('#tahun_terbit').val(data.tahun_terbit);
                    $('#jenis_buku').val(data.jenis_buku);
                    $('#status').val(data.status);
                    $('#no').val(data.no);
                    // console.log(data);
                } 

           });

     });


});