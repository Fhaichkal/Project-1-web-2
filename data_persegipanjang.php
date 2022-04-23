<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Selamat Datang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
// memanggil class dari file class_persegipanjang.php
require_once 'class_persegipanjang.php';

$persegipanjang1 = new Persegipanjang(30, 10);
$persegipanjang2 = new Persegipanjang(50, 20);
echo "<br/>";
// hitung luas persegi panjang dengan getLuas
echo "<br/>Luas persegi panjang 1 adalah = ". $persegipanjang1->getLuas();
echo "<br/>Luas Persegi panjang 2 adalah = ". $persegipanjang2->getLuas();
// hitung keliling persegi panjang dengan getKeliling
echo "<br/>Keliling persegi panjang 1 adalah = ". $persegipanjang1->getKeliling();
echo "<br/>Keliling persegi panjang 2 adalah = ". $persegipanjang2->getKeliling();
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

<hr/>
</div>

<?php
include_once 'footer.php';
?>