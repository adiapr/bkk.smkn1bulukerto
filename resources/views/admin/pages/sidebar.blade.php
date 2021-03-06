<div class="sidebar sidebar-style-2">

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Manajemen</h4>
                </li>
                {{-- <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Base</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../components/avatars.html">
                                    <span class="sub-item">Avatars</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/buttons.html">
                                    <span class="sub-item">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/gridsystem.html">
                                    <span class="sub-item">Grid System</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/panels.html">
                                    <span class="sub-item">Panels</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/notifications.html">
                                    <span class="sub-item">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/sweetalert.html">
                                    <span class="sub-item">Sweet Alert</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/font-awesome-icons.html">
                                    <span class="sub-item">Font Awesome Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/simple-line-icons.html">
                                    <span class="sub-item">Simple Line Icons</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/flaticons.html">
                                    <span class="sub-item">Flaticons</span>
                                </a>
                            </li>
                            <li>
                                <a href="../components/typography.html">
                                    <span class="sub-item">Typography</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a data-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Sidebar Layouts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../sidebar-style-1.html">
                                    <span class="sub-item">Sidebar Style 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="../overlay-sidebar.html">
                                    <span class="sub-item">Overlay Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="../compact-sidebar.html">
                                    <span class="sub-item">Compact Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="../static-sidebar.html">
                                    <span class="sub-item">Static Sidebar</span>
                                </a>
                            </li>
                            <li>
                                <a href="../icon-menu.html">
                                    <span class="sub-item">Icon Menu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Forms</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-users"></i>
                        <p>Data Siswa</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.siswa-tkr') }}">
                                    <span class="sub-item">TKR</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.siswa-rpl') }}">
                                    <span class="sub-item">RPL</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.siswa-ak') }}">
                                    <span class="sub-item">Akuntansi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="fas fa-briefcase"></i>
                        <p>Lowongan Pekerjaan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.data.loker') }}">
                                    <span class="sub-item">Data Lowongan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.siswa-rpl') }}">
                                    <span class="sub-item">Pelamar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- hanya admin yang dapat melihat --}}
                @if (Auth::check() && Auth::user()->level == 'admin')
                <li class="nav-item">
                    <a data-toggle="collapse" href="#maps">
                        <i class="fas fa-university"></i>
                        <p>Sekolah</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="">
                                    <span class="sub-item">Kelas</span>
                                </a>
                            </li>
                            <li>
                                <a href="../maps/jqvmap.html">
                                    <span class="sub-item">Mata Pelajaran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
                {{-- ----------------------------------------------- --}}
                {{-- <li class="nav-item">
                    <a data-toggle="collapse" href="#charts">
                        <i class="far fa-chart-bar"></i>
                        <p>Charts</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../charts/charts.html">
                                    <span class="sub-item">Chart Js</span>
                                </a>
                            </li>
                            <li>
                                <a href="../charts/sparkline.html">
                                    <span class="sub-item">Sparkline</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="../widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Widgets</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li> --}}
                @if (Auth::check() && Auth::user()->level == 'admin')
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Setting Halaman</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.slider') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Slider Image</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="">
                        <i class="fas fa-th-list"></i>
                        <p>Sidebar Layouts</p>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
