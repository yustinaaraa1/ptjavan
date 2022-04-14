<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo $title; ?></h1>
		</div>
		<div class="card">
			<div class="card-body">
				<?php foreach ($keluarga as $kl): ?>
				<form method="POST" action="<?php echo base_url('weclcome/update_aksi'); ?>"">
				<div class="row">
					<div class="col-md-6">
					
						<div class="form-group">
							<label>Nama</label>
							<input type="hidden" name="id" value="<?php echo $kl->id ?>">
							<input type="text" name="nama" class="form-control" value="<?php echo $kl->nama ?>" required>
							<?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
						</div>
						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control">
								<option <?php if ($kl->status=='anak') { echo "selected='selected'";} ?> value="anak">Anak</option>
								<option <?php if ($kl->status=='cucu') { echo "selected='selected'";} ?> value="cucu">Cucu</option>
							</select>
							<?php echo form_error('status','<div class="text-small text-danger">','</div>'); ?>
						</div>

						<div class="form-group">
							<label>Gender</label>
							<select name="jenis_kelamin" class="form-control">
								<option <?php if ($kl->jenis_kelamin=='laki-laki') { echo "selected='selected'";} ?> value="laki->laki">Laki-laki</option> 
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
			<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>