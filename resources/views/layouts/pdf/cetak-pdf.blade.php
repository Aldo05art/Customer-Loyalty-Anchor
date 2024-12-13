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
      <p>Generated on {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
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
         @foreach ($sales as $i)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $i->produk }}</td>
               <td>{{ $i->harga }}</td>
            </tr>
         @endforeach
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
         @foreach ($transaksi as $i)
            <tr>
               <td>{{ $loop->iteration }}</td>
               <td>{{ $i->nama }}</td>
               <td>{{ $i->email }}</td>
               <td>{{ $i->no_hp }}</td>
            </tr>
         @endforeach
      </tbody>
   </table>

   <div class="footer">
      <p>Customer Loyality Anchor &copy; {{ date('Y') }}</p>
   </div>
</body>

</html>
