<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body{
        background-color:  rgb(15, 25, 119);
        color: rgba(92, 223, 223, 0.986);
    }
    .para{
        text-align: justify;
        line-height: 1.8;
        font-size:2vw;
        font-family: Georgia, serif;
        margin: 5% 10%;
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
    .link:hover{
        background-color:rgba(243, 73, 73, 0.986);;
    }
</style>
    <title>Home page</title>

</head>

<body>
@include('nav')

<div class="heading">Welcome to ACES website</div>
<div class="para">Here, you will find all the information, latest updates and events organized by our club. Moreover, you can effortlessly use this website to admire different memories of events, interact with our board members and get all the details of the course coordinators too.</div>
<div class="para">So, what are you waiting for... Dive in!!</div>
</body>
</html>