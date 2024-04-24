<!doctype html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .mb-4 {
            color: #007bff;
            /* Couleur du texte */
            font-size: 24px;
            /* Taille de la police */
            font-weight: bold;
            /* Gras */
            margin-bottom: 20px;
            /* Marge en bas */
            text-align: center;
            /* Centrage du texte */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="{{ route('front.homepage') }}">
                <img src="{{asset('front/img')}}/logo.png" alt="logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#">Time Table</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Requests</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>

                </ul>
                <form class="d-flex ">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        <h2 class="mb-4">Time Table</h2>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th> <!-- Added column for Saturday -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>8:00 AM - 10:00 AM</td>
                    <td>Mathematics</td>
                    <td>Physics</td>
                    <td></td>
                    <td>English</td>
                    <td>Chemistry</td>
                    <td></td> <!-- Empty cell for Saturday -->
                </tr>
                <tr>
                    <td>10:00 AM - 12:00 PM</td>
                    <td>Chemistry</td>
                    <td>English</td>
                    <td></td>
                    <td>Mathematics</td>
                    <td>Physics</td>
                    <td></td> <!-- Empty cell for Saturday -->
                </tr>
                <tr>
                    <td>2:00 PM - 4:00 PM</td>
                    <td>Physical Education</td>
                    <td>French</td>
                    <td>Biochemistry</td>
                    <td>Physics</td>
                    <td>Mathematics</td>
                    <td></td> <!-- Empty cell for Saturday -->
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>