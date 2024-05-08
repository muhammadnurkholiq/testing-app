<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir Pintar - Reimbursement</title>

    <link rel="shortcut icon" href="/image/icon.png" type="image/x-icon">

    {{-- css --}}
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .nav-link:hover {
            background-color: rgb(67, 76, 85) !important;
        }

        .nav-link.active {
            background-color: rgb(67, 76, 85) !important;
        }
    </style>
</head>

<body>
    <div class="content container-fluid">
        <div class="row h-100">
            <div class="col-3 p-0">
                <div class="d-flex flex-column flex-shrink-0 p-3 h-100  text-bg-dark">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="/image/icon.png" alt="icon" class="bi pe-none me-2" width="40" height="32">
                        <span class="fs-4">Kasir Pintar</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="mb-1">
                            <a href="#" class="nav-link text-white active" onclick="handleClick(this)">
                                <div class="d-flex align-items-center py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi pe-none me-2" width="20"
                                        height="20" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
                                    </svg>
                                    Dashboard
                                </div>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#" class="nav-link text-white" onclick="handleClick(this)">
                                <div class="d-flex align-items-center py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi pe-none me-2" width="20"
                                        height="20" fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                    </svg>
                                    User Management
                                </div>
                            </a>
                        </li>
                        <li class="mb-1">
                            <a href="#" class="nav-link text-white" onclick="handleClick(this)">
                                <div class="d-flex align-items-center py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="bi pe-none me-2" width="20"
                                        height="20" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                        <path
                                            d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />

                                    </svg>
                                    Reimbursement
                                </div>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <a href="#"
                            class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                class="rounded-circle me-2">
                            <strong>Kholiq</strong>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" style="">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col border-box-sizing">
                <div class="container my-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    {{-- script --}}
    <script>
        function handleClick(link) {
            // Hapus kelas 'active' dari semua tautan navigasi
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach((navLink) => {
                navLink.classList.remove('active');
            });

            // Tambahkan kelas 'active' ke tautan yang diklik
            link.classList.add('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
