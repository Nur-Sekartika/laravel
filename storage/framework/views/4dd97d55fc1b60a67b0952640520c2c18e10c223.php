<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Biodata</h1>

    <?php $__currentLoopData = $biodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <form method="post" action="/update">
    <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="nama">Nama Lengkap</label><br>
            <input type="text" value="<?php echo e($p -> Nama); ?>" placeholder="Input Nama" name="xnama">
        </div><br>
        <div class="form-group">
            <label for="alamat">Alamat</label><br>
            <input type="text" value="<?php echo e($p -> Alamat); ?>" placeholder="Input Alamat" name="xalamat">
        </div><br>
         <div class="form-group">
            <label for="agama">Agama</label><br>
            <input type="text" value="<?php echo e($p -> Agama); ?>" placeholder="Input Agama" name="xagama">
        </div><br>
        <div class="form-group">
            <label for="Tanggal">TTL</label><br>
            <input type="text" value="<?php echo e($p -> TTL); ?>" placeholder="Input Tanggal Lahir" name="xttl">
        </div><br>
        <div class="form-group">
            <label for="handphone">Handphone</label><br>
            <input type="text" value="<?php echo e($p -> Handphone); ?>" placeholder="Input No. Hp" name="xhp">
        </div><br>
        <input type="submit" name="save" value="Update">
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\utslaravel\resources\views/formupdateprofil.blade.php ENDPATH**/ ?>