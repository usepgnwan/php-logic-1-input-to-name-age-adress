<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title">Tambah Data</h5>			    			    
					<form method="post" action="">
					   <div class="form-group">
					    <label for="Nama">Nama</label>
					    <input type="text" class="form-control" placeholder="Nama" name="nama">
					    <small id="emailHelp" class="form-text text-muted"><?= form_error('nama'); ?></small>
					  </div>
					   <div class="form-group">
					    <label for="Usia">Usia</label>
					    <input type="number" class="form-control" placeholder="Usia" name="usia">
					    <small id="emailHelp" class="form-text text-muted"><?= form_error('usia'); ?></small>
					  </div> 
					  <div class="form-group">
					    <label for="Kota">Kota</label>
					    <input type="text" class="form-control" placeholder="Kota" name="kota">
					    <small id="emailHelp" class="form-text text-muted"><?= form_error('kota'); ?></small>
					  </div>
					  <button type="submit" class="card-link btn btn-primary">Submit</button>
					</form>
			  </div>
			</div>
		</div>
	</div>
</div>