<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Biodata</h1>

           
    <form method="post" action="savecreate" valign="center">
    <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="nama">Nama Lengkap</label><br>
            <input type="text" class="form-control" placeholder="Input Nama" name="xnama">
        </div><br>
        <div class="form-group">
            <label for="alamat" color=#blue>Alamat</label><br>
            <input type="text" class="form-control" placeholder="Input Alamat" name="xalamat">
        </div><br>
         <div class="form-group">
            <label for="agama">Agama</label><br>
            <input type="text" class="form-control" placeholder="Input Agama" name="xagama">
        </div><br>
        <div class="form-group">
            <label for="Tanggal">TTL</label><br>
            <input type="text" class="form-control" placeholder="Input Tanggal Lahir" name="xttl">
        </div><br>
        <div class="form-group">
            <label for="handphone">Handphone</label><br>
            <input type="text" class="form-control" placeholder="Input No. Hp" name="xhp">
        </div><br>
        <input type="submit" name="save" value="Save">
    </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\utslaravel\resources\views/forminputprofil.blade.php ENDPATH**/ ?>