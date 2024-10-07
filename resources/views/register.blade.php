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
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select>
        <input type="text" placeholder="kakanya dari mana nih?" id="asal" name="asal">
        <input type="text" placeholder="mau kemana atuh?" id="tujuan" name="tujuan">
        <input type="text" placeholder="mau duduk dimana sir?" id="no_kursi" name="no_kursi">
        <input type="date" placeholder="kapan berangkatnya brok?" id="tgl_berangkat" name="tgl_berangkat">
        <button>Registrasi</button>
    </form>
</body>

</html>
