<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
  </head>
  <body>
    <h1>MY Biodata</h1>
  <table>
    <tr>
      <td>Nama</td>
      <td><?php echo $nama; ?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
      <td>Hobi</td>
      <td><?php echo $hoby; ?></td>
    </tr>
    <tr>
      <td>My URL Base</td>
      <td><?php echo $url; ?></td>
    </tr>
  </table>
  </body>
</html>
