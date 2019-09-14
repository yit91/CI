



  <div class="row">
  <div class="col-sm-8">
    <h1>Biodata Mahasiswa</h1>
  </div>
  <div class="col-sm-4">
    <div style="margin-top:10px;" class="text-right">
      <a href="<?php echo base_url()."Home/form_biodata" ?>" role="button" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
    </div>
  </div>
</div>

<?php
// foreach ($datadb->result_array() as $key) {
// echo "nama".$key['nama'];
// }
foreach ($datadb as $key) {
}
?>
<table class="table table-sm table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Jenis Kelamin</th>
      <th>Hobi</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <?php foreach ($datadb as $key) {
    ?>
  <tbody>
    <tr>
      <td><?php echo $key['id']; ?></td>
      <td><?php echo $key['nama']; ?></td>
      <td><?php echo $key['alamat']; ?></td>
      <td><?php echo $key['jenis_kelamin']; ?></td>
      <td><?php echo $key['hobi']; ?></td>
      <td>
        <a href="<?php echo base_url()."Home/get_ubah/".$key['id']; ?>"><i class="fa fa-edit"></i></a>
        <a href="<?php echo base_url()."Home/hapus/".$key['id']; ?>"><i class="fa fa-trash" style="color:red;"></i></a>

      </td>
    </tr>
  </tbody>

    <?php
} ?>

</table>
