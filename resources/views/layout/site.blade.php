<!DOCTYPE html>
<html lang="pt">

<head>
    <title>

    </title>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel= "stylesheet"
        href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <header class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a href="{{ route('site.home') }}">Home</a></li>
                    <li><a href="{{ route('site.products') }}">Produtos</a></li>
                    <li><a href="{{ route('site.blog') }}">Blog</a></li>
                    <li><a href="{{ route('site.about') }}">Sobre Mim</a></li>
                    <li><a href="{{ route('site.contact') }}">Contato</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl" href="{{ route('site.home') }}">Bernardo Nogueira</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('site.home') }}">Página Inicial</a></li>
                <li><a href="{{ route('site.products') }}">Produtos</a></li>
                <li><a href="{{ route('site.blog') }}">Blog</a></li>
                <li><a href="{{ route('site.about') }}">Sobre Mim</a></li>
                <li><a href="{{ route('site.contact') }}">Contato</a></li>
            </ul>
        </div>
        <div class="drawer navbar-end">
            <input id="my-drawer" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <label for="my-drawer" class="btn btn-primary drawer-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>
                    Área 51
                </label>
            </div>
            <div class="drawer-side">
                <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">

                    <form class="card-body">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" placeholder="email" class="input input-bordered" required />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <input type="password" placeholder="password" class="input input-bordered" required />
                        </div>
                        <div class="form-control mt-6">
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </form>

                </ul>
            </div>
        </div>

    </header>

   <main class="flex-grow">
        @yield('content')
    </main>

   <!-- Rodapé -->
    <footer class="footer footer-center bg-base-200 text-base-content rounded p-10">
        <nav class="grid grid-flow-col gap-4">
            <a href="{{ route('site.home') }}">Página Inicial</a>
            <a href="{{ route('site.products') }}">Produtos</a>
            <a href="{{ route('site.blog') }}">Blog</a>
            <a href="{{ route('site.about') }}">Sobre Mim</a>
            <a href="{{ route('site.contact') }}">Contato</a>
        </nav>

        <aside>
            <p>Copyright © 2024 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer>


</body>
<!-- Script -->
<script src="https://cdn.tailwindcss.com"></script>

</html>
