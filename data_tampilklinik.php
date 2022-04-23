<?php
include_once 'header.php';
include_once 'sidebar.php';
?>



    
<div class="container">
<h1>Data BMI Pasien</h1>
<?php
require_once 'class_BMIpasien.php';
require_once 'class_pasien.php';
require_once 'class_BMI.php';

$id = $_POST["kode"];
$namaPasien = $_POST["nama"];
$gender = $_POST["gender"];
$_berat = $_POST['berat'];
$_tinggi = $_POST['tinggi'];

$hitung_bmi = new Bmi($_berat, $_tinggi);
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat (Kg)</th>
            <th>Tinggi (Cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>2022-01-10</td>
            <td>P001</td>
            <td>Ahmad</td>
            <td>L</td>
            <td>69.8</td>
            <td>169</td>
            <td>24.7</td>
            <td>Kelebihan Berat Badan</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2022-01-10</td>
            <td>P002</td>
            <td>Rina</td>
            <td>P</td>
            <td>55.3</td>
            <td>165</td>
            <td>20.3</td>
            <td>Normal (Ideal)</td>
        </tr>
        <tr>
            <td>3</td>
            <td>2022-01-11</td>
            <td>P003</td>
            <td>Lutfi</td>
            <td>L</td>
            <td>45.2</td>
            <td>171</td>
            <td>15.4</td>
            <td>Kekurangan Berat Badan</td>
        </tr>
        <tr>
            <td>4</td>
            <td>2022-01-11</td>
            <td><?php echo $_POST["kode"];?></td>
            <td><?php echo $_POST["nama"]?></td>
            <td><?php echo $_POST["gender"];?></td>
            <td><?php echo $_POST["berat"];?></td>
            <td><?php echo $_POST["tinggi"];?></td>
            <td><?php echo $_hitung_bmi?></td>
            <td></td>
        </tr>
    </tbody>
 </table> 
</div>

</body>
</html>
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