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
class Bmi{
    public $berat;
    public $tinggi;

    function __construct($berat, $tinggi){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilaiBMI(){
        $nilaiBMI = $this->berat / $this->tinggi * $this->tinggi;
        return $nilaiBMI;
    }

    public function statusBMI($nilaiBMI){
        if ($nilaiBMI >=30.0){
            return 'Kegemukan (Obesitas)';
        }elseif ($nilaiBMI >=25.0 && $nilaiBMI <=29.9) {
            return 'Kelebihan berat badan';
        }elseif ($nilaiBMI >=24.9 && $nilaiBMI <=18.5) {
            return 'normal (ideal)';
        }else{
            return 'Kekurangan berat badan';
        }
    }
}
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