<!DOCTYPE html>
<html>
    <head>
        <title>POSYANDU</title>
    </head>

    <body>
        <h3>Posyandu</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>ID POSYANDU</th>
                <th>ID KELURAHAN</th>
                <th>NAMA POSYANDU</th>
                <th>ALAMAT POSYANDU</th>
                <th>Aksi</th>
            </tr>

            @foreach($tbl_user as $p)
            <tr>
                <td>{{ $p->id_posyandu }}</td>
                <td>{{ $p->id_kelurahan }}</td>
                <td>{{ $p->nama_posyandu }}</td>
                <td>{{ $p->alamat_posyandu }}</td>
                <td>
                    <a href="/posyandu/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/posyandu/hapus/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>