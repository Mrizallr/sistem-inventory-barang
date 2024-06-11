<section class="content">
  <?php echo $this->session->flashdata('pesan'); ?>
  <div class="box box-warning" style="margin-top: 10px">
    <div class="box-body">
      <div class="row">
        <?php foreach ($barang as $brng): ?>
          <div class="col-md-3 col-sm-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><?php echo $brng->nama; ?></h3>
              </div>
              <div class="panel-body">
                <p>Kode: <?php echo $brng->kode; ?></p>
                <p>Harga: <?php echo rupiah($brng->harga); ?></p>
                <p>Stok: <?php echo $brng->stok; ?></p>
                <p>Kategori: <?php echo $brng->kategori; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>