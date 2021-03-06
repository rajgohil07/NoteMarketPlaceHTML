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

        <div class="container">
            <div class="row heading-margin">
                <div class="col-md-6 column-padding-remover">
                    <h4 class="blue-font-30 margin-l">Spam Reports</h4>
                </div>
                <div class="col-md-2"></div>
                <div id="dashboard-search-btn-2" class="col-md-4 column-padding-remover">
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
                        <table class="table entire-table text-center table-small spam-r-t">
                            <tr class="table-heading">
                                <th>sr no.</th>
                                <th>reported by</th>
                                <th>note title</th>
                                <th>category</th>
                                <th>data added</th>
                                <th>remark</th>
                                <th>action</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>khyati patel</td>
                                <td>software development</td>
                                <td>iT</td>
                                <td>09-12-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit.</td>
                                <td><img src="images/delete.png" alt="Delete"></td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Download Notes</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>rahul shah</td>
                                <td>computer basics</td>
                                <td>computer</td>
                                <td>10-12-2020, 10:10</td>
                                <td>Lorem ipsum dolor sit.</td>
                                <td><img src="images/delete.png" alt="Delete"></td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Download Notes</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>suman shah</td>
                                <td>human body</td>
                                <td>bio</td>
                                <td>07-10-2020, 11:11</td>
                                <td>Lorem ipsum dolor sit.</td>
                                <td><img src="images/delete.png" alt="Delete"></td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Download Notes</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>raj datt shah</td>
                                <td>world war 2</td>
                                <td>history</td>
                                <td>21-04-2020, 08:18</td>
                                <td>Lorem ipsum dolor sit.</td>
                                <td><img src="images/delete.png" alt="Delete"></td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Download Notes</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>niya patel</td>
                                <td>accouting</td>
                                <td>account</td>
                                <td>15-04-2020, 12:50</td>
                                <td>Lorem ipsum dolor sit.</td>
                                <td><img src="images/delete.png" alt="Delete"></td>
                                <td>
                                    <div class="dropdown dropleft">
                                        <a class="btn" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/dots.png" alt="open menu">
                                        </a>
                                        <ul class="dropdown-menu shadow-drop dropdowncustom-width dropdowncustom">
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">Download Notes</h6>
                                                </a></li>
                                            <li><a href="#">
                                                    <h6 class="dropdown-first-option">View More Details</h6>
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
<!--Custom Script-->
<script src="js/script.js"></script>

</body>

</html>