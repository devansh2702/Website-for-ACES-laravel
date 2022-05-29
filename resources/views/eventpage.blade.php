<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title>Event page</title>
<style>
    body{
        background-color:  rgb(15, 25, 119);
        color: rgba(92, 223, 223, 0.986);
    }
    .para{
        text-align: justify;
        font-size:2vw;
        font-family: Georgia, serif;
        margin: 3% 20%;
    }
    .heading{
        text-decoration: underline;
        text-transform: uppercase;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        letter-spacing: 5px;
        font-family: Verdana, sans-serif;
        font-size:4vw;
        text-align:center;
        margin: 5% 10%;
    }
</style>
</head>
<body>
@include('nav')
<div class="heading">Event Memories</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:1200px;text-align:center;margin:5% 20%;">
  <div class="carousel-inner" >
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Previous Event Photos\20191003_104516.jpg" alt="First slide" style="height:700px;">
    </div>
    <div class="carousel-item active">
    <img class="d-block w-100" src="\assets\Previous Event Photos\20191003_125435.jpg"  style="height:700px;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\20191003_125758.jpg"  style="height:700px;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_0037.jpg"  style="height:700px;"> </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_0040.jpg"  style="height:700px;">   </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_0042.jpg"  style="height:700px;">  </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_20180201_172619.jpg"  style="height:700px;">   </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_20180201_172722.jpg"  style="height:700px;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG_20191003_113836.jpg"  style="height:700px;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG-20191003-WA0018.jpg"  style="height:700px;">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="\assets\Previous Event Photos\IMG-20191003-WA0019.jpg"  style="height:700px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>
<div class="heading">Virtual Meet</div>
<div class="embed-responsive embed-responsive-16by9" style="margin:5% 20%;width:1200px;">
  <iframe style="width: 1200px;height: 500px;"class="embed-responsive-item" src="\assets\Previous Event Videos\aces_it_nu-20211229-0001.mp4"></iframe>
</div>
<div class="heading">Fun Games</div>
<div class="embed-responsive embed-responsive-16by9" style="margin:5% 20%;width:600px;">
  <iframe style="width: 600px;height: 800px;"class="embed-responsive-item" src="\assets\Previous Event Videos\Snapchat-487896050.mp4"></iframe>
</div>
</body>
</html>