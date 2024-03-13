<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
        </thead>

      <tbody>
         <?php

            $Fruits = [
                [
                      "Id" => 1,
                      "Nama" => 'Pisang',
                      "Warna" => 'Kuning',
                      "Stok"  => 100,
                      "Harga" => 30.000,
                      "Deskripsi" => 'Pisang adalah nama umum yang diberikan pada tumbuhan terna berukuran besar dengan daun memanjang dan besar yang tumbuh langsung dari bagian tangkai.',
                ],
                [
                    "Id" => 2,
                    "Nama" => 'Storoberry',
                    "Warna" => 'Merah',
                    "Stok"  => 50,
                    "Harga" => 20.000,
                    "Deskripsi" => 'Stroberi atau tepatnya stroberi kebun (juga dikenal dengan nama arbei, dari bahasa Belanda aardbei) adalah sebuah varietas stroberi yang paling banyak dikenal di dunia.',
                ],
                [
                    "Id" => 3,
                    "Nama" => 'Nangka',
                    "Warna" => 'Kuning',
                    "Stok"  => 70,
                    "Harga" => 40.000,
                    "Deskripsi" => 'Nangka adalah nama sejenis pohon, sekaligus buahnya. Pohon nangka termasuk ke dalam suku Moraceae; nama ilmiahnya adalah Artocarpus heterophyllus.',
                ],
            ];
  
            foreach ($Fruits as $fruit) {
                echo "<tr>";
                   echo "<td>" . $fruit['Id'] . "</td>"; 
                   echo "<td>" . $fruit['Nama'] . "</td>"; 
                   echo "<td>" .  $fruit['Warna'] . "</td>"; 
                   echo  "<td>" . $fruit['Stok'] . "</td>"; 
                   echo  "<td>" . $fruit['Harga'] . "</td>"; 
                   echo "<td>" . $fruit['Deskripsi']. "</td>";

                                 
                echo "</tr>";
            }   
            
        ?>  
      </tbody>
    </table>
  </div>
</body>
</html>