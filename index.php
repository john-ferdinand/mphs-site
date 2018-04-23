<?php
include("dbUtil/dbconnection.php");
include("daoimpl/AnnouncementDaoImpl.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Mother of Perpetual Help School</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/homestyle.css">

</head>
<body>

<!-- The social media icon bar -->
<div class="icon-bar">
    <a href="https://www.facebook.com/Mother-of-Perpetual-Help-School-Fairview-788882047837158/" target="_blank"
       class="facebook"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
    <a href="#" class="google"><i class="fa fa-google"></i></a>
    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>

<div class="top-container">
    <div class="c2" id="c2">
        <div class="c3">
            <div class="c3_1">
                <img src="assets/mphslogo.png" alt="mphs logo"/>
            </div>
            <!-- end of c3_1 -->
            <div class="c3_2">
                <h3>Mother of Perpetual Help School</h3>
                <h4>Humility in Greatness</h4>
            </div>
            <!-- end of c3_2 -->
        </div>
        <!-- end of c3 -->

        <div class="navigation-bar">
            <ul id="navigation">
                <li><a href="#" id="home-link">Home</a></li>
                <li><a href="#" id="our-school-link">Our School</a></li>
                <li><a href="#" id="admission-link">Admission</a></li>
                <li><a href="#" id="facilities-link">Facilities</a></li>
                <li><a href="#" id="contact-us-link">Contact Us</a></li>
            </ul>
        </div>
        <!-- end of c6 -->
    </div>
    <!-- end of c2 -->

    <div class="our-school" id="our-school">
        our school
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, dolor in porttitor elementum, lacus
            neque ornare neque, eget consequat dui libero non nunc. Nulla sit amet maximus arcu. Phasellus vulputate
            libero arcu. Proin lacinia odio sit amet massa mollis, id commodo neque congue. Suspendisse potenti.
            Curabitur non molestie erat. Duis vel nulla metus. Phasellus vestibulum, felis id laoreet mollis, lorem
            libero condimentum est, id feugiat orci tellus sed ipsum. Sed vehicula sed massa in bibendum. Nullam vel
            erat eu arcu porta tempus. Fusce a tempus enim.
        </p>

        <p>
            Suspendisse ac massa congue, euismod erat a, vulputate nisi. Vivamus id diam sed enim sollicitudin blandit.
            Maecenas luctus et quam eget tincidunt. Proin non lectus vel purus ornare lobortis. Sed sed dolor et ante
            pretium luctus eu nec augue. Curabitur vel orci vitae magna ullamcorper condimentum eget id augue. Maecenas
            ac accumsan quam, vitae tincidunt sapien. Proin erat nunc, placerat ac sodales vitae, pharetra id elit. Ut
            commodo neque quis turpis pellentesque, non sollicitudin turpis vehicula. Aliquam blandit tempor iaculis.
            Quisque a mollis velit. Aliquam suscipit mauris sit amet leo tincidunt, a interdum lorem ultricies. Etiam in
            dictum justo. Sed tincidunt felis tortor, vitae posuere purus vulputate quis.
        </p>

        <p>
            Ut fermentum laoreet tortor eu dapibus. Sed quis sem in mauris elementum tincidunt ut a odio. Nunc consequat
            est quam, vel auctor massa egestas quis. In sollicitudin auctor enim, a facilisis justo blandit vitae. In
            hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
            ridiculus mus. Vestibulum dignissim imperdiet nisi nec maximus. Nunc posuere suscipit quam quis tincidunt.
            Aenean sed tincidunt magna. Curabitur eu ex ac erat vestibulum laoreet. Praesent non nibh felis. Nunc ac
            erat venenatis, vehicula metus vitae, consectetur lacus. Pellentesque convallis, tortor at facilisis
            ullamcorper, ipsum ipsum interdum mi, eu tincidunt tortor orci quis lectus. Quisque a molestie sem.
        </p>
    </div>

    <div class="admission" id="admission">
        admission
    </div>

    <div class="facilities" id="facilities">
        facilities
    </div>

    <div class="contact-us" id="contact-us">
        contact us
    </div>

    <div class="content-container" id="content-container">
        <div class="c10" id="c10">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active c11">
                        <img src="assets/facility1.jpg" alt="">
                    </div>
                    <div class="item c11">
                        <img src="assets/facility2.jpg" alt="">
                    </div>
                    <div class="item c11">
                        <img src="assets/facility3.jpg" alt="">
                    </div>
                    <div class="item c11">
                        <img src="assets/facility4.jpg" alt="">
                    </div>
                    <div class="item c11">
                        <img src="assets/facility5.jpg" alt="">
                    </div>
                    <div class="item c11">
                        <img src="assets/facility6.jpg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- end of carouselContainer -->
    </div>
    <!-- end of c9 -->

    <div class="c13">
        <div class="latest-news-and-announcement-container">
            <div class="bottom-menu-label-container">
                <label>Latest News and Announcement</label>
            </div>
            <div class="bottom-menu-content-container">
                <?php
                    $announcementDaoImpl = new AnnouncementDaoImpl($pdo);
                    $announcementList = $announcementDaoImpl->getAllAnnouncementByMostRecent();
                    foreach($announcementList as $key => $value)
                    {
                        echo "<h3>".$value->getTitle()."</h3>";
                    }
                ?>
            </div>
        </div>
        <div class="events-calendar-container">
            <div class="bottom-menu-label-container">
                <label>Events Calendar</label>
            </div>
            <div class="bottom-menu-content-container">

            </div>
        </div>
        <div class="quick-links-container">
            <div class="bottom-menu-label-container">
                <label>Quick Links</label>
            </div>
            <div class="bottom-menu-content-container">

            </div>
            <div>

            </div>
        </div>

    </div>

    <div class="footer-wrapper">
        <div class="footer-wrapper-child1">
            <p>
                &copy; Mother of Perpetual Help School | Legal Notice <br/>
                Iris Street Dahlia, West Fairview, Quezon City, 1118 Metro Manila <br/>
            </p>
        </div>
    </div>


</div>
<!-- end of top-contentContainer -->


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>

</body>
</html>