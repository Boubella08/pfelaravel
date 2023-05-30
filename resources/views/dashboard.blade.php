<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Dashboard</title>

 <style>
    a{text-decoration: none;
    color: white;}

    a:hover{
        color: gray
    }

    th, thead{
  position: sticky;
  top: 0;
}
 </style>
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left text-light fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-light">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Boubella
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


            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3 ">
                        <div class="p-3 bg-dark text-light shadow-sm d-flex justify-content-around align-items-center rounded">
                            {{-- <div>
                                <h3 class="fs-2">198</h3>
                                <p class="fs-5">Products</p>
                            </div> --}}

                            <div class="counter-container">
                                <div class="counter" data-target="9000"></div>
                                <H4>Products </H4>
                              </div>



                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-dark text-light shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="counter-container">
                                <div class="counter" data-target="3857"></div>
                                <H4>Sales </H4>
                              </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-dark text-light shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="counter-container">
                                <div class="counter" data-target="4897"></div>
                                <H4>Delivery </H4>
                              </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-dark text-light shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div class="counter-container">
                                <div  >25%</div>
                                <H4>Increase </H4>
                              </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3 text-light">Liste d'organisme:</h3>
                    <div class="col table-responsive">
                        <table  id="table2" class= " table bg-dark text-light ">
                            <thead>
                                <tr>
                                    <th  scope="col">Code</th>
                                    <th  scope="col">Nom</th>
                                    <th  scope="col">Adresse</th>
                                    <th  scope="col">Numero de telephone</th>
                                    <th  scope="col">Le nom de contact</th>
                                    <th  scope="col">Email de contact</th>
                                    <th  scope="col">Adresse Web</th>
                                    <th scope="col"></th>


                                </tr>
                            </thead>
                            <tbody>

                                @foreach($organismes as $org)
                                   <tr>
                                    <td scope="row">{{$org->id}}</td>
                                    <td scope="row">{{ $org->Nom}}</td>
                                    <td scope="row">{{ $org ->Adresse }}
                                    <td scope="row">{{ $org->Numero_de_telephone }}</td>
                                    <td scope="row">{{ $org->Le_nom_de_contact }}</td>
                                    <td scope="row">{{ $org->Email_de_contact }}</td>
                                    <td scope="row"><a href="{{  $org->Adresse_web }}">{{ $org->Adresse_web }}</a></td>
                                     <td scope="row"><a  class="btn btn-outline-secondary  text-light " role="button" aria-pressed="true"  href= "{{route('organisme.edit' , $org->id)}}"> Modifier</a>
                                     </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table> <div >{{ $organismes->links() }}</div>
                    </div>
                </div>

            </div>
        </div>
    </div>












    <!-- /#page-content-wrapper -->
    </div>


    <script>
        const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  counter.innerText = "0";

  const updateCounter = () => {
    const target = +counter.getAttribute("data-target");
    const c = +counter.innerText;

    const increment = target / 450;

    if (c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`;
      setTimeout(updateCounter, 1);
    } else {
      counter.innerText = target;
    }
  };

  updateCounter();
});

      </script>


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
