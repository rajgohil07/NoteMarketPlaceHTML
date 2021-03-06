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

    <!--header -->
    <?php include "header.php" ?>
    <!--header end-->

    <div id="search-all-font">
        <div id="search-top-img">
            <img src="images/banner-with-overlay-user-profile.jpg" alt="Banner image" class="img-fluid">
            <div id="search-home-heading" class="text-center">
                <h3 class="heading-margin">Search Notes</h3>
            </div>
        </div>
        <div id="search-filter-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <h4>Search and Filter notes</h4>
                    </div>
                </div>
            </div>
        </div>
        <div id="search-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-12 col-sm-12 col-12">
                        <div id="search-icon">
                            <i class="fa fa-search"></i>
                            <input id="search-note-main" type="text" class="form-control input-light-color"
                                placeholder="Search your notes here...">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <div id="search-filters">
                            <div class="row">
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select type</option>
                                        <option>Free</option>
                                        <option>Paid</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select category</option>
                                        <option>PDF(Digital)</option>
                                        <option>Scanned</option>
                                        <option>Hard-Copy</option>
                                        <option>Hand-writing</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select college university</option>
                                        <option>GTU</option>
                                        <option>STU</option>
                                        <option>Nirma</option>
                                        <option>Marwadi</option>
                                        <option>Delhi University</option>
                                        <option>MS University</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select course</option>
                                        <option>Computer-science</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Electrical Engineering</option>
                                        <option>Automobile Engineering</option>
                                        <option>Drwing</option>
                                        <option>Bio-logy</option>
                                        <option>Arts-study</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select country</option>
                                        <option>India</option>
                                        <option>Japan</option>
                                        <option>USA</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                        <option>Australia</option>
                                        <option>Pakistan</option>
                                        <option>Tajikistan</option>
                                        <option>Taiwan</option>
                                        <option>Switzerland</option>
                                        <option>Sri Lanka</option>
                                        <option>North Korea</option>
                                        <option>South Korea</option>
                                        <option>Philippines</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-6 search-type-gap">
                                    <select class="text-hidden form-control options-arrow-down">
                                        <option selected disabled>Select rating</option>
                                        <option>5</option>
                                        <option>4</option>
                                        <option>3</option>
                                        <option>2</option>
                                        <option>1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="search-result">
            <div class="container">
                <div class="row">
                    <div id="search-result-heading">
                        <div class="col-md-12 col-md-12 col-sm-12 col-12">
                            <h2>Total 18 notes</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(1).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            Computer Operating System - Final Exam With Paper Solution
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="university">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="book">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="calender">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="flag">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(2).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            Computer science
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate1">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(3).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            basic Computer engineering tech india publication series
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate2">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(4).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            Computer science illuminated seventh edition
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate3">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(5).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            the principles of Computer hardware - oxford
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate4">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(6).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            the Computer book
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate5">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(1).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            Computer Operating System -Final Exam With Paper Solution
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate6">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(2).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            Computer science
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate7">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 single-book-selecter">
                        <a href="notes-details-page.php">
                            <img src="images/Book-cover-(3).jpg" class="img-fluid search-img-border"
                                title="Click to View more" alt="Book Cover photo">
                        </a>
                        <a href="notes-details-page.php">
                            <div class="search-result-below-img">
                                <ul>
                                    <li>
                                        <h3>
                                            basic Computer engineering tech india publication series
                                        </h3>
                                    </li>
                                </ul>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/university-dark.png" alt="">
                                    <h6 class="search-result-data-body">University of California, US</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/book_open.png" alt="">
                                    <h6 class="search-result-data-body">204 Pages</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/calender-blue.png" alt="">
                                    <h6 class="search-result-data-body">Thu, Nov 26 2020</h6>
                                </div>
                                <div class="search-result-data">
                                    <img class="search-icon-resizer" src="images/red-flag.png" alt="">
                                    <h6 class="search-result-data-body search-result-red">5 Users have marked this note
                                        as
                                        inappropriate</h6>
                                </div>
                                <div class="search-result-rating">
                                    <div class="rate8">
                                        <div class="rate"></div>
                                    </div>
                                </div>
                                <h5>123 reviews</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- pagination -->
        <div id="responsive-pagination">
            <div class="search-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">❮</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                    <li class="page-item aria-current=" page"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">❯</a></li>
                </ul>
            </div>
        </div>
        <!-- pagination end -->

        <!--footer-->
        <?php include "footer.php"; ?>
    </div>
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