<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Biodata</h1>

<table border="1px" width=100%>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>TTL</th>
        <th>Handphone</th>
        <th>Opsi</th>
    </tr>
    @foreach ($biodata as $p)
    <tr>
            <td>{{ $p -> id}}</td>
            <td>{{ $p -> Nama}}</td>
            <td>{{ $p -> Alamat}}</td>
            <td>{{ $p -> Agama}}</td>
            <td>{{ $p -> TTL}}</td>
            <td>{{ $p -> Handphone}}</td>
            <td>
                <a href="editprofil/{{ $p -> id}}">Edit</a>
                <a href="delete/{{ $p -> id}}">Delete</a></td>
    <tr>
    @endforeach
</table>