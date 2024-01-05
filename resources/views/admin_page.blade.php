<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    *{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    }
    body{
        font-family: Helvetica;
        -webkit-font-smoothing: antialiased;
        background: rgba( 71, 147, 227, 1);
    }
    h2{
        text-align: center;
        font-size: 18px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: white;
        padding: 30px 0;
    }

    /* Table Styles */

    .table-wrapper{
        margin: 10px 70px 70px;
        box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
    }

    .fl-table {
        border-radius: 5px;
        font-size: 16px;
        font-weight: normal;
        border: none;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        white-space: nowrap;
        background-color: white;
    }

    .fl-table td, .fl-table th {
        text-align: center;
        padding: 8px;
    }

    .fl-table td {
        border-right: 1px solid #f8f8f8;
        font-size: 16px;
    }

    .fl-table thead th {
        color: #ffffff;
        background: #4FC3A1;
    }


    .fl-table thead th:nth-child(odd) {
        color: #ffffff;
        background: #324960;
    }

    .fl-table tr:nth-child(even) {
        background: #F8F8F8;
    }
    </style>
</head>
<body>

<h2 style="font-weight: bold; font-size: 36px;">List of Available Words</h2>

<div class="table-wrapper">
    <table class="fl-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kata</th>
                <th>Hint 1</th>
                <th>Hint 2</th>
                <th>Hint 3</th>
                <th>Update Data</th>
                <th>Delete Data</th>
            </tr>
        <tbody>
            @foreach($katas as $kata)
            <tr>
                <td>{{ $kata->id }}</td>
                <td>{{ $kata->word }}</td>
                <td>{{ $kata->hint1 }}</td>
                <td>{{ $kata->hint2 }}</td>
                <td>{{ $kata->hint3 }}</td>
                <td>
                    <a href="/update_word/{{ $kata->id }}">Update</a>
                </td>
                <td>
                    <form action="/hapus-kata/{{ $kata->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
<br>
<a href="/add_word" class="btn btn-warning">Tambah Kata</a>
<p>Random Word Is: {{ $randomWord->word }}</p>
<p>Hint1 Is: {{ $randomWord->hint1 }}</p>
<p>Hint2 Is: {{ $randomWord->hint2 }}</p>
<p>Hint3 Is: {{ $randomWord->hint3 }}</p>

<form action="/logoutAdmin" method="post">
    @csrf
    <button type="submit" class="dropdown-item" style="color: white;">Logout</button>
</form>

</body>
</html>
