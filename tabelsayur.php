<?php
 $datas = [
    [
      'nama_sayur' => 'Bawang Merah',
      'berat_sayur(kg)' => 10
    ],
    [
      'nama_sayur' => 'Bawang Putih',
      'berat_sayur(kg)' => 10
    ],
    [
      'nama_sayur' => 'Bawang Bombai',
      'berat_sayur(kg)' => 8
    ],
    [
      'nama_sayur' => 'Cabai',
      'berat_sayur(kg)' => 15
    ],
    [
      'nama_sayur' => 'Jagung',
      'berat_sayur(kg)' => 7
    ],
    [
      'nama_sayur' => 'Tomat',
      'berat_sayur(kg)' => 12
    ],
    [
        'nama_sayur' => 'Kentang',
        'berat_sayur(kg)' => 13
    ],
  ];
  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Tugas Praktikum 3</title>
    </head>
    <body>
        <center><h1 >Tabel Sayur Pak Joy</h1></center>
        <center><table id="table_barang">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Berat (kg)</th>
                    <th>Berat (gr)</th>
                    <th>Berat (mg)</th>
                </tr>
            </thead>
           <<tbody>
                <?php foreach($datas as $index => $data){?>
                <tr>
                    <td><?= $index + 1?>.</td>
                    <td><?= $data['nama_sayur']?></td>
                    <td><?= $data['berat_sayur(kg)']?></td>
                    <td><?= $data['berat_sayur(kg)']*1000 ?></td>
                    <td><?= $data['berat_sayur(kg)']*1000000 ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table></center>
    </body>
</html>