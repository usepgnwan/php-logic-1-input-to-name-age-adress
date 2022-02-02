
<div class="container mt-3 mb-3">
	<div class="row mb-3">
		<div class="col-md-4">			
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukan Nama Usia Kota" name="keyword">
                    	<small class="form-text text-muted"><?= form_error('keyword'); ?></small>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
		</div>
	</div>

	<?php if ($this->session->flashdata('flashBio')): ?>
	<div class="row">
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		 	<strong><?php echo $this->session->flashdata('flashBio'); ?></strong> 
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	</div>
	<?php endif ?>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Nama</th>
				  <th scope="col">Usia</th>
				  <th scope="col">Kota</th>
				</tr>
				</thead>
				<tbody>
				<?php $no=1; foreach ($biodata as $bio):?>
				<tr>
				  <th scope="row"><?= $no++ ?></th>
				  <td><?= $bio['nama'] ?></td>
				  <td><?= $bio['usia'] ?></td>
				  <td><?= $bio['kota'] ?></td>
				</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>		