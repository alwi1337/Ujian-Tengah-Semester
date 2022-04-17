<head>
    <title>Menampilkan Array 2 Dimensi - 20050974072</title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #FFFFFF;
    }

    body {
        background-color: #FFFFFF;
    }
    </style>
</head>

<body>

    <center>
        <h2>DATA WILAYAH</h2>
    </center>
    <center>
        <table>
    </center>
</body>
<?php

 $prov = array(
    array(
      "provinsi" => "Jawa Timur",
      "kabupaten" => "Surabaya",
      "kecamatan" => "Jambangan",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Surabaya",
        "kecamatan" => "Wonokromo",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Taman",
    ),
    array(
        "provinsi" => "Jawa Timur",
        "kabupaten" => "Sidoarjo",
        "kecamatan" => "Waru",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Semarang",
        "kecamatan" => "kecamatan 2",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "Kecamatan 1",
    ),
    array(
        "provinsi" => "Jawa Tengah",
        "kabupaten" => "Solo",
        "kecamatan" => "kecamatan 2",
    ),
  );
  
 
?>
<table border="1" width="900" align="center">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Kabupaten</th>
            <th scope="col">Kecamatan</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $no =1;
    foreach($prov as $b){
      echo "<tr>";
      echo "<td>".$no."</td>
      <td>".$b['provinsi']."</td>
      <td>".$b['kabupaten']."</td>
      <td>".$b['kecamatan']."</td>";
      echo "</tr>";
      $no++;
    }
	echo "Muhammad Alwi Shihab - 20050974072";
    ?>
    </tbody>
</table>