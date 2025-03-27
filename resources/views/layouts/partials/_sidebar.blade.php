<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('assets/dist/img/supernusa.png') }}" alt="nusamba Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><small>NUSAMBA</small></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    @can('view_profil')
                    <a href="{{ route('admin.profil.view') }}" class="nav-link">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p> Profil <i class=""></i>
                        </p>
                    </a>
                    @endcan
                </li>
                

                <li class="nav-item">
                    @can('view_all')
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> SPK <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @can('view_hrd')
                            <a href="{{route('admin.spk.form')}}" class="nav-link">
                                <i class="nav-icon fa fa-arrow-circle-up"></i>
                                <p>UPLOAD</p>
                            </a>
                            @endcan
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.spk.cari')}}" class="nav-link">
                                <i class="nav-icon fa fa-list"></i>
                                <p>cari</p>
                            </a>
                        </li>
                        
                    </ul>
                    @endcan
                </li>

                <!-- <li class="nav-item">
                    @can('view_all')
                    <a href="" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p> EVALUASI <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            @can('view_penilaian')
                            <a href="{{route('admin.eva.form')}}" class="nav-link">
                                <i class="nav-icon fa fa-clipboard"></i>
                                <p>Form Evaluasi</p>
                            </a>
                            @endcan
                        </li> 
                    </ul>
                    @endcan
                </li> -->
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
