<!DOCTYPE html>
<html lang="fr">
<?php
// GETTING THE HEADER AND PASSING $title
$title = "User Page";
require_once './components/head.php';
?>



<body class="bg-light">
    <link rel="stylesheet" href="css/user.css">

    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <a href="/" class="navbar-brand ps-3 pb-3 ms-lg-0">
            <img class="brand-logo" src="img/logo.png" alt="Fly It Logo" />
        </a>
        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-lg-0 w-100 d-flex justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link my-2" href="#">SECTION 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-2" href="#">SECTION 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link my-2" href="#">SECTION 3</a>
                </li>

            </ul>
            <div class="user-menu dropdown pb-2 d-flex justify-content-center text-light me-4">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="user_name">UserName</span>
                    <i class="fa-solid fa-user"></i>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Mot de passe</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Deconecter</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <section class="container-fluid mx-1">
        <h2 class="text-center">Users</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Role</th>
                    <th scope="col">Connected</th>
                    <th scope="col">Last Connected</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Active Profile</th>
                    <th scope="Actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>alexbalak</td>
                    <td>alex@mail.com</td>
                    <td>Alexandre</td>
                    <td>Balakirev</td>
                    <td>Admin</td>
                    <td>Non</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>Oui</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-success">Modify</button>
                            <button type="button" class="btn btn-outline-warning">Disable</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>alexbalak</td>
                    <td>alex@mail.com</td>
                    <td>Alexandre</td>
                    <td>Balakirev</td>
                    <td>Admin</td>
                    <td>Non</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>Oui</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-success">Modify</button>
                            <button type="button" class="btn btn-outline-warning">Disable</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>alexbalak</td>
                    <td>alex@mail.com</td>
                    <td>Alexandre</td>
                    <td>Balakirev</td>
                    <td>Admin</td>
                    <td>Non</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>2023-11-10 00:49:38</td>
                    <td>Oui</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-success">Modify</button>
                            <button type="button" class="btn btn-outline-warning">Disable</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <h1>Test Table</h1>
        <?php
        require_once("./components/Table.php");
        $table = new Table($id = "users", ["id", "username", "email", "First name", "Last name"]);
        $table->add_action("modify", "Modify", "success");
        $table->add_action("disable", "Disable", "warning");
        $table->add_action("del", "Delete", "danger");
        $render_table = $table->generate([[1, 'alexbalak', 'alex@mail.com', "Alex", "Balak"], [2, 'maxpayne', 'max@mail.com', "Max", "Payne"]]);
        echo $render_table;


        ?>





    </section>

    <?php
    require_once("./components/footer.php");

    require_once('./components/back_to_the_top.php');
    ?>

    <!------------------------------------------------------------ JavaScript Libraries------------------------------------------------------------>
    <?php
    require_once("./components/jslib.php");
    ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/user.js"></script>
    <!-- <script src="js/jobs.js"></script> -->
</body>