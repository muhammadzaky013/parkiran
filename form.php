<DOCTYPE! html>
    <html lang="en">
    <head>
        <title>Parkir</title>
</head>
<body>
    <header>
        <h1>Form Parkir</h1>
</header>
<form action= "proses.php" method="POST">
    <fieldset>
        <p>
        <label for= "nama"> Jenis Kendaraan</label>
        <input type= "text" name="nama"/>
</p>
<p>
    <label for= "jenis"></label>
    <p>Tarif Harga </p>
    <p><input type='radio' name="jenis" value = "2000" /> 2000</p>
    <p><input type='radio' name="jenis" value = "3000" /> 3000</p>
    <p><input type='radio' name="jenis" value = "5000" /> 5000</p>
</p>
<p>
    <input type= "submit" value = "Kirim Data" name="simpan"/>
</p>
</body>
</html>