<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{route('rekap.index')}}">REKAP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{route('rekap.index')}}">RK</a>
    </div>
    <ul class="sidebar-menu">

        @section('sidebar')
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
              <a href="{{route('rekap.index')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>

            @can('is-admin')

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Tabel Master
                    </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('barang.index')}}">Barang</a></li>
                    <li><a class="nav-link" href="{{route('jenis_kendaraan.index')}}">Jenis Kendaraan</a></li>
                    <li><a class="nav-link" href="{{route('metode_pembayaran.index')}}">Metode Pembayaran</a></li>
                    <li><a class="nav-link" href="{{route('pegawai.index')}}">Pegawai</a></li>
                    <li><a class="nav-link" href="{{route('pemesan.index')}}">Pemesan</a></li>
                    <li><a class="nav-link" href="{{route('penerima.index')}}">Penerima</a></li>
                    <li><a class="nav-link" href="{{route('bank.index')}}">Bank</a></li>
                    <li><a class="nav-link" href="{{route('pengirim.index')}}">Pengirim</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Hasil Rekap
                    </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('invoice.index')}}">Invoice</a></li>
                </ul>
            </li>
            @endcan
            <ul class="dropdown-menu">

            </ul>
                @can('is-owner')
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Histori
                            Rekap </span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="layout-default.html">Bulanan</a></li>
                        <li><a class="nav-link" href="layout-transparent.html">Tahunan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Users</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route('user.index')}}">User</a></li>
                    </ul>
                </li>
            @endcan
            @can('index-users')
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link"><i class="fas fa-table"></i><span>User List</span></a>
                </li>
            @endcan
        @show


    </ul>
  </aside>
