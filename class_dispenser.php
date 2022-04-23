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
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $namaMinuman;

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_hargaSegelas($hs){
        return $this->hargaSegelas = $hs;
    }
    public function pengurangan($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil volume bernilai ".$this->volume ." " ."Ml";
    }
}
$air = new Dispenser();
echo $air -> namaMinuman  = "<h1><b>Minuman Segerr</b></h1>";
echo "<hr/>";
echo $air -> set_volume("Volume galon nya 1000 Ml");
echo "<br/>";
echo $air -> set_hargasegelas("Harga segelas Rp. " .number_format("3000",0,".","."));
echo "<br/>";
echo "Pak Joni membeli 1 gelas air yang volumenya " . Dispenser::volumeGelas ."  " ." Ml";
echo "<br/>";
$air->pengurangan(1000);
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
