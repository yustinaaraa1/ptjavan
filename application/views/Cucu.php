<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1 align="center"><?php echo $title ?></h1>
      
    </div>
      
      <a href="<?php echo base_url('weclcome/tambah') ?>" class="btn btn-sm btn-primary">Tambah</a>
      <?php echo $this->session->flashdata('pesan'); ?>
      <table class="table table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Status Keluarga</th>
        <th>Aksi</th>
      </tr>
      <tr>
        <?php $i=1; foreach ($keluarga as $kl) :?>
          <td><?php  echo $i++; ?></td>
          <td><?php echo $kl->nama; ?></td>
          <td><?php echo $kl->jenis_kelamin ?></td>
          <td> Sebagai <?php echo $kl->status ?> Budi</td>
          <td>
            <a href="<?php echo base_url('') ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
            <a href="<?php echo base_url('weclcome/update/'.$kl->id); ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
            <a onclick="return confirm('Yakin Mau Hapus')" href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
          </td>
        
      </tr>
      <?php endforeach; ?>
    </table>
      </section>
    </div>