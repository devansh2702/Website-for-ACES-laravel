<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
    body{
        background-color:  rgb(15, 25, 119);
        color: rgba(92, 223, 223, 0.986);
    }
    .cont{
        width: 70%;
        margin:  10%;
        font-family: Georgia, serif;
        
    }
    .para{
        text-align: justify;
        font-size:2vw;
        font-family: Georgia, serif;
        margin-left:30%;
        margin-right:auto;
        color:black;
        font-weight:bold;
    }
    table{
        
        line-height: 1.8;
        font-size:30px;
        font-family: Georgia, serif;
        margin:  10%;
        margin-right: 100px;
        width: 500px;
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
   
    .column {
  float: left;
  width: 650px;
  padding: 0px 100px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 20px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
        <title>Team page</title>
    </head>
    <body>
    @include('nav')
<div class="heading" >Faculty Advisors</div>


<div class="row" style="margin-left:20%;">
  <div class="column">
    <div class="card">
        <img src="\assets\Faculty_Advisor_Pooja Shah.jpg" style="width:400px;height:500px;">
        <div class="para">Pooja Shah</div>
    </div>
  </div>
  <div class="column">
    <div class="card">
    <img src="\assets\Faculty_Advisor_Sapan Sir.jpg" style="width:400px;height:500px;">
    <div class="para">Sapan Sir</div>
    </div>
  </div>
</div>
<div class="heading" >Aces Board Members</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width:600px;text-align:center;margin:5% 30%;">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="\assets\Board Member Photos\Aayush Shah - Graphic Designer.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Akshat Shah - Organizing Secretary.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Ansh Ray - Public Relations Officer.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Gaurav Sakariya - Creative Head.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Kalp Mepani - Treasurer.jpeg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Kanisha Shah - President.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Kunj Thakkar-General Secretary.jpeg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Manan Patel - Join Secretary.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Meet Vora - Vice President.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Meet Vora - Vice President.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Mrunal Shah - Director General.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Naman Thaker - Managing director.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="\assets\Board Member Photos\Sachi_Chaudhary-Marketing_Director.jpg" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>

<div class="cont">
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Sr no.</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Kanisha Shah</td>
      <td>President
</td>
      <td>19BCE253@nirmauni.ac.in
</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Meet Vora
</td>
      <td>Vice President
</td>
      <td>19BCE299@nirmauni.ac.in
</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Kunj Thakkar
</td>
      <td>General Secretary
</td>
      <td>19BCE277@nirmauni.ac.in

</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Naman Thaker
</td>
      <td>Managing Director

</td>
      <td>20BCE529@nirmauni.ac.in

</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Sachi Chaudhary
</td>
      <td>Marketing Director 

</td>
      <td>19bce230@nirmauni.ac.in

</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Akshat Shah
</td>
      <td>Organizing Secretary

</td>
      <td>19BCE246@nirmauni.ac.in

</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Shivam Panchal
</td>
      <td>Technical Head
</td>
      <td>19bce150@nirmauni.ac.in
</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Mrunal Shah
</td>
      <td>Director General
</td>
      <td>19bce135@nirmauni.ac.in
</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Yagnik Thummar
</td>
      <td>Technical Head
</td>
      <td>19bce282@nirmauni.ac.in
</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Kalp Mepani
</td>
      <td>Treasurer
</td>
      <td>19bce127@nirmauni.ac.in
</td>
    </tr>
  </tbody>
</table>

</div>

</body>
</html>