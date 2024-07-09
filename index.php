<!doctype html>
<html lang="en">
    <head>
        <title>Contact</title>
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
    </head>

    <body>
        <div class="container-fluid mx-0">
            <header>
                <h1 class="text-center">Form example</h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="home-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#home"
                        type="button"
                        role="tab"
                        aria-controls="home"
                        aria-selected="true"
                    >
                        Contact Us!
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="profile-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#profile"
                        type="button"
                        role="tab"
                        aria-controls="profile"
                        aria-selected="false"
                    >
                        Profile
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="messages-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#messages"
                        type="button"
                        role="tab"
                        aria-controls="messages"
                        aria-selected="false"
                    >
                        Messages
                    </button>
                </li>
            </ul>
        </header>
        <main>
            <h2 class="text-center my-3">Contact Us!</h2>
            <div class="container border d-flex align-items-center justify-content-center p-5" style="width: 50vw;">
                <form id="register-form" action="register.php" method="post">
                    <div class="row ">
                    <div class="col-md-6 mb-3">
                        <label for="" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            aria-describedby="emailHelpId"
                            placeholder="abc@mail.com"
                        />
                        <small id="emailHelpId" class="form-text text-muted"
                            >Ingrese sólo un correo académico</small
                        >
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            aria-describedby="Nombre"
                            placeholder="Nombre"
                        />
                        <small id="Nombre" class="form-text text-muted">Ingrese su primer nombre</small>
                    </div>
                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Enviar
                    </button>
                    
                </form>
                </div>
            </div>
            <div class="container border my-5 p-3">
            <button
                        id="getDataButton"
                        type="submit"
                        class="btn btn-primary"
                    >
                        Recibir Datos
                    </button>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-primary"
                        >
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
                    </div>
                    
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script src="scripts/form.js"></script>
    </body>
</html>
