<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<style media="screen">
  input[type=submit]{
    background-color: rgb(1, 10, 218);
    color: white;
    font-weight: bolder;
  }
  h1{
    text-align: center;
    padding-top: 20px;
  }
</style>
<body>
  <h1><?php echo $judul; ?></h1><hr>
  <form class="was-validated" action="<?php echo base_url().$action;?>" method="post">
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="id" value="<?php if(isset($data[0]['id'])){echo $data[0]['id']; }; ?>" hidden>
      <input type="text" name="nama" value="<?php if(isset($data[0]['nama'])){echo $data[0]['nama'];}; ?>" class="form-control" id="nama" required placeholder="Masukan nama anda">
    </div>
    <div class="form-group">
      <label for="Alamat">Alamat</label>
      <textarea name="alamat" rows="5" cols="" class="form-control" placeholder="Masukan alamat Anda" required><?php if(isset($data[0]['alamat'])){echo $data[0]['alamat'];}; ?></textarea>
    </div>
    <?php
    $hobi =array(); if(isset($data[0]['hobi'])){$hobi=explode(',',$data[0]['hobi']);} ?>
    <div class="form-group">
      Hobi <br>
      <div class="custom-control custom-checkbox mb-3 custom-control-inline">
        <input type="checkbox" name="hobi[]" value="Kuliner" class="custom-control-input" id="kuliner" <?php if(in_array("Kuliner",$hobi)){echo "checked";} ?> >
        <label for="kuliner" class="custom-control-label">Kuliner</label>
      </div>
      <div class="custom-control custom-checkbox mb-3 custom-control-inline">
        <input type="checkbox" name="hobi[]" value="Music" class="custom-control-input" id="musik" <?php if(in_array("Music",$hobi)){echo "checked";} ?> >
        <label for="musik" class="custom-control-label">Musik</label>
      </div>
      <div class="custom-control custom-checkbox mb-3 custom-control-inline">
        <input type="checkbox" name="hobi[]" value="Membaca" class="custom-control-input" id="membaca" <?php if(in_array("Membaca",$hobi)){echo "checked";} ?> >
        <label for="membaca" class="custom-control-label">Membaca</label>
      </div>
      <div class="custom-control custom-checkbox mb-3 custom-control-inline">
        <input type="checkbox" name="hobi[]" value="Menulis" class="custom-control-input" id="menulis" <?php if(in_array("Menulis",$hobi)){echo "checked";} ?> >
        <label for="menulis" class="custom-control-label">Menulis</label>
      </div>
    </div>
    <div class="form-group">
      Jenis Kelamin <br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="jenkel" value="Laki-Laki" class="custom-control-input" id="laki" <?php if(isset($data[0]['jenis_kelamin'])=="Laki-Laki"){echo "checked";} ?> >
        <label for="laki" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="jenkel" value="Perempuan" class="custom-control-input" id="perempuan" <?php if(isset($data[0]['jenis_kelamin'])=="Perempuan"){echo "checked";} ?>>
        <label for="perempuan" class="custom-control-label">Perempuan</label>
      </div>
    </div><hr><hr>
    <div class="form-group">
      <input type="submit" name="" value="<?php echo $proses ?>" class="btn btn-primary btn-block">
      <input type="reset" name="" value="Reset" class="btn btn-primary btn-block">
    </div>

  </form>
</body>

</html>
