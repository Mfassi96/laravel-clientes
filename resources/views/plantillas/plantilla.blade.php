<!doctype html>
<html lang="en">
    <head>
        <title>@yield('titulo')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!--Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!--Sweetalert2-->
        <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css
" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Sistema de clientes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('principal')}}">Listado</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('clientes.create')}}">Agregar cliente</a>
                    </li>
                  </ul>
                  <form action="/search" method="get" class="form-inline">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control" placeholder="Buscar por nombre">
                        <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Buscar <i class="fa-solid fa-magnifying-glass"></i></button>
                        </span>
                    </div>
                </form>
                </div>
                <a href="https://auth.afip.gob.ar/contribuyente_/loginClave.xhtml" class="btn btn-secondary" target="_blank">AFIP</a>
              </nav>
        </header>
        <main class="py-5">
          {{-- <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </span>
            </div>
        </form> --}}
        
            @yield('contenido')
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <scriptsrc="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
        <script>
            function alertaEliminar(){
                Swal.fire({
  title: "Estas seguro de realizar esta accion?",
  text: "Esta accion no se puede deshacer",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Si, estoy seguro"
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  }
});
            }
        </script>
    </body>
</html>
