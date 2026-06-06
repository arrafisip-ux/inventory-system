<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Laporan Inventaris</title>

    <style>

        body{
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        h2{
            text-align:center;
            margin-bottom:5px;
        }

        p{
            text-align:center;
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table,
        th,
        td{
            border:1px solid #000;
        }

        th,
        td{
            padding:8px;
            text-align:left;
        }

        th{
            background:#e5e5e5;
        }

    </style>

</head>

<body>

<h2>Laporan Inventaris Barang</h2>

<p>
    Periode :
    {{ $dari }}
    s/d
    {{ $sampai }}
</p>

<table>

    <thead>

        <tr>
            <th>Tanggal</th>
            <th>Barang</th>
            <th>Jenis</th>
            <th>Jumlah</th>
        </tr>

    </thead>

    <tbody>

        @foreach($laporan as $item)

        <tr>

            <td>
                {{ date('d-m-Y', strtotime($item['tanggal'])) }}
            </td>

            <td>
                {{ $item['barang'] }}
            </td>

            <td>
                {{ $item['jenis'] }}
            </td>

            <td>
                {{ $item['jumlah'] }}
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</body>
</html>