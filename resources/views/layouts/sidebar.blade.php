<aside class="left-sidebar" data-sidebarbg="skin5">
   <!-- Sidebar scroll-->
   <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
         <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
               <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('indexx') }}"
                  aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                     class="hide-menu">Dashboard</span></a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('sales.index') }}"
                  aria-expanded="false"><i class="mdi mdi-palette-advanced"></i><span class="hide-menu">Sales</span></a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('transaksi.index') }}"
                  aria-expanded="false"><i class="mdi mdi-printer-3d"></i><span class="hide-menu">Transaksi</span></a>
            </li>
            <li class="sidebar-item p-3">
               <a href="{{ route('cetak-pdf') }}" target="_blank"
                  class="
            w-100
            btn btn-cyan
            d-flex
            align-items-center
            text-white
          "><i
                     class="mdi mdi-cloud-download font-20 me-2"></i>Download Pdf</a>
            </li>
         </ul>
      </nav>
   </div>
</aside>
