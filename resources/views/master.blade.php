<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <title>Projeto novo Laravel</title>
    <style>
        .top-bar {
            background-color: #343a40;
            box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
        }

        body {
            background: rgb(236, 244, 251);
            font-family: "Roboto", sans-serif;

        }

        .bg-person{
            background: rgb(236, 244, 251);

        }


        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }


        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .container-fluid {
            max-width: 1400px;


        }

        .container {
            max-width: 1400px;

        }

        .border_person {
            border: 1px solid #dee2e6;
            box-shadow: 0px 0 25px 0 rgba(0, 0, 0, 0.1);
            background: #fff;
            border-radius: 16px;


        }

        .opacidade-customizada {
            opacity: 0.7;

        }

        


        
    </style>

    @yield('css')
</head>

<body>
    <div class="top-bar">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                   <!--  <nav class="navbar navbar-expand navbar-dark bg-dark">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav> -->
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>