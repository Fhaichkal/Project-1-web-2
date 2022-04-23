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
    //definisikan system
    //1. Apa bedanya variabel user dengan variable system?
    //jawab : Variable user adalah variable yang tipe datanya dapat berubah sesuka hati user sementara Variable system sudah didefinisikan system yang bisa dilihat pada info.php
    //2. Apa persamaan variabel system dengan variabel konstan?
    // jawab : Variable system sudah terdefinisikan oleh system yang dapat dilihat pada info.php sementara variable konstan berisi nilai yang bersifat tetap dan tidak bisa diubah selama berjalannya kode program.
    echo 'Dokumen Root ' .$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File ' .$_SERVER["PHP_SELF"];
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
    //definisikan system
    //1. Apa bedanya variabel user dengan variable system?
    //jawab : Variable user adalah variable yang tipe datanya dapat berubah sesuka hati user sementara Variable system sudah didefinisikan system yang bisa dilihat pada info.php
    //2. Apa persamaan variabel system dengan variabel konstan?
    // jawab : Variable system sudah terdefinisikan oleh system yang dapat dilihat pada info.php sementara variable konstan berisi nilai yang bersifat tetap dan tidak bisa diubah selama berjalannya kode program.
    echo 'Dokumen Root ' .$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File ' .$_SERVER["PHP_SELF"];
?>
<?php
include_once 'footer.php';
?>