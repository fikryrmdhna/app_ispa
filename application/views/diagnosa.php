<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hai <span><?= $this->session->userdata('nama'); ?></span>, Ini Hasilnya</h1>

  </div>
</div>
<!-- Akhir jumbotron -->

<!-- Start Card -->
<div class="diagnosa">
  <div class="container" style="margin-top:150px; margin-top:-200px;">
    <div class="row justify-content-md-center">
      <div class="col-md-9">

        <div id="accordion">
          <div class="card">
            <div class="card-header card2" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white !important; text-transform: uppercase; ">
              <h5 class="mb-0 text-center">
                Rekap Jawaban Konsultasi
              </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>Nama: <b><?= $this->session->userdata('nama'); ?></b></p>
                <p>Email: <b><?= $this->session->userdata('email'); ?></b></p>
                <table class="table table-hover mt-4">
                  <?php $i = 1 ?>
                  <!-- pengulangan untuk menampilkan nama gejala & gejala yang dipilih -->
                  <?php foreach ($gejala as $g) : ?>
                    <tr>
                      <td>
                        <label>
                          <?= $g['gejala'] ?>
                        </label>
                      </td>
                      <td>
                        <!-- unutk menampilkan data gejala yang dipilih melalui session -->
                        <?= $this->session->userdata('gejala' . $i++); ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <?php

    //pengulangan untuk penyerderhanaan variable
    for ($i = 1; $i <= 31; $i++) {
      $gejala[$i] = strip_tags($this->session->userdata('gejala' . $i));
    }

    //jumlah datalatih per kategori penyakit

    $jumK1 = getOut("Sinusitis");
    $jumK2 = getOut("Tonsilitis, Faringitis, Laringitis (Radang Tenggorokan)");
    $jumK3 = getOut("Bronkitis");
    $jumK4 = getOut("Bronkiolitis");
    $jumK5 = getOut("Pneumonia");
    $jumK6 = getOut("Pleuritis");

    //jumlah total datalatih
    $totK = $jumK1 + $jumK2 + $jumK3 + $jumK4 + $jumK5 + $jumK6;


    // Untuk mencari jumlah di setiap penyakit gejala
    //jumlah gejala
    for ($i = 1; $i <= 31; $i++) {
      // jumlah penyakit
      for ($j = 1; $j <= 6; $j++) {
        $jum[$i][$j] = getKK($gejala[$i], $penyakit[$j - 1]['nama_penyakit'], 'gejala' . $i);
      }
    }

    //rumus perhitungan Naive Bayes, array didapat dari for diatas
    $HA = ($jumK1 / $totK) * ($jum[1][1] / $jumK1) * ($jum[2][1] / $jumK1) * ($jum[3][1] / $jumK1) * ($jum[4][1] / $jumK1) * ($jum[5][1] / $jumK1) * ($jum[6][1] / $jumK1) * ($jum[7][1] / $jumK1) * ($jum[8][1] / $jumK1) * ($jum[9][1] / $jumK1) * ($jum[10][1] / $jumK1) * ($jum[11][1] / $jumK1) * ($jum[12][1] / $jumK1) * ($jum[13][1] / $jumK1) * ($jum[14][1] / $jumK1) * ($jum[15][1] / $jumK1) * ($jum[16][1] / $jumK1) * ($jum[17][1] / $jumK1) * ($jum[18][1] / $jumK1) * ($jum[19][1] / $jumK1) * ($jum[20][1] / $jumK1) * ($jum[21][1] / $jumK1) * ($jum[22][1] / $jumK1) * ($jum[23][1] / $jumK1) * ($jum[24][1] / $jumK1) * ($jum[25][1] / $jumK1) * ($jum[26][1] / $jumK1) * ($jum[27][1] / $jumK1) * ($jum[28][1] / $jumK1) * ($jum[29][1] / $jumK1) * ($jum[30][1] / $jumK1) * ($jum[31][1] / $jumK1);

    $HB = ($jumK2 / $totK) * ($jum[1][2] / $jumK2) * ($jum[2][2] / $jumK2) * ($jum[3][2] / $jumK2) * ($jum[4][2] / $jumK2) * ($jum[5][2] / $jumK2) * ($jum[6][2] / $jumK2) * ($jum[7][2] / $jumK2) * ($jum[8][2] / $jumK2) * ($jum[9][2] / $jumK2) * ($jum[10][2] / $jumK2) * ($jum[11][2] / $jumK2) * ($jum[12][2] / $jumK2) * ($jum[13][2] / $jumK2) * ($jum[14][2] / $jumK2) * ($jum[15][2] / $jumK2) * ($jum[16][2] / $jumK2) * ($jum[17][2] / $jumK2) * ($jum[18][2] / $jumK2) * ($jum[19][2] / $jumK2) * ($jum[20][2] / $jumK2) * ($jum[21][2] / $jumK2) * ($jum[22][2] / $jumK2) * ($jum[23][2] / $jumK2) * ($jum[24][2] / $jumK2) * ($jum[25][2] / $jumK2) * ($jum[26][2] / $jumK2) * ($jum[27][2] / $jumK2) * ($jum[28][2] / $jumK2) * ($jum[29][2] / $jumK2) * ($jum[30][2] / $jumK2) * ($jum[31][2] / $jumK2);

    $HC = ($jumK3 / $totK) * ($jum[1][3] / $jumK3) * ($jum[2][3] / $jumK3) * ($jum[3][3] / $jumK3) * ($jum[4][3] / $jumK3) * ($jum[5][3] / $jumK3) * ($jum[6][3] / $jumK3) * ($jum[7][3] / $jumK3) * ($jum[8][3] / $jumK3) * ($jum[9][3] / $jumK3) * ($jum[10][3] / $jumK3) * ($jum[11][3] / $jumK3) * ($jum[12][3] / $jumK3) * ($jum[13][3] / $jumK3) * ($jum[14][3] / $jumK3) * ($jum[15][3] / $jumK3) * ($jum[16][3] / $jumK3) * ($jum[17][3] / $jumK3) * ($jum[18][3] / $jumK3) * ($jum[19][3] / $jumK3) * ($jum[20][3] / $jumK3) * ($jum[21][3] / $jumK3) * ($jum[22][3] / $jumK3) * ($jum[23][3] / $jumK3) * ($jum[24][3] / $jumK3) * ($jum[25][3] / $jumK3) * ($jum[26][3] / $jumK3) * ($jum[27][3] / $jumK3) * ($jum[28][3] / $jumK3) * ($jum[29][3] / $jumK3) * ($jum[30][3] / $jumK3) * ($jum[31][3] / $jumK3);

    $HD = ($jumK4 / $totK) * ($jum[1][4] / $jumK4) * ($jum[2][4] / $jumK4) * ($jum[3][4] / $jumK4) * ($jum[4][4] / $jumK4) * ($jum[5][4] / $jumK4) * ($jum[6][4] / $jumK4) * ($jum[7][4] / $jumK4) * ($jum[8][4] / $jumK4) * ($jum[9][4] / $jumK4) * ($jum[10][4] / $jumK4) * ($jum[11][4] / $jumK4) * ($jum[12][4] / $jumK4) * ($jum[13][4] / $jumK4) * ($jum[14][4] / $jumK4) * ($jum[15][4] / $jumK4) * ($jum[16][4] / $jumK4) * ($jum[17][4] / $jumK4) * ($jum[18][4] / $jumK4) * ($jum[19][4] / $jumK4) * ($jum[20][4] / $jumK4) * ($jum[21][4] / $jumK4) * ($jum[22][4] / $jumK4) * ($jum[23][4] / $jumK4) * ($jum[24][4] / $jumK4) * ($jum[25][4] / $jumK4) * ($jum[26][4] / $jumK4) * ($jum[27][4] / $jumK4) * ($jum[28][4] / $jumK4) * ($jum[29][4] / $jumK4) * ($jum[30][4] / $jumK4) * ($jum[31][4] / $jumK4);

    $HE = ($jumK5 / $totK) * ($jum[1][5] / $jumK5) * ($jum[2][5] / $jumK5) * ($jum[3][5] / $jumK5) * ($jum[4][5] / $jumK5) * ($jum[5][5] / $jumK5) * ($jum[6][5] / $jumK5) * ($jum[7][5] / $jumK5) * ($jum[8][5] / $jumK5) * ($jum[9][5] / $jumK5) * ($jum[10][5] / $jumK5) * ($jum[11][5] / $jumK5) * ($jum[12][5] / $jumK5) * ($jum[13][5] / $jumK5) * ($jum[14][5] / $jumK5) * ($jum[15][5] / $jumK5) * ($jum[16][5] / $jumK5) * ($jum[17][5] / $jumK5) * ($jum[18][5] / $jumK5) * ($jum[19][5] / $jumK5) * ($jum[20][5] / $jumK5) * ($jum[21][5] / $jumK5) * ($jum[22][5] / $jumK5) * ($jum[23][5] / $jumK5) * ($jum[24][5] / $jumK5) * ($jum[25][5] / $jumK5) * ($jum[26][5] / $jumK5) * ($jum[27][5] / $jumK5) * ($jum[28][5] / $jumK5) * ($jum[29][5] / $jumK5) * ($jum[30][5] / $jumK5) * ($jum[31][5] / $jumK5);

    $HF = ($jumK6 / $totK) * ($jum[1][6] / $jumK6) * ($jum[2][6] / $jumK6) * ($jum[3][6] / $jumK6) * ($jum[4][6] / $jumK6) * ($jum[5][6] / $jumK6) * ($jum[6][6] / $jumK6) * ($jum[7][6] / $jumK6) * ($jum[8][6] / $jumK6) * ($jum[9][6] / $jumK6) * ($jum[10][6] / $jumK6) * ($jum[11][6] / $jumK6) * ($jum[12][6] / $jumK6) * ($jum[13][6] / $jumK6) * ($jum[14][6] / $jumK6) * ($jum[15][6] / $jumK6) * ($jum[16][6] / $jumK6) * ($jum[17][6] / $jumK6) * ($jum[18][6] / $jumK6) * ($jum[19][6] / $jumK6) * ($jum[20][6] / $jumK6) * ($jum[21][6] / $jumK6) * ($jum[22][6] / $jumK6) * ($jum[23][6] / $jumK6) * ($jum[24][6] / $jumK6) * ($jum[25][6] / $jumK6) * ($jum[26][6] / $jumK6) * ($jum[27][6] / $jumK6) * ($jum[28][6] / $jumK6) * ($jum[29][6] / $jumK6) * ($jum[30][6] / $jumK6) * ($jum[31][6] / $jumK6);
    //
  //  echo ($jumK1 . '/' . $totK) . '*' . ($jum[1][1] . '/' . $jumK1) . '*' . ($jum[2][1] . '/' . $jumK1) . '*' . ($jum[3][1] . '/' . $jumK1) . '*' . ($jum[4][1] . '/' . $jumK1) . '*' . ($jum[5][1] . '/' . $jumK1) . '*' . ($jum[6][1] . '/' . $jumK1) . '*' . ($jum[7][1] . '/' . $jumK1) . '*' . ($jum[8][1] . '/' . $jumK1) . '*' . ($jum[9][1] . '/' . $jumK1) . '*' . ($jum[10][1] . '/' . $jumK1) . '*' . ($jum[11][1] . '/' . $jumK1) . '*' . ($jum[12][1] . '/' . $jumK1) . '*' . ($jum[13][1] . '/' . $jumK1) . '*' . ($jum[14][1] . '/' . $jumK1) . '*' . ($jum[15][1] . '/' . $jumK1) . '*' . ($jum[16][1] . '/' . $jumK1) . '*' . ($jum[17][1] . '/' . $jumK1) . '*' . ($jum[18][1] . '/' . $jumK1) . '*' . ($jum[19][1] . '/' . $jumK1) . '*' . ($jum[20][1] . '/' . $jumK1) . '*' . ($jum[21][1] . '/' . $jumK1) . '*' . ($jum[22][1] . '/' . $jumK1) . '*' . ($jum[23][1] . '/' . $jumK1) . '*' . ($jum[24][1] . '/' . $jumK1) . '*' . ($jum[25][1] . '/' . $jumK1) . '*' . ($jum[26][1] . '/' . $jumK1) . '*' . ($jum[27][1] . '/' . $jumK1) . '*' . ($jum[28][1] . '/' . $jumK1) . '*' . ($jum[29][1] . '/' . $jumK1) . '*' . ($jum[30][1] . '/' . $jumK1) . '*' . ($jum[31][1] . '/' . $jumK1) . "<br>";

  //  echo ($jumK2 . '/' . $totK) . '*' . ($jum[1][2] . '/' . $jumK2) . '*' . ($jum[2][2] . '/' . $jumK2) . '*' . ($jum[3][2] . '/' . $jumK2) . '*' . ($jum[4][2] . '/' . $jumK2) . '*' . ($jum[5][2] . '/' . $jumK2) . '*' . ($jum[6][2] . '/' . $jumK2) . '*' . ($jum[7][2] . '/' . $jumK2) . '*' . ($jum[8][2] . '/' . $jumK2) . '*' . ($jum[9][2] . '/' . $jumK2) . '*' . ($jum[10][2] . '/' . $jumK2) . '*' . ($jum[11][2] . '/' . $jumK2) . '*' . ($jum[12][2] . '/' . $jumK2) . '*' . ($jum[13][2] . '/' . $jumK2) . '*' . ($jum[14][2] . '/' . $jumK2) . '*' . ($jum[15][2] . '/' . $jumK2) . '*' . ($jum[16][2] . '/' . $jumK2) . '*' . ($jum[17][2] . '/' . $jumK2) . '*' . ($jum[18][2] . '/' . $jumK2) . '*' . ($jum[19][2] . '/' . $jumK2) . '*' . ($jum[20][2] . '/' . $jumK2) . '*' . ($jum[21][2] . '/' . $jumK2) . '*' . ($jum[22][2] . '/' . $jumK2) . '*' . ($jum[23][2] . '/' . $jumK2) . '*' . ($jum[24][2] . '/' . $jumK2) . '*' . ($jum[25][2] . '/' . $jumK2) . '*' . ($jum[26][2] . '/' . $jumK2) . '*' . ($jum[27][2] . '/' . $jumK2) . '*' . ($jum[28][2] . '/' . $jumK2) . '*' . ($jum[29][2] . '/' . $jumK2) . '*' . ($jum[30][2] . '/' . $jumK2) . '*' . ($jum[31][2] . '/' . $jumK2) . "<br>";

  //  echo ($jumK3 . '/' . $totK) . '*' . ($jum[1][3] . '/' . $jumK3) . '*' . ($jum[2][3] . '/' . $jumK3) . '*' . ($jum[3][3] . '/' . $jumK3) . '*' . ($jum[4][3] . '/' . $jumK3) . '*' . ($jum[5][3] . '/' . $jumK3) . '*' . ($jum[6][3] . '/' . $jumK3) . '*' . ($jum[7][3] . '/' . $jumK3) . '*' . ($jum[8][3] . '/' . $jumK3) . '*' . ($jum[9][3] . '/' . $jumK3) . '*' . ($jum[10][3] . '/' . $jumK3) . '*' . ($jum[11][3] . '/' . $jumK3) . '*' . ($jum[12][3] . '/' . $jumK3) . '*' . ($jum[13][3] . '/' . $jumK3) . '*' . ($jum[14][3] . '/' . $jumK3) . '*' . ($jum[15][3] . '/' . $jumK3) . '*' . ($jum[16][3] . '/' . $jumK3) . '*' . ($jum[17][3] . '/' . $jumK3) . '*' . ($jum[18][3] . '/' . $jumK3) . '*' . ($jum[19][3] . '/' . $jumK3) . '*' . ($jum[20][3] . '/' . $jumK3) . '*' . ($jum[21][3] . '/' . $jumK3) . '*' . ($jum[22][3] . '/' . $jumK3) . '*' . ($jum[23][3] . '/' . $jumK3) . '*' . ($jum[24][3] . '/' . $jumK3) . '*' . ($jum[25][3] . '/' . $jumK3) . '*' . ($jum[26][3] . '/' . $jumK3) . '*' . ($jum[27][3] . '/' . $jumK3) . '*' . ($jum[28][3] . '/' . $jumK3) . '*' . ($jum[29][3] . '/' . $jumK3) . '*' . ($jum[30][3] . '/' . $jumK3) . '*' . ($jum[31][3] . '/' . $jumK3) . "<br>";

  //  echo ($jumK4 . '/' . $totK) . '*' . ($jum[1][4] . '/' . $jumK4) . '*' . ($jum[2][4] . '/' . $jumK4) . '*' . ($jum[3][4] . '/' . $jumK4) . '*' . ($jum[4][4] . '/' . $jumK4) . '*' . ($jum[5][4] . '/' . $jumK4) . '*' . ($jum[6][4] . '/' . $jumK4) . '*' . ($jum[7][4] . '/' . $jumK4) . '*' . ($jum[8][4] . '/' . $jumK4) . '*' . ($jum[9][4] . '/' . $jumK4) . '*' . ($jum[10][4] . '/' . $jumK4) . '*' . ($jum[11][4] . '/' . $jumK4) . '*' . ($jum[12][4] . '/' . $jumK4) . '*' . ($jum[13][4] . '/' . $jumK4) . '*' . ($jum[14][4] . '/' . $jumK4) . '*' . ($jum[15][4] . '/' . $jumK4) . '*' . ($jum[16][4] . '/' . $jumK4) . '*' . ($jum[17][4] . '/' . $jumK4) . '*' . ($jum[18][4] . '/' . $jumK4) . '*' . ($jum[19][4] . '/' . $jumK4) . '*' . ($jum[20][4] . '/' . $jumK4) . '*' . ($jum[21][4] . '/' . $jumK4) . '*' . ($jum[22][4] . '/' . $jumK4) . '*' . ($jum[23][4] . '/' . $jumK4) . '*' . ($jum[24][4] . '/' . $jumK4) . '*' . ($jum[25][4] . '/' . $jumK4) . '*' . ($jum[26][4] . '/' . $jumK4) . '*' . ($jum[27][4] . '/' . $jumK4) . '*' . ($jum[28][4] . '/' . $jumK4) . '*' . ($jum[29][4] . '/' . $jumK4) . '*' . ($jum[30][4] . '/' . $jumK4) . '*' . ($jum[31][4] . '/' . $jumK4) . "<br>";

  //  echo ($jumK5 . '/' . $totK) . '*' . ($jum[1][5] . '/' . $jumK5) . '*' . ($jum[2][5] . '/' . $jumK5) . '*' . ($jum[3][5] . '/' . $jumK5) . '*' . ($jum[4][5] . '/' . $jumK5) . '*' . ($jum[5][5] . '/' . $jumK5) . '*' . ($jum[6][5] . '/' . $jumK5) . '*' . ($jum[7][5] . '/' . $jumK5) . '*' . ($jum[8][5] . '/' . $jumK5) . '*' . ($jum[9][5] . '/' . $jumK5) . '*' . ($jum[10][5] . '/' . $jumK5) . '*' . ($jum[11][5] . '/' . $jumK5) . '*' . ($jum[12][5] . '/' . $jumK5) . '*' . ($jum[13][5] . '/' . $jumK5) . '*' . ($jum[14][5] . '/' . $jumK5) . '*' . ($jum[15][5] . '/' . $jumK5) . '*' . ($jum[16][5] . '/' . $jumK5) . '*' . ($jum[17][5] . '/' . $jumK5) . '*' . ($jum[18][5] . '/' . $jumK5) . '*' . ($jum[19][5] . '/' . $jumK5) . '*' . ($jum[20][5] . '/' . $jumK5) . '*' . ($jum[21][5] . '/' . $jumK5) . '*' . ($jum[22][5] . '/' . $jumK5) . '*' . ($jum[23][5] . '/' . $jumK5) . '*' . ($jum[24][5] . '/' . $jumK5) . '*' . ($jum[25][5] . '/' . $jumK5) . '*' . ($jum[26][5] . '/' . $jumK5) . '*' . ($jum[27][5] . '/' . $jumK5) . '*' . ($jum[28][5] . '/' . $jumK5) . '*' . ($jum[29][5] . '/' . $jumK5) . '*' . ($jum[30][5] . '/' . $jumK5) . '*' . ($jum[31][5] . '/' . $jumK5) . "<br>";

  //  echo ($jumK6 . '/' . $totK) . '*' . ($jum[1][6] . '/' . $jumK6) . '*' . ($jum[2][6] . '/' . $jumK6) . '*' . ($jum[3][6] . '/' . $jumK6) . '*' . ($jum[4][6] . '/' . $jumK6) . '*' . ($jum[5][6] . '/' . $jumK6) . '*' . ($jum[6][6] . '/' . $jumK6) . '*' . ($jum[7][6] . '/' . $jumK6) . '*' . ($jum[8][6] . '/' . $jumK6) . '*' . ($jum[9][6] . '/' . $jumK6) . '*' . ($jum[10][6] . '/' . $jumK6) . '*' . ($jum[11][6] . '/' . $jumK6) . '*' . ($jum[12][6] . '/' . $jumK6) . '*' . ($jum[13][6] . '/' . $jumK6) . '*' . ($jum[14][6] . '/' . $jumK6) . '*' . ($jum[15][6] . '/' . $jumK6) . '*' . ($jum[16][6] . '/' . $jumK6) . '*' . ($jum[17][6] . '/' . $jumK6) . '*' . ($jum[18][6] . '/' . $jumK6) . '*' . ($jum[19][6] . '/' . $jumK6) . '*' . ($jum[20][6] . '/' . $jumK6) . '*' . ($jum[21][6] . '/' . $jumK6) . '*' . ($jum[22][6] . '/' . $jumK6) . '*' . ($jum[23][6] . '/' . $jumK6) . '*' . ($jum[24][6] . '/' . $jumK6) . '*' . ($jum[25][6] . '/' . $jumK6) . '*' . ($jum[26][6] . '/' . $jumK6) . '*' . ($jum[27][6] . '/' . $jumK6) . '*' . ($jum[28][6] . '/' . $jumK6) . '*' . ($jum[29][6] . '/' . $jumK6) . '*' . ($jum[30][6] . '/' . $jumK6) . '*' . ($jum[31][6] . '/' . $jumK6) . "<br>";

  //  echo $HA . "<br>";
  //  echo $HB . "<br>";
  //  echo $HC . "<br>";
  //  echo $HD . "<br>";
  //  echo $HE . "<br>";
  //  echo $HF . "<br>";

    //kondisi untuk memilih penyakit dengan nilai mendekati angaka 1        
    $max = 0;
    if ($HA >= $HB && $HA >= $HC && $HA >= $HD && $HA >= $HE && $HA >= $HF) {
      $max        = $HA;
      $kode_penyakit = $penyakit[0]['kode_penyakit'];
      $out        = $penyakit[0]['nama_penyakit'];
      $penyebab   = $penyakit[0]['penyebab'];
      $solusi     = $penyakit[0]['solusi'];
    } else if ($HB >= $HA && $HB >= $HC && $HB >= $HD && $HB >= $HE && $HB >= $HF) {
      $max        = $HB;
      $kode_penyakit = $penyakit[1]['kode_penyakit'];
      $out        = $penyakit[1]['nama_penyakit'];
      $penyebab   = $penyakit[1]['penyebab'];
      $solusi     = $penyakit[1]['solusi'];
    } else if ($HC >= $HA && $HC >= $HB && $HC >= $HD && $HC >= $HE && $HC >= $HF) {
      $max        = $HC;
      $kode_penyakit = $penyakit[2]['kode_penyakit'];
      $out        = $penyakit[2]['nama_penyakit'];
      $penyebab   = $penyakit[2]['penyebab'];
      $solusi     = $penyakit[2]['solusi'];
    } else if ($HD >= $HA && $HD >= $HB && $HD >= $HC && $HD >= $HE && $HD >= $HF) {
      $max        = $HD;
      $kode_penyakit = $penyakit[3]['kode_penyakit'];
      $out        = $penyakit[3]['nama_penyakit'];
      $penyebab   = $penyakit[3]['penyebab'];
      $solusi     = $penyakit[3]['solusi'];
    } else if ($HE >= $HA && $HE >= $HB && $HE >= $HC && $HE >= $HD && $HE >= $HF) {
      $max        = $HE;
      $kode_penyakit = $penyakit[4]['kode_penyakit'];
      $out        = $penyakit[4]['nama_penyakit'];
      $penyebab   = $penyakit[4]['penyebab'];
      $solusi     = $penyakit[4]['solusi'];
    } else if ($HF >= $HA && $HF >= $HB && $HF >= $HC && $HF >= $HD && $HF >= $HE) {
      $max        = $HF;
      $kode_penyakit = $penyakit[5]['kode_penyakit'];
      $out        = $penyakit[5]['nama_penyakit'];
      $penyebab   = $penyakit[5]['penyebab'];
      $solusi     = $penyakit[5]['solusi'];
    }
    ?>

    <div class="row justify-content-md-center mt-4">
      <div class="col-md-9">
        <div class="card content">
          <h5 class="card-header text-center card2" style="color: white;">
            Hasil Diagnosa
          </h5>
          <div class="card-body">
            <!-- kondisi untuk mengecek apakah gejala yang dipilih terdapat kata Ya -->
            <?php if ($gejala[1] == "Tidak" && $gejala[2] == "Tidak" && $gejala[3] == "Tidak" && $gejala[4] == "Tidak" && $gejala[5] == "Tidak" && $gejala[6] == "Tidak" && $gejala[7] == "Tidak" && $gejala[8] == "Tidak" && $gejala[9] == "Tidak" && $gejala[10] == "Tidak" && $gejala[11] == "Tidak" && $gejala[12] == "Tidak" && $gejala[13] == "Tidak" && $gejala[14] == "Tidak" && $gejala[15] == "Tidak" && $gejala[16] == "Tidak" && $gejala[17] == "Tidak" && $gejala[18] == "Tidak" && $gejala[19] == "Tidak" && $gejala[20] == "Tidak" && $gejala[21] == "Tidak" && $gejala[22] == "Tidak" && $gejala[23] == "Tidak" && $gejala[24] == "Tidak" && $gejala[25] == "Tidak" && $gejala[26] == "Tidak" && $gejala[27] == "Tidak" && $gejala[28] == "Tidak" && $gejala[29] == "Tidak" && $gejala[30] == "Tidak" && $gejala[31] == "Tidak") { ?>

              <!-- Jika tidak ada -->
              <p>Anda Terdiagnosa Penyakit: <b>Anda Tidak Terjangkit Penyakit ISPA</b></p>

            <?php } elseif ($gejala[1] == "Ya" && $gejala[2] == "Ya" && $gejala[3] == "Ya" && $gejala[4] == "Ya" && $gejala[5] == "Ya" && $gejala[6] == "Ya" && $gejala[7] == "Ya" && $gejala[8] == "Ya" && $gejala[9] == "Ya" && $gejala[10] == "Ya" && $gejala[11] == "Ya" && $gejala[12] == "Ya" && $gejala[13] == "Ya" && $gejala[14] == "Ya" && $gejala[15] == "Ya" && $gejala[16] == "Ya" && $gejala[17] == "Ya" && $gejala[18] == "Ya" && $gejala[19] == "Ya" && $gejala[20] == "Ya" && $gejala[21] == "Ya" && $gejala[22] == "Ya" && $gejala[23] == "Ya" && $gejala[24] == "Ya" && $gejala[25] == "Ya" && $gejala[26] == "Ya" && $gejala[27] == "Ya" && $gejala[28] == "Ya" && $gejala[29] == "Ya" && $gejala[30] == "Ya" && $gejala[31] == "Ya") { ?>

              <!-- Jika ada -->
              <p><b>Anda Jangan Bercanda, Silahkan Konsultasi Ulang.</b></p>

            <?php } else{ ?>
              <!-- Jika ada maka tampilkan hasil diagnosanya-->
              <center>
                <p>Anda Terdiagnosa Penyakit:</p><br>
                <h2><?= $out; ?></h2><br>
                <p>Probabilitas: <b> <span class="badge badge-pill badge-info card2"><?= $max; ?></span></b></p>
              </center>

              <br><br>

              <ul class="nav nav-pills card3 justify-content-center mb-3" id="pills-tab" role="tablist" style="padding:5px !important; margin-left=50px; ">
                <li class="nav-item">
                  <a class="nav-link nav2 active" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab" aria-controls="pills-list" aria-selected="true">List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav2" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Penyebab</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav2" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Solusi</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                  <p class="text-center"><b>List Nilai Probabilitas:</b><br><br>
                    <?php
                      $total1 = ($HA / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;
                      $total2 = ($HB / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;
                      $total3 = ($HC / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;
                      $total4 = ($HD / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;
                      $total5 = ($HE / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;
                      $total6 = ($HF / ($HA + $HB + $HC + $HD + $HE + $HF)) * 100;

                      saveResult($kode_penyakit);

                      echo "Sinusitis: " . "<b>" . substr(round($total1, 2), 0, 5) . "%</b>" . "<br>";
                      echo "Tonsilitis, Faringitis, Laringitis (Radang Tenggorokan): " . "<b>" . substr(round($total2, 2), 0, 5) . "%</b>" . "<br>";
                      echo "Bronkitis: " . "<b>" . substr(round($total3, 2), 0, 5) . "%</b>" . "<br>";
                      echo "Bronkiolitis: " . "<b>" . substr(round($total4, 2), 0, 5) . "%</b>" . "<br>";
                      echo "Pneumonia: " . "<b>" . substr(round($total5, 2), 0, 5) . "%</b>" . "<br>";
                      echo "Pleuritis: " . "<b>" . substr(round($total6, 2), 0, 5) . "%</b>" . "<br>";
                      ?>
                  </p>
                </div>
                <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <p>
                    <center><b>PENYEBAB:</b></center>
                    <?= $penyebab; ?>
                  </p>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <p>
                    <center><b>SOLUSI:</b></center>
                    <?= $solusi; ?>
                  </p>
                </div>
              </div>



              <br>



            <?php } ?>

            <a href="<?= base_url('home') ?>" class="btn btn-primary mt-4">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Card -->