<!DOCTYPE html>
<html>
    <head>
        <title>PUSKESMAS</title>
    </head>

    <body>
        <h3>Data User</h3>

        <a href="/user/tambah"> + Tambah User Baru +</a>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>ID USER</th>
                <th>ID History Posyandu</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>

            @foreach($tbl_user as $p)
            <tr>
                <td>{{ $p->id_user }}</td>
                <td>{{ $p->id_history_posyandu }}</td>
                <td>{{ $p->username }}</td>
                <td>
                    <a href="/user/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/user/hapus/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>