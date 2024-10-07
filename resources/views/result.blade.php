<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Registrasi</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>Data Registrasi Penumpang</h2>

    <table>
        <thead>
            <tr>
                <th>Tanggal Berangkat</th>
                <th>Tujuan</th>
                <th>Asal</th>
                <th>Nama Penumpang</th>
                <th>No Kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->tgl_berangkat }}</td>
                    <td>{{ $ticket->tujuan }}</td>
                    <td>{{ $ticket->asal }}</td>
                    <td>{{ $ticket->nama_penumpang }}</td>
                    <td>{{ $ticket->no_kursi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
