<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Credit List</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
      }

      .header {
         text-align: center;
         padding: 20px;
         border-bottom: 2px solid #ddd;
         margin-bottom: 20px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-bottom: 20px;
      }

      table, th, td {
         border: 1px solid #ddd;
         text-align: center;
      }

      th {
         background-color: #f4f4f4;
         padding: 10px;
      }

      td {
         padding: 10px;
      }

      .footer {
         text-align: center;
         margin-top: 20px;
         font-size: 12px;
      }
   </style>
</head>

<body>
   <div class="header">
      <h1>Sales & Produk List</h1>
      <p>Generated on <?php echo e(\Carbon\Carbon::now()->toFormattedDateString()); ?></p>
   </div>

   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
         </tr>
      </thead>
      <tbody>
         <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td><?php echo e($loop->iteration); ?></td>
               <td><?php echo e($i->produk); ?></td>
               <td><?php echo e($i->harga); ?></td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
   </table>
   <table>
      <thead>
         <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Hp</th>
         </tr>
      </thead>
      <tbody>
         <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td><?php echo e($loop->iteration); ?></td>
               <td><?php echo e($i->nama); ?></td>
               <td><?php echo e($i->email); ?></td>
               <td><?php echo e($i->no_hp); ?></td>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
   </table>

   <div class="footer">
      <p>Customer Loyality Anchor &copy; <?php echo e(date('Y')); ?></p>
   </div>
</body>

</html>
<?php /**PATH C:\Users\USER\Documents\Praktikum Smt 3\pemweb\laravel\LaravelALDO\LaravelALDO\resources\views/layouts/pdf/cetak-pdf.blade.php ENDPATH**/ ?>