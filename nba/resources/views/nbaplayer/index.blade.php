<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Player List</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #7d2c2c;color: rgb(30,131,231);margin: 0px;">
    <div class="container-fluid"><a class="navbar-brand" href="" style="color: rgba(255,255,255,0.9);"><br>National Basketball Association<br><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ route('nbateam.index') }}" style="color: rgba(251,251,251,0.9);">Team List</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('nbaplayer.index') }}" style="color: rgba(249,248,248,0.5);">Player List</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
            </ul><div class="row">
                <div class="col-md-2 offset-md-12">
                    <a href="{{ route('nbaplayer.create') }}" class="btn btn-primary btn-block" role="button"
                       aria-pressed="true" onmouseover="this.style.boxShadow='opx 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Player</a>
                </div>
            </div>
    </div>
</nav>
<div class="table-responsive" style="padding: -12px;padding-top: 30px;">
    <table class="table">
        <thead>
        <tr style="padding: 0;margin: 0px;">
            <th style="width: 200px;background-color: #17408b;color: rgb(239,242,245);">Player Name</th>
            <th style="width: 200px;background-color: #ffffff;color: rgb(0,0,0);">Age</th>
            <th style="background-color: #c9082a;color: rgb(249,251,252);width: 200px;">Position</th>
            <th style="width: 200px;background-color: #17408b;color: rgb(235,238,241);">Height</th>
            <th style="width: 200px;background-color: #ffffff;color: rgb(0,0,0);">Weight</th>
            <th style="width: 200px;background-color: #c9082a;color: rgb(251,252,252);">NBA Team</th>
            <th style="width: 200px;background-color: #17408b;color: rgb(254,254,254);">Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
        </tbody>
    </table>
</div>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th style="width: 200px;">lebron</th>
            <th style="width: 200px;">Text</th>
            <th style="width: 200px;">Column 2</th>
            <th style="width: 200px;">Text</th>
            <th style="width: 200px;">Text</th>
            <th style="width: 200px;">Text</th>
            <th style="width: 200px;"><button class="btn btn-primary" type="button" style="margin-right: 5px;width: 73.5px;">Edit</button><button class="btn btn-primary" type="button" style="width: 73.5px;background-color: rgb(221,24,24);">Delete</button></th>
        </tr>
        </thead>
        <tbody>
        <tr></tr>
        <tr></tr>
        </tbody>
    </table>
</div>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Fadhel Januar S © 2020</p>
    </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
