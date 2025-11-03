<div class="container mt-4">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
 			 Tambah Data MataKuliah
			</button>
			<br><br>
			<h3>Daftar Mata Kuliah</h3>
			<ul class="list-group">
				<?php foreach($data['matakuliah']  as $matakuliah) : ?>
					<li class="list-group-item">
  						<?php echo $matakuliah['nama_mk']; ?>
  						<a href="<?php echo BASEURL; ?>/matakuliah/hapus/<?php echo $matakuliah['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');">
  							hapus
  						</a>
  						<a href="#" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?php echo $matakuliah['id']; ?>">
  							ubah
  						</a>	
  						<a href="<?php echo BASEURL; ?>/matakuliah/detail/<?php echo $matakuliah['id']; ?>" class="badge badge-primary float-right ml-1">
  							detail
  						</a> 	
  					</li>
  				<?php endforeach; ?>
  			</ul>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header">
       			<h5 class="modal-title" id="judulModal">Tambah Data Matakuliah</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			<span aria-hidden="true">&times;</span>
       			</button>
      		</div>
      		<div class="modal-body">
      			<form action="<?php echo BASEURL; ?>/matakuliah/tambah" method="post">
      				<input type="hidden" id="id" name="id">
      				<div class="form-group">
   						<label for="kode_mk">Kode Matakuliah</label>
    					<input type="text" class="form-control" id="kode_mk" name="kode_mk">
  					</div>
  					<div class="form-group">
   						<label for="nama_mk">Nama Matakuliah</label>
    					<input type="text" class="form-control" id="nama_mk" name="nama_mk">
  					</div>
  					<div class="form-group">
   						<label for="jns_mk">Jenis Matakuliah</label>
    					<input type="jns_mk" class="form-control" id="jns_mk" name="jns_mk">
  					</div>
  					<div class="form-group">
   						<label for="sks">SKS</label>
   						<input type="sks" class="form-control" id="sks" name="sks">
   					</div>
      		</div>
     		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        		<button type="submit" class="btn btn-primary">Tambah Data</button>
        		</form>
      		</div>
    	</div>
  	</div>
</div>