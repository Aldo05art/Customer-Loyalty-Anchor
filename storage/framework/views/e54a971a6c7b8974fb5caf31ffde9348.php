
<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center align-items-center mt-4">
    <div class="row w-100">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <h2>Data Sales</h2>
                <a href="<?php echo e(route('sales.create')); ?>" class="btn btn-primary" style="border-radius: 20px; color: white;">
                    + Tambah Data
                </a>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <table class="table table-bordered table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col" class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($i->produk); ?></td>
                                    <td><?php echo e($i->harga); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('sales.edit', $i)); ?>" class="btn btn-warning btn-sm" style="border-radius: 20px; color: white;">
                                            Update
                                        </a>
                                        <form action="<?php echo e(route('sales.destroy', $i)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius: 20px;">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\LaravelALDO\resources\views/sales/sales.blade.php ENDPATH**/ ?>