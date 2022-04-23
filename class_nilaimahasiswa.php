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
// buat class nilai mahasiswa
class NilaiMahasiswa{
    // buat property
    public $nim;
    public $matkul;
    public $nilai;
    // buat method atau function construct, hitung nilai, predikat, grade
    function __construct($nim, $matkul, $nilai)
    {
        // fungsi this-> memanggil property dari method lain atau diluar function
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->nilai = $nilai;
    }

    function hitungNilai(){
        return $this->nilai;
    }
    function kelulusan($keterangan){
        if($keterangan >55){
            return 'Anda Lulus';
        }else{
            return 'Anda Tidak Lulus';
        };
    }
    function grade($keterangan){
        if ($keterangan >=85 && $keterangan ==100){
            return 'A';
        }elseif($keterangan >=70 && $keterangan<=84){
            return 'B';
        }elseif($keterangan >=56 && $keterangan<=69){
            return 'C';
        }elseif($keterangan >=36 && $keterangan<=55){
            return 'D';
        }elseif($keterangan >=10 && $keterangan<=35){
            return 'E';
        }else{
            return 'I';
        };
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
