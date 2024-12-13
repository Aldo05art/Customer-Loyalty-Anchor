
<?php $__env->startSection('content'); ?>
   <div class="container d-flex justify-content-center align-items-center mt-4" >
      <div class="row w-100">
         <div class="col-md-8 mx-auto">
            <div class="card shadow">
               <form class="form-horizontal" action="<?php echo e(route('transaksi.store')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                  <div class="card-body">
                     <h4 class="card-title text-center mb-4">Menambahkan Produk</h4>
                     <div class="form-group row">
                        <label for="nama" class="col-sm-3 text-end control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                           <input type="text" class="form-control" id="nama" name="nama"
                              placeholder="Masukkan Nama" value="<?php echo e(old('nama')); ?>" />
                           <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <small class="text-danger"><?php echo e($message); ?></small>
                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                     </div>
                     <div class="form-group row mt-3">
                        <label for="email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                           <input type="email" class="form-control" id="email" name="email"
                              placeholder="Masukkan Harga..." value="<?php echo e(old('email')); ?>" />
                           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <small class="text-danger"><?php echo e($message); ?></small>
                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                     </div>
                     <div class="form-group row mt-3">
                        <label for="no_hp" class="col-sm-3 text-end control-label col-form-label">Nomor Hp</label>
                        <div class="col-sm-9">
                           <input type="number" class="form-control" id="no_hp" name="no_hp"
                              placeholder="Masukkan Harga..." value="<?php echo e(old('no_hp')); ?>" />
                           <?php $__errorArgs = ['no_hp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <small class="text-danger"><?php echo e($message); ?></small>
                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                     </div>
                     <div class="border-top mt-4">
                        <div class="card-body text-center">
                           <button type="submit" class="btn btn-primary px-4 py-2" style="border-radius: 20px;">
                              Submit
                           </button>
                           <a href="<?php echo e(route('sales.index')); ?>" class="btn btn-secondary px-4 py-2"
                              style="border-radius: 20px;">
                              Kembali
                           </a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\Documents\Praktikum Smt 3\pemweb\laravel\LaravelALDO\LaravelALDO\resources\views/transaksi/create.blade.php ENDPATH**/ ?>