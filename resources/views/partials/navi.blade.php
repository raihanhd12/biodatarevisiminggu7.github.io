<!-- File CSS
================================================== -->
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="stylesheet" href="css/media-queries.css">   

<nav id="nav-item">
    <ul id="nav" class="nav">
        <li class=" {{ Request::is('/') ? 'current' : '' }}">
            <a href="/">Home</a></li>
        <li class=" {{ Request::is('about') ? 'current' : '' }}">
            <a href="about">About</a></li>
        <li class=" {{ Request::is('comment') ? 'current' : '' }}">
            <a href="comment">Comment</a></li>        
    </ul> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/waypoints.js"></script>    
<script src="js/init.js"></script>
