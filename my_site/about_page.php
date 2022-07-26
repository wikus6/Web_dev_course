<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
    </head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- CDN for Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ********************************** -->

    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <script src="js/drawing.js"></script> 
    <link rel="stylesheet" href="css/math.css">
    <style type="text/css">
        body, h1, p, ul{
            margin:0px;
            padding:0px;
            font-family: 'Nanum Gothic', sans-serif;
            text-align: center;
            background-color: #F5F5F7 ;
        }

        div.block{
            border: 1px solid black;
            width: 80%;
            height: 550px;
            margin-left: auto;
            margin-right: auto;
        }
        .first_canvas{
            border: 1px solid black;
            background-color: black;
            width: 90%;
            height: 100%;
        }
        .side_block{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 
      include("nav.html");
    ?>
    <br>
  

    <!-- **************************************************************** -->
    <!-- About Page-->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
        <h3>About This Page</h3>
        <p>This is a personal page that started as a fun project but evolved to a larger website
          with the goal to provide resources to Mathematics students along other non-related topics.</p>
        <hr>
        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Read More ...</h5>
 
                  <p class="card-text">Over the summer of 2021, I had a few weeks on my hands between finishing an internship and the start of the 
                    next academic year. I was thinking about projects to do in this period and saw Udemny offered courses on a wide variety of topics. <br><br>
                  Creating a website from scratch seemed like a nice skill to have in our current society. Luckily I had a background in various computer languages namely C, C++, Python,
                 and even the assembly language MASM. Therefore learning some Javascript, HTML, and PHP did not seem like too big of a hurdle to climb. <br>
                    Initially, I followed the course lessons where the instructor walked us through the basic steps of setting up a website. This was fun, but I realized that
                    my website needed to serve a purpose. What could my website offer to its audience?
                    This question led me to the following answer.<br><br>

                    I am a current undergraduate Mathematics student with an aspiration of becoming a Professor in Mathematics one day.
                    This means that I will come across interesting Mathematical topics throughout my research career, be
                    in a position to help students with difficult concepts, and attempt to answer common questions
                    they have. What better way than providing all this information on a website. <br><br>

                    Lastly, I have other interests such as reading, Crossfit, Music, and Traveling. Because this is still a personal webpage I thought about adding some of these elements!
        
                </p>
                 <!-- <a href="#" class="card-link" >Card link</a>
                  <a href="#" class="card-link">Another link</a>-->
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    
    
  <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script type="text/JavaScript">
      // Enable Tooltips
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
</body>
</html>
