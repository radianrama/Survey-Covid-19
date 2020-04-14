<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Survey Covid-19</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    body {
      background-image: url("{{ asset('assets/img/bg.jpg') }}");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }

    .form .card{
      background-color: rgb(255, 255, 255, 0.9);
    }
  </style>
</head>
<body>
  <div class="row">

    <div class="col-2"></div>

    <div class="col-8 mt-4 form">
      <form action="survey" method="post">
        @csrf
      <div class="card text-left">
        <div class="card-body text-center">
          <h4 class="card-title font-weight-bold pt-3">Survey Data Covid-19</h4>

          <div class="form-group text-left pt-3 pb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control form-control-sm">
          </div>

          <table class="table striped">
            <thead>
              <tr class="bg-primary text-light">
                <th width="8%">No</th>
                <th width=82%">Pertanyaan</th>
                <th width="10%">Opsi</th>
              </tr>
            </thead>
            <tbody class="table-hover">

              <tr>
                <td>1</td>
                <td class="text-left">
                  Saya pergi keluar rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q1" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q1" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td class="text-left">
                  Saya menggunakan transportasi umum : Online, Angkot, Bus, Taksi, Kereta Api
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q2" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q2" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>3</td>
                <td class="text-left">
                  Saya tidak memakai masker pada saat berkumpul dengan orang lain
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q3" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q3" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>4</td>
                <td class="text-left">
                  Saya berjabat tangan dengan orang lain
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q4" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q4" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>5</td>
                <td class="text-left">
                  Saya tidak membersihkan tangan dengan hand sanitizer / tisu basah sebelum pegang kemudi mobil/motor
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q5" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q5" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>6</td>
                <td class="text-left">
                  Saya menyentuh benda / uang yang juga disentuh orang lain
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q6" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q6" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>7</td>
                <td class="text-left">
                  Saya tidak menjaga jarak 1,5 Meter dengan orang lain ketika : belanja, berkerja , ibadah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q7" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q7" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>8</td>
                <td class="text-left">
                  Saya makan diluar rumah (warung/restaurant)
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q8" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q8" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>9</td>
                <td class="text-left">
                  Saya tidak minum hangat dan cuci tangan dengan sabun setelah tiba di tujuan
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q9" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q9" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>10</td>
                <td class="text-left">
                  Saya berada di wilayah kelurahan tempat pasien tertular
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q10" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q10" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>11</td>
                <td class="text-left">
                  Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q11" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q11" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>12</td>
                <td class="text-left">
                  Saya tidak mencuci tangan dengan sabun setelah tiba di rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q12" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q12" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>13</td>
                <td class="text-left">
                  Saya tidak menyediakan : tisu basah/atiseptik, masker, sabun antiseptik bagi keluarga di rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q13" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q13" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>14</td>
                <td class="text-left">
                  Saya tidak segera merendam baju dan celana bekas pakai di luar rumah kedalam air panas/sabun
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q14" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q14" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>15</td>
                <td class="text-left">
                  Saya tidak segera mandi keramas setelah saya tiba di rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q15" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q15" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>16</td>
                <td class="text-left">
                  Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q16" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q16" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>17</td>
                <td class="text-left">
                  Saya dalam sehari tidak kena cahaya matahari minimal 15 menit
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q17" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q17" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>18</td>
                <td class="text-left">
                  Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q18" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q18" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>19</td>
                <td class="text-left">
                  Saya jarang minum vitamin C dan E, dan kurang tidur
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q19" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q19" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>20</td>
                <td class="text-left">
                  Usia saya diatas 60 tahun
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q20" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q20" value="0"> Tidak
                  </div>
                </td>
              </tr>

              <tr>
                <td>21</td>
                <td class="text-left">
                  Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik
                </td>
                <td class="text-left">
                  <div>
                    <input type="radio" name="q21" value="1"> Ya
                  </div>
                  <div>
                    <input type="radio" name="q21" value="0"> Tidak
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
          <form action="">
          <button type="submit" class="btn btn-primary btn-block">Kirim</button>
            
        </div>
      </div>
      </form>
    </div>

    <div class="col-2"></div>

  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>