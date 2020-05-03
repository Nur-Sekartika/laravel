<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Biodata</h1>

    @foreach ($biodata as $p) 
    <form method="post" action="/update">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama Lengkap</label><br>
            <input type="text" value="{{ $p -> Nama}}" placeholder="Input Nama" name="xnama">
        </div><br>
        <div class="form-group">
            <label for="alamat">Alamat</label><br>
            <input type="text" value="{{ $p -> Alamat}}" placeholder="Input Alamat" name="xalamat">
        </div><br>
         <div class="form-group">
            <label for="agama">Agama</label><br>
            <input type="text" value="{{ $p -> Agama}}" placeholder="Input Agama" name="xagama">
        </div><br>
        <div class="form-group">
            <label for="Tanggal">TTL</label><br>
            <input type="text" value="{{ $p -> TTL}}" placeholder="Input Tanggal Lahir" name="xttl">
        </div><br>
        <div class="form-group">
            <label for="handphone">Handphone</label><br>
            <input type="text" value="{{ $p -> Handphone}}" placeholder="Input No. Hp" name="xhp">
        </div><br>
        <input type="submit" name="save" value="Update">
    </form>
    @endforeach

        </div>
    </div>
</div>
