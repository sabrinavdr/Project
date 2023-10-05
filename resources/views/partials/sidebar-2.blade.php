<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <div class="row">
            <div class="col-3 text-center">
                <img
                    src="{{ asset('images/LogoGithub.png') }}"
                    style="width: 100%; height: 100%"
                    alt=""
                />
            </div>
            <div class="col-7">
                <a href="#" class="sidebar-brand"> E-ARSIP </a>
            </div>
            <div class="col-2 text-center mt-3">
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">MAIN</li>
            <li class="nav-item">
                <a href="/dashboard-produsen" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            {{-- <li class="nav-item"> --}}
                    
                    <li class="nav-item nav-category">REKAP DOKUMEN ARSIP</li>
                    <li class="nav-item">
                        <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#forms"
                        role="button"
                        aria-expanded="false"
                        aria-controls="forms"
                    >
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Dokumen Arsip</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="/arsipMasuk" class="nav-link">Arsip Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a href="/arsipDisposisi" class="nav-link">Arsip Disposisi</a>
                            </li>
                            <li class="nav-item">
                                <a href="/arsipDiarsipkan" class="nav-link">Arsip Diarsipkan</a>
                            </li>
                            <li class="nav-item">
                                <a href="/arsipKeluar" class="nav-link">Arsip Keluar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item nav-category">PENGELOLAAN ARSIP</li>
                    <li class="nav-item">
                <a href="/students" class="nav-link">
                    <i class="link-icon" data-feather="book-open"></i>
                    <span class="link-title">Log Aktivitas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/risks" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Identifikasi Risiko</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/preservations" class="nav-link">
                    <i class="link-icon" data-feather="calendar"></i>
                    <span class="link-title">Jadwal Preservasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/pemantauans" class="nav-link">
                    <i class="link-icon" data-feather="clipboard"></i>
                    <span class="link-title">Daftar Pemantauan</span>
                </a>
            </li>
            <li class="nav-item nav-category">ABOUT</li>
            <li class="nav-item">
                <a href="/setting" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Setting</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="link-icon" data-feather="arrow-right"></i>
                    <span class="link-title">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>