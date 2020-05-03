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
    <?php $__currentLoopData = $biodata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
            <td><?php echo e($p -> id); ?></td>
            <td><?php echo e($p -> Nama); ?></td>
            <td><?php echo e($p -> Alamat); ?></td>
            <td><?php echo e($p -> Agama); ?></td>
            <td><?php echo e($p -> TTL); ?></td>
            <td><?php echo e($p -> Handphone); ?></td>
            <td>
                <a href="editprofil/<?php echo e($p -> id); ?>">Edit</a>
                <a href="delete/<?php echo e($p -> id); ?>">Delete</a></td>
    <tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH C:\xampp\htdocs\utslaravel\resources\views/readprofil.blade.php ENDPATH**/ ?>