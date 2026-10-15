<nav class="navbar navbar-expand-lg navbar-dark shadow"
    style="background-color: #25c72f;">

    <div class="container-fluid">

        <!-- LOGO SENA -->
        <a >

            <span class="bg-white rounded p-1 me-2">
                <img src="https://pautonoticias.com/sites/default/files/Article/sena-colombia-logo-green39a900png-20250120.png"
                    alt="Logo SENA"
                    width="50"
                    height="50"
                    class="img-fluid">
            </span>

            <span class="text-white fw-bold">
                Admin SENA
            </span>

        </a>


        <!-- BOTÓN PARA CELULAR -->
        <button class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- CONTENIDO DEL NAVBAR -->
        <div class="collapse navbar-collapse"
            id="navbarSupportedContent">


            <!-- MENÚ IZQUIERDO -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2 ms-lg-3">


                <!-- LISTADOS -->
                <li class="nav-item dropdown">

                    <a class="btn btn-light dropdown-toggle text-dark fw-medium px-3"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                        Listados

                    </a>


                    <ul class="dropdown-menu shadow-sm border-0 mt-2">

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('areas.index') }}">
                                Áreas
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('training_center.index') }}">
                                Centros
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('computer.index') }}">
                                Computadores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('course.index') }}">
                                Cursos
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('teacher.index') }}">
                                Instructores
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item"
                                href="{{ route('apprentice.index') }}">
                                Aprendices
                            </a>
                        </li>

                    </ul>

                </li>


                <!-- MISIÓN Y VISIÓN -->
                <li class="nav-item">

                    <a class="nav-link text-white fw-semibold"
                        href="{{ route('mision.vision') }}">

                        Misión y Visión

                    </a>

                </li>

            </ul>


            <!-- PARTE DERECHA -->
            <div class="d-flex align-items-center gap-3">


                <!-- BUSCADOR -->
                <form class="d-flex align-items-center m-0"
                    role="search">

                    <div class="input-group">

                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search text-success"></i>
                        </span>

                        <input class="form-control border-start-0"
                            type="search"
                            placeholder="Buscar..."
                            aria-label="Buscar">

                        <button class="btn btn-light text-success fw-bold border"
                            type="submit">

                            Buscar

                        </button>

                    </div>

                </form>


                <!-- INICIAR SESIÓN -->
                <a href="#"
                    class="btn btn-outline-light fw-bold px-3">

                    Iniciar Sesión

                </a>

            </div>

        </div>

    </div>

</nav>