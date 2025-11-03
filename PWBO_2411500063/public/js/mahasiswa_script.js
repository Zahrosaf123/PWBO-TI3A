$(function() {
	const baseurl = 'http://localhost/PWBO_2411500063/public';

	$('.tombolTambahData').on('click', function() {
		$('#judulModal').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', baseurl + '/mahasiswa/tambah');
			$('#nama').val('');
			$('#nim').val('');
			$('#email').val('');
			$('#jurusan').val('');
			$('#id').val('');
	});

	$('.tampilModalUbah').on('click', function(e) {
		$('#judulModal').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', baseurl + '/mahasiswa/ubah');

		const id = $(this).data('id');
		$.ajax({
			url: baseurl + '/mahasiswa/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#nim').val(data.nim);
				$('#email').val(data.email);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});

	});
});