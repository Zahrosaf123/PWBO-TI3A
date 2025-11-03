$(function() {
	const baseurl = 'http://localhost/PWBO_2411500063/public';

	$('.tombolTambahData').on('click', function() {
		$('#judulModal').html('Tambah Data Matakuliah');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('.modal-body form').attr('action', baseurl + '/matakuliah/tambah');
			$('#kode_mk').val('');
			$('#nama_mk').val('');
			$('#jns_mk').val('');
			$('#sks').val('');
			$('#id').val('');
	});

	$('.tampilModalUbah').on('click', function(e) {
		$('#judulModal').html('Ubah Data Matakuliah');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-body form').attr('action', baseurl + '/matakuliah/ubah');

		const id = $(this).data('id');
		$.ajax({
			url: baseurl + '/matakuliah/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#kode_mk').val(data.kode_mk);
				$('#nama_mk').val(data.nama_mk);
				$('#jns_mk').val(data.jns_mk);
				$('#sks').val(data.sks);
				$('#id').val(data.id);
			}
		});

	});
});