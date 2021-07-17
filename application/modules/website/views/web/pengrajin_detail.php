
<section class="products-grids trending pb-4 mt-3">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Detail Produk</h2>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-xl-4 col-lg-4 col-md-4 col-12">
        <div class="single-product">
          <div class="product-img">
            <a href="product-detail.html">
              <img src="<?= base_url('assets/images/' . $getmitraid['foto']); ?>" class="img-fluid" />
            </a>
          </div>

        </div>
      </div>
      <div class="col-xl-8 col-lg-5 col-md-4 col-12">
        <div class="single-product">
          <div class="product-content ml-2">
            <h2 style="font-weight: 500;"><?= $getmitraid['nama']; ?></h2>
            <div class="product-price">
              <span>Kota</span>
              <h3> <?= ($getmitraid['kota']); ?></h3>
            </div>
          </div>
          <div class="product-content">

            <div class="product-content">
              <button class="btn btn-warning btn-lg" ><a href="<?= base_url('website/buatfurniture') ?>">Buat Furniture Sekarang</a></button>
              <!-- <button class="btn btn-success btn-lg mr-3">Buy</button> -->
            </div>
            <?= form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="deskripsi">
  <div class="container">
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Deskripsi</h6>
      </div>
      <div class="card-body">
        <ul>
          <li><a>Alamat : <?= $getmitraid['alamat']; ?></a></li>
          <li><a>Telp : <?= $getmitraid['telp']; ?></a></li>
          <li><a>Email : <?= $getmitraid['email']; ?></a></li>
      </ul>
      </div>
    </div>
  </div>
</section>