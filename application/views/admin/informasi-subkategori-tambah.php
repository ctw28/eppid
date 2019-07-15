<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    

    <title>Tambah Menu/Kategori</title>
  </head>
  <body>
    <div class="container">
      <h1>FORM TAMBAH MENU/KATEGORI</h1>

      <?php echo form_open_multipart('admin/sub_kategori_proses', 'class="form-horizontal"', 'role="form"'); 
      ?>
        <div class="form-group">
          <label for="inputParentSubKategori">Pilih Kategori Informasi</label>
          <select class="form-control" id="inputParentSubKategori" name="inputParentSubKategori">
            <option>Parent</option>
            <?php 
              $i=1;
              foreach ($dataSubKategori->result() as $row) {
            ?>
              <option value="<?= $row->id_menu ?>"><?= $row->nama_menu ?></option>

            <?php 
              }

            ?>
          </select>
        </div>
        <div class="form-group">
          <label for="inputNamaSubKategori">Nama Sub Kategori</label>
          <input type="text" class="form-control" id="inputNamaSubKategori" name="inputNamaSubKategori" placeholder="Isikan Nama Kategori">
        </div>
        <div class="form-group">
          <label for="inputKeteranganSubKategori">Keterangan Sub Kategori</label>
          <textarea id="inputKeteranganSubKategori" name="inputKeteranganSubKategori" class="form-control"></textarea> 
        </div>
        <div class="form-group">
          <label for="inputParent">Parent Sub Informasi</label>
          <select class="form-control" id="inputParent" name="inputParent">
            <option>Parent</option>
            <?php 
              $i=1;
              foreach ($dataSubKategori->result() as $row) {
            ?>
              <option value="<?= $row->id_informasi ?>"><?= $row->judul_informasi ?></option>

            <?php 
              }

            ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>      
    </div>
    <div class="container">
      <table class="table table-dark">
        <thead>
          <th>No.</th>
          <th>Nama Kategori</th>
          <th>Nama Sub Kategori</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </thead>
        <tbody>
          <?php 
            $i=1;
            foreach ($dataSubKategori->result() as $row) {

              ?>
              <tr>
                <td><?= $i++ ?></td>
                <td><?= $row->nama_menu ?></td>
                <td><?= $row->judul_informasi ?></td>
                <td><?= $row->keterangan_menu ?></td>
                <td>
                  <a href="">edit</a>
                  <a href="">hapus</a>
                </td>
              </tr>

              <?php 

            }
          ?>
        </tbody>
      </table>
      
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>