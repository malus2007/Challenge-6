<?php


if($_SERVER["REQUEST_METHOD"] === "GET"){
    $nama = $_GET['nama'] ??"";
    $nim = $_GET['nim']??"";
    $jurusan = $_GET['jurusan']??"";
}

else {
    $nama = $nim = $jurusan = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
    <style>
        form input {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>   
<body>
    <h1>Praktikum Form GET</h1>
    <hr>
    <table style="width: 100%">
        <tbody>
            <tr>
                <th width="100" style ="text-align: left";>NIM</th>
                <td width ="10">:</td>
                <td><?php echo $nim;?></td>
            </tr>   
            <tr>
                <th width="100" style ="text-align: left";>NAMA</th>
                <td width ="10">:</td>
                <td><?php echo $nama;?></td>
            </tr>
            <tr>
                <th width="100" style ="text-align: left";>JURUSAN</th>
                <td width ="10">:</td>
                <td><?php echo $jurusan;?></td>
            </tr>
        </tbody>
    </table>


    <!-- Form Data -->

    <h2>Form Data</h2>
    <form action="/Pertemuan 6/get/index.php" method="get">
        <label for="nim">NIM</label>
        <input type="number" id="nim" name="nim">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <select id="jurusan" name="jurusan">
            <option value="">--Pilih Jurusan--</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
        </select>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>