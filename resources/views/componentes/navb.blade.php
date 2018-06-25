<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->

    <link rel="stylesheet" type="text/css" href="css/mdb.css" media="screen" /> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

</head>

<body>

  <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header sticky-top">
                <h3>Bootstrap Sidebar</h3>
                
            </div>
          
            <ul class="navbar-nav mr-auto ">
                <p>Dummy Heading</p>
                <li class="nav-item ">
                    <a class="nav-link" href="#">About
                    </a>
                 </li>
                <li class="nav-item">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar sticky-top navbar-dark default-color justify-content-between">
                <a class="navbar-brand" href="#" id="sidebarCollapse"> <i class="fas fa-align-left"></i></a>
                <form class="form-inline my-1">
                    <div class="md-form form-sm my-0">
                        <input class="form-control form-control-sm mr-sm-2 mb-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <button class="btn btn-outline-white btn-sm my-0" type="submit">Search</button>
                </form>
            </nav>


            <div class="container09 pl-4 pr-4">
            @yield('content')
            </div>
            
           <!-- Footer -->
<footer class="page-footer font-small cyan darken-3 mt-4">

    <!-- Footer Links -->
    <div class="container">

    <!-- Grid row-->
    <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

            <!-- Facebook -->
            <a class="fb-ic">
            <i class="fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
            <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
            <i class="fa fa-google-plus fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
            <i class="fa fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
            <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
            <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
        </div>
        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row-->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
            
        </div>




    <script src="js/jquery-3.2.1.min.js">

    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/mdb.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>






</body>

</html>