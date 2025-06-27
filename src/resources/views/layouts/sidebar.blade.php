<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="">
                ADMIN PANEL
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <i class="fas fa-fw fa-code"></i>
        </div>

        <!-- Menu -->
        <ul class="sidebar-menu">

            <li><a class="nav-link" href=""><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

			@if (Auth::user())
                <li><a class="nav-link" href="{{ route('lessons.index') }}"><i class="fas fa-book"></i> <span>Materi TryOut</span></a></li>
                <li><a class="nav-link" href="{{ route('category.index') }}"><i class="fas fa-clipboard-check"></i> <span>Kategori TryOut</span></a></li>
                <li><a class="nav-link" href="{{ route('exam.index') }}"><i class="fas fa-edit"></i> <span>TryOut</span></a></li>
                <li><a class="nav-link" href=""><i class="fas fa-clipboard-list"></i> <span>Soal TryOut</span></a></li>
                <li><a class="nav-link" href=""><i class="fas fa-user-friends"></i> <span>Peserta</span></a></li>
            @endif

        </ul>
        <!-- End Menu -->
    </aside>
</div>
