<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
</head>

<body>
    <form action="/registration" method="post">
        @csrf
        <input type="date" placeholder="kapan berangkatnya brok?" id="tgl_berangkat" name="tgl_berangkat">
        <input type="text" placeholder="mau kemana atuh?" id="tujuan" name="tujuan">
        <input type="text" placeholder="kakanya dari mana nih?" id="asal" name="asal">
        <input type="text" placeholder="maneh saha?" id="nama_penumpang" name="nama_penumpang">
        <input type="text" placeholder="mau duduk dimana sir?" id="no_kursi" name="no_kursi">
        <button>Registrasi</button>
    </form>
</body>

</html>
