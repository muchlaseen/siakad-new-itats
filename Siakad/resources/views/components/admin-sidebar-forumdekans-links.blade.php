<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Forum Dekan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Fakultas</h6>
            <a class="collapse-item" href="{{route('fakultas.index')}}">Form Fakultas</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Jurusan</h6>
            <a class="collapse-item" href="{{route('jurusan.index')}}">Form Jurusan</a>
            <h6 class="collapse-header">Mata Kuliah</h6>
            <a class="collapse-item" href="{{route('matkul.index')}} ">Form Mata Kuliah</a>
        </div>
    </div>
</li>
