
<?= $this->extend('cms/index'); ?>
<?= $this->section('content'); ?>

<div class="container px-0 py-5">
  <div class="row">
      <div class="col-md-7"> 


            <div class="card col-md-10 mx-auto">
              <div class="card-header">
                FORM INPUT DATA PINJAMAN
              </div>
              <div class="card-body">
                
                <form action="<?= base_url('/public/index.php/simpan_pinjaman'); ?>" method="POST">
                  <div class="col-md-5">
                    <label for="exampleInputEmail1" class="form-label">NIP</label>
                    <input type="text" class="form-control form-control-sm" name="nip" required>
                  </div>
                  
                  <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" class="form-control form-control-sm" name="nama" required>
                  </div>

                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Pinjaman</label>
                    <input type="text" class="form-control form-control-sm" name="pinjaman" required>
                  </div>

                  <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Jangka Waktu</label>
                    <input type="number" class="form-control form-control-sm" name="jangka_waktu" required>
                  </div>

                  <br><br>
                  <button type="submit" class="btn btn-sm btn-primary" style="width:120px;">Simpan</button>
                  <input type="reset" class="btn btn-sm btn-danger" style="width:120px;" value="Reset">
                </form>

              </div>
            </div>


      </div>
  </div>
</div>
  

<?= $this->endSection(); ?>

<br><br>