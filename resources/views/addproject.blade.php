<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Add-Organisme</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark text-light" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Boubella IT</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{ url('/') }}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="{{ url('/projects') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="bi bi-person-fill-add"></i>Project Liste</a>
                <a href="{{ url('/addorg') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-person-fill-add"></i>Ajouter des Organismes</a>
                <a href="{{ url('/addprjt') }}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=""></i>Ajouter des Projets</a>


                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->


            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left text-light fs-4 me-3" id="menu-toggle"></i>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2 text-light"></i><span class="text-light">Boubella</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>





                <form action="{{ url('addprojects') }}"   method="post" style="margin:10px;">
                    @csrf
                    @method('post')
                    <div class="card shadow mb-3 bg-dark text-light">
                        <div class="card-header py-3">
                            <p class="text-secondary m-0 fw-bold">Fill in the required fields *</p>
                        </div>

                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-12 col-md-8 col-lg-8">


                                    <div class="mb-3"><label class="form-label"><b>Code Organisme </b></label><input class="form-control" type="text"  name="CodeOrg" required=""   ></div>
                                </div>

                            </div>
                            <div class="mb-3"><label class="form-label" ><b>Nom </b><br></label><textarea class="form-control"  rows="4" name="Nom" placeholder="Entrez l'Adresse" required=""  ></textarea></div>
                            <div class="mb-3"><label class="form-label" ><b>Description </b></label><input class="form-control" type="text"  placeholder="Entrez le nom de contact" name="Description" required=""  ></div>
                            <div class="mb-3"><label class="form-label"  ><b>Date debut</b></label><input class="form-control" type="date"  placeholder="Entrez l'email de contact" name="Date_debut" required=""  ></div>
                            <div class="mb-3"><label class="form-label"  ><b>Date fin</b></label><input class="form-control" type="date"  placeholder="Entrez l'adresse web" name="Date_fin" required=""  ></div>


                            <div class="text-end mb-3"><button type="submit">Save&nbsp;service</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn1"><a  role="button" href="{{ url('/projects') }}">Cancel</a></button></div>
                        </form>
                        <style>
                a{
                    text-decoration: none;
                    color: white
                }
                a:hover{
                    color: white
                }
                .btn1 {
                 outline: none;
                 cursor: pointer;
                 border: none;

                 padding: 0.9rem 2rem;
                 margin: 0;
                 font-family: inherit;
                 font-size: inherit;
                 position: relative;
                 display: inline-block;
                 letter-spacing: 0.05rem;
                 font-weight: 700;
                 font-size: 17px;
                 border-radius: 500px;
                 overflow: hidden;
                 background: #e90707;
                 color: ghostwhite;
                }

                .btn1 span {
                 position: relative;
                 z-index: 10;
                 transition: color 0.4s;
                }

                .btn1 :hover span {
                 color: rgb(248, 0, 0);
                }

                .btn1 ::before,
                .btn1 ::after {
                 position: absolute;
                 top: 0;
                 left: 0;
                 width: 100%;
                 height: 100%;
                 z-index: 0;
                }

                .btn1 ::before {
                 content: "";
                 background: #f1020270;
                 width: 120%;
                 left: -10%;
                 transform: skew(30deg);
                 transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
                }

                .btn1 :hover::before {
                 transform: translate3d(100%, 0, 0);
                }




                            button {
                 outline: none;
                 cursor: pointer;
                 border: none;
                 padding: 0.9rem 2rem;
                 margin: 0;
                 font-family: inherit;
                 font-size: inherit;
                 position: relative;
                 display: inline-block;
                 letter-spacing: 0.05rem;
                 font-weight: 700;
                 font-size: 17px;
                 border-radius: 500px;
                 overflow: hidden;
                 background: #001aff;
                 color: rgb(255, 255, 255);
                 padding-left: 2%
                }

                button span {
                 position: relative;
                 z-index: 10;
                 transition: color 0.4s;
                }

                button:hover span {
                 color: rgba(14, 35, 228, 0.685);
                }

                button::before,
                button::after {
                 position: absolute;
                 top: 0;
                 left: 0;
                 width: 100%;
                 height: 100%;
                 z-index: 0;
                }

                button::before {
                 content: "";
                 background: #0307e2d0;
                 width: 120%;
                 left: -10%;
                 transform: skew(30deg);
                 transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
                }

                button:hover::before {
                 transform: translate3d(100%, 0, 0);
                }

                        </style>





                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---Sleek-Image-Input-with-Preview.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-theme.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");

            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>

    </body>
</html>
