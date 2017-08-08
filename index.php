<?php
/**
 * Created by PhpStorm.
 * User: Conner
 * Date: 2/13/2017
 * Time: 6:14 PM
 */?>
<!DOCTYPE html>
<html>
<title>Welcome</title>

<head>


    <link href="default.css" rel="stylesheet" type="text/css">
    <link href="responsive.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="jquery-backstretch-master/jquery.backstretch.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Sansita');
    </style>

</head>
<body>
<div class="intro" id="test">
    <script>
        $("#test").backstretch(["assets/h1.jpg", "assets/h2.jpg", "assets/h3.jpg"], {duration: 4000, fade: 750});
    </script>
    <div class="fade">
    <h1>Lovesome Stables Equitherapy</h1>
    <h3>Where Everyone is Welcome to Horse Around!</h3>
    </div>
</div>


<div class="nav">
    <nav>
    <ul>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="studvolInfo.php">Student/Volunteer Information</a></li>
        <li><a href="classes.php">Classes</a></li>
        <li><a href="programs.php">Programs</a></li>
        <li><a href="fundraising.php">Fundraising</a></li>
        <li><a href="sponsors.php">Sponsors</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    </nav>
</div>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="content">
    <div class="image">
        <img src="assets/imgOne.JPG">
    </div>

    <div class="latestNews">
        <h2>Latest News and Updates</h2>
        <div class="feed">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="300" data-height="250"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a>
                </blockquote></div>
        </div>
    </div>

<div class="main" id="para">
<p>Lovesome Stables Equitherapy provides therapeutic horseback riding for children and adults in Northern Kentucky.
    Equine-assisted therapy activities offer physical, emotional, and social benefits. Therapeutic horseback riding
    opens up a new world of experiences to students of all ages. And, most importantly, the kids have a great time.
    Our “equine volunteers” are the unique facilitators of this therapy, and our volunteers help each child feel
    special, important and valued. </p>
</div>
<div class="second" id="para">
    <div class="image2">
        <img src="assets/imgTwo.JPG">
    </div>
    <p>Lovesome Stables is a non-profit organization and is affiliated with Professional Association of Therapeutic
        Horsemanship International (PATH International). PATH International is a national regulatory agency that assists
        centers like Lovesome Stables with accreditation, instructor certification, safety guidelines and research.
        All of our instructors are PATH certified. Volunteers receive training from a certified instructor to ensure
        safety of the participants and other volunteers.</p>
</div>

<div class="comments" id="para">
    <div class="image3">
        <img src="assets/imgThree.JPG">
    </div>
    <p>"Chris and his fellow riders (and their families) greatly appreciate all the weekly and show day effort that
        Lovesome Stables and the staff and wonderful volunteers put forth so these "old geezer" riders can experience an
        hour of true bliss each week!!  I know your efforts are worth it each time I see Chris perched on Jack's back
        with an ear-to-ear grin across his sweet face. There is no doubt how happy he is!!!  Thank you and everyone at
        Lovesome for the gift you have given us all!!”</p>
</div>
</div>

<footer> 2017 &copy; Built by <a href="#">Me.</a> </footer>

</body>
</html>
