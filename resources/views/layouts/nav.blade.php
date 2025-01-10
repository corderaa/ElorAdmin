
    <div>
        <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-30 col-lg-20 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <!--<div class="offcanvas-header">
                <h5 class="offcanvas-title" id="sidebarMenuLabel">Panel Administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div> -->

                <!-- Datos del menu -->

                <div class="offcanvas-body d-md-flex flex-row p-0 overflow-y-auto tw-w-full tw-justify-center">
                <ul class="nav flex-row tw-justify-evenly tw-w-full">
                    <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="{{ route('users.getAllStudents') }}">
                        <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Alumnos</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('users.getStaff') }}">
                        <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Personal</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('studies.index') }}">
                        <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Ciclos formativos</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('subjects.index') }}">
                        <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Modulos</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="">
                        <p class="hover:tw-text-[#3cb4e5] tw-text-[#211261] m-0">Reuniones</p>
                    </a>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
