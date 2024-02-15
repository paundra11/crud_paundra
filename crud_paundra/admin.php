<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
</head>

<body>
  <?php 
  require_once "function.php";
  navbar("navbar")
  ?>
  <div class="content">
    <section id="home">

      <div class="container">
        <center class="text h3 mt-5 mb-5 ">Daftar member</center>
        <div class="row justify-content-center mt-5">
          <nav>
            <a href="form.php" class="btn btn-primary mb-3">Tambah Member Baru</a>
          </nav>
          <br>

          <div class="table-responsive">

            <table id="example" class="display" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Pembayaran</th>
                  <th>Paket</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "konek.php";
                $sql = "SELECT * FROM tabel_member";
                $query = mysqli_query($db, $sql);
                $no = 1;

                while ($member = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $member['nama'] ?></td>
                    <td><?php echo $member['email'] ?></td>
                    <td><?php echo $member['jk'] ?></td>
                    <td><?php echo $member['bayar'] ?></td>
                    <td><?php echo $member['paket'] ?></td>
                    <td> 
                      <a class="btn btn-primary btn-sm" href="form-edit.php?id=<?php echo $member['id'] ?>">Edit</a>
                      <a class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $member['id'] ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>

          </div>
          <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </div>


      </div>
    </section>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>

</body>

</html>
