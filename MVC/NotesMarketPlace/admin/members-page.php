<!DOCTYPE html>
<html lang="en">

<head>

    <!--Meta tags-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">
    <meta charset="UTF-8">

    <!--Title-->
    <title>Notes Marketplace</title>

    <!--Fevicon-->
    <link rel="icon" href="images/favicon.ico">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!--Font-Awesome-->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!--Custom css-->
    <link rel="stylesheet" href="css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="sticky-header">

    <div class="above-footer">


        <!--header -->
        <?php include "header.php" ?>
        <!--header end-->

        <div class="container ">
            <div class="row heading-margin">
                <div class="col-md-6 column-padding-remover">
                    <h4 class="blue-font-30 margin-l">Members</h4>
                </div>
                <div class="col-md-2"></div>
                <div id="dashboard-search-btn-2" class="col-md-4 column-padding-remover ">
                    <div class="dashboard-search-jointer">
                        <input type="text" class="form-control margin-l dashboard-search-icon search-icon"
                            placeholder="&#xf002; Search">
                        <button class="btn btn-primary blue-button-hover-white margin-r">search</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 column-padding-remover margin-top-15">
                    <div class="table-responsive">
                        <table class="table entire-table table-e-large member-t">
                            <tr class="table-heading text-center">
                                <th>sr no.</th>
                                <th>first name</th>
                                <th>last name</th>
                                <th>email</th>
                                <th>joining date</th>
                                <th>notes under review</th>
                                <th>published date</th>
                                <th>downlaoded notes</th>
                                <th>total expenses</th>
                                <th>total earnings</th>
                                <th></th>
                            </tr>
                            <tr class="text-center">
                                <td>1</td>
                                <td>khyati</td>
                                <td>patel</td>
                                <td>khyatipatel@gmail.com</td>
                                <td>09-12-2020, 10:10</td>
                                <td>19</td>
                                <td>10</td>
                                <td>22</td>
                                <td>&#36;220</td>
                                <td>&#36;117</td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Deactive</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>rahul</td>
                                <td>shah</td>
                                <td>rahulshah@gmail.com</td>
                                <td>11-11-2020, 10:10</td>
                                <td>29</td>
                                <td>20</td>
                                <td>32</td>
                                <td>&#36;2205</td>
                                <td>&#36;17</td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Deactive</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>suman</td>
                                <td>trivedi</td>
                                <td>sumantrivedi@gmail.com</td>
                                <td>11-02-2020, 10:10</td>
                                <td>49</td>
                                <td>19</td>
                                <td>32</td>
                                <td>&#36;120</td>
                                <td>&#36;217</td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Deactive</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>4</td>
                                <td>raj</td>
                                <td>mehra</td>
                                <td>rajmehra@gmail.com</td>
                                <td>23-06-2020, 12:17</td>
                                <td>83</td>
                                <td>48</td>
                                <td>27</td>
                                <td>&#36;410</td>
                                <td>&#36;31</td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Deactive</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>5</td>
                                <td>niye</td>
                                <td>patel</td>
                                <td>niyapatel@gmail.com</td>
                                <td>12-03-2020, 07:28</td>
                                <td>45</td>
                                <td>78</td>
                                <td>10</td>
                                <td>&#36;347</td>
                                <td>&#36;301</td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Deactive</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination -->
        <div class="search-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">❮</a>
                </li>
                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                <li class="page-item aria-current=" page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">❯</a></li>
            </ul>
        </div>
        <!-- pagination end -->

    </div>

    <!--footer-->
    <?php include "footer.php"; ?>
    <!--footer end-->



    <!--popper js-->
    <script src="js/popper/popper.min.js"></script>

    <!--jquery js-->
    <script src="js/jquery/jquery.min.js"></script>

    <!--bootstrap js-->
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!--Custom Script-->
    <script src="js/script.js"></script>

</body>

</html>