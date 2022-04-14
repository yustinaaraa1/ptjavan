<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<form method="POST" action="<?php echo base_url('weclcome/tambah_aksi'); ?>"">
				<div class="row">
					<div class="col-md-6">
					
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control">
							<?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control">
								<option value="">--Pilih Status--</option>
								<option value="anak">Anak</option>
								<option value="cucu">Cucu</option>
							</select>
							<?php echo form_error('status','<div class="text-small text-danger">','</div>'); ?>
						</div>

						<div class="form-group">
							<label>Gender</label>
							<select name="jenis_kelamin" class="form-control">
								<option value="">--Pilih Gender--</option>
								<option value="laki-laki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
							<?php echo form_error('gender','<div class="text-small text-danger">','</div>'); ?>
						</div>

						
						<button type="reset" class="btn btn-sm btn-danger">Reset</button>
						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
						<br>
					</div>
				</div>
				</form>
			</div>
		</div>
	</section>
</div>