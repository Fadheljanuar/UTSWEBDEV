<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>AddPlayer</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md" style="background-color: #7d2c2c;color: rgb(30,131,231);">
    <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);"><br>National
            Basketball Association<br><br></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"
                                                            style="color: rgba(251,251,251,0.9);">Team List</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"
                                                            style="color: rgba(249,248,248,0.5);">Player List</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#"></a></li>
            </ul>
        </div>
    </div>
</nav>
<form action="{{ route('nbaplayer.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Player Name:</label>
        <input type="text" class="form-control" name="Player_Name" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
    </div>
    <div class="form-group">
        <label>Age:</label>
        <input type="text" class="form-control" name="Age" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
    </div>
    <div class="form-group">
        <label>Position : </label>
        <input type="number" class="form-control" name="Position" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
    </div>
    <div class="form-group">
        <label>Height : </label>
        <input type="number" class="form-control" name="Height" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
    </div>
    <div class="form-group">
        <label>Weight : </label>
        <input type="date" class="form-control" name="Weight" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
    </div>
    <div class="form-group">
        <label>Nba Team : </label>
        <select class="custom-select" name="Nba_team" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
            @foreach ($player as $player)
                <option value="{{ $player->id }}">{{$player->Player_Name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
</form>
<div class="footer-basic">
    <footer>
        <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i
                    class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a
                href="#"><i class="icon ion-social-facebook"></i></a></div>
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
<div class="input-group">
    <div class="input-group-prepend"></div>
    <div class="input-group-append"></div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
