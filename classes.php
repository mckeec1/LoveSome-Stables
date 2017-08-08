<?php
/**
 * Created by PhpStorm.
 * User: Conner
 * Date: 3/27/2017
 * Time: 7:10 PM
 */?>
<!DOCTYPE html>
<html>

<title>Our Classes</title>

<head>

    <link href="template.css" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="schedule.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans|Sansita');
    </style>

</head>

<body>
<div class="header" id="cHead">
    <div class="h">
        <h1 class="au">Classes and Schedule</h1>
    </div>
</div>

<div class="nav">
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="studvolInfo.php">Student/Volunteer Information</a></li>
            <li><a href="programs.php">Programs</a></li>
            <li><a href="fundraising.php">Fundraising</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
</div>

<div class="content" id="c">
    <h2 id="student">Our Classes and Schedule</h2>
</div>

<div class="calendar">
    <div id="calendar-wrap">
        <header>
            <h1>March 2017</h1>
        </header>
        <div id="calendar">
            <ul class="weekdays">
                <li>Sunday</li>
                <li>Monday</li>
                <li>Tuesday</li>
                <li>Wednesday</li>
                <li>Thursday</li>
                <li>Friday</li>
                <li>Saturday</li>
            </ul>

            <!-- Days from previous month -->

            <ul class="days">
                <li class="day other-month">
                    <div class="date">27</div>
                </li>
                <li class="day other-month">
                    <div class="date">28</div>
                    <div class="event">
                        <div class="event-desc">
                           Put Content Here
                        </div>
                        <div class="event-time">
                            1:00pm to 3:00pm
                        </div>
                    </div>
                </li>
                <li class="day other-month">
                    <div class="date">29</div>
                </li>
                <li class="day other-month">
                    <div class="date">30</div>
                </li>
                <li class="day other-month">
                    <div class="date">31</div>
                </li>

                <!-- Days in current month -->

                <li class="day">
                    <div class="date">1</div>
                </li>
                <li class="day">
                    <div class="date">2</div>
                    <div class="event">
                        <div class="event-desc">
                            Use this possibly to display schedules
                        </div>
                        <div class="event-time">
                            2:00pm to 5:00pm
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Row #2 -->

            <ul class="days">
                <li class="day">
                    <div class="date">3</div>
                </li>
                <li class="day">
                    <div class="date">4</div>
                </li>
                <li class="day">
                    <div class="date">5</div>
                </li>
                <li class="day">
                    <div class="date">6</div>
                </li>
                <li class="day">
                    <div class="date">7</div>
                    <div class="event">
                        <div class="event-desc">
                            Meeting
                        </div>
                        <div class="event-time">
                            6:00pm to 8:30pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">8</div>
                </li>
                <li class="day">
                    <div class="date">9</div>
                </li>
            </ul>

            <!-- Row #3 -->

            <ul class="days">
                <li class="day">
                    <div class="date">10</div>
                </li>
                <li class="day">
                    <div class="date">11</div>
                </li>
                <li class="day">
                    <div class="date">12</div>
                </li>
                <li class="day">
                    <div class="date">13</div>
                </li>
                <li class="day">
                    <div class="date">14</div><div class="event">
                        <div class="event-desc">
                           Meeting
                        </div>
                        <div class="event-time">
                            1:00pm to 3:00pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">15</div>
                </li>
                <li class="day">
                    <div class="date">16</div>
                </li>
            </ul>

            <!-- Row #4 -->

            <ul class="days">
                <li class="day">
                    <div class="date">17</div>
                </li>
                <li class="day">
                    <div class="date">18</div>
                </li>
                <li class="day">
                    <div class="date">19</div>
                </li>
                <li class="day">
                    <div class="date">20</div>
                </li>
                <li class="day">
                    <div class="date">21</div>
                </li>
                <li class="day">
                    <div class="date">22</div>
                    <div class="event">
                        <div class="event-desc">
                            Meeting
                        </div>
                        <div class="event-time">
                            9:00am to 12:00pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">23</div>
                </li>
            </ul>

            <!-- Row #5 -->

            <ul class="days">
                <li class="day">
                    <div class="date">24</div>
                </li>
                <li class="day">
                    <div class="date">25</div>
                    <div class="event">
                        <div class="event-desc">
                            Meeting
                        </div>
                        <div class="event-time">
                            1:00pm to 3:00pm
                        </div>
                    </div>
                </li>
                <li class="day">
                    <div class="date">26</div>
                </li>
                <li class="day">
                    <div class="date">27</div>
                </li>
                <li class="day">
                    <div class="date">28</div>
                </li>
                <li class="day">
                    <div class="date">29</div>
                </li>
                <li class="day">
                    <div class="date">30</div>
                </li>
            </ul>

            <!-- Row #6 -->

            <ul class="days">
                <li class="day">
                    <div class="date">31</div>
                </li>
                <li class="day other-month">
                    <div class="date">1</div> <!-- Next Month -->
                </li>
                <li class="day other-month">
                    <div class="date">2</div>
                </li>
                <li class="day other-month">
                    <div class="date">3</div>
                </li>
                <li class="day other-month">
                    <div class="date">4</div>
                </li>
                <li class="day other-month">
                    <div class="date">5</div>
                </li>
                <li class="day other-month">
                    <div class="date">6</div>
                </li>
            </ul>

        </div><!-- /. calendar -->
    </div><!-- /. wrap -->
</div>

<footer> 2017 &copy; Built by <a href="#">Me.</a> </footer>

</body>
</html>
