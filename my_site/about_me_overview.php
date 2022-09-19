<!DOCTYPE html>
<html>
    <head>
        <title>About Me</title>
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
  
        li{
            margin: 0px 50px 0px 50px;
            padding:0px;
            font-family: 'Nanum Gothic', sans-serif;
            text-align: left;
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
        .tooltip{
   font-size: 1.2rem;
}
        .tooltip-inner {
    max-width: 80%;
      }
    </style>
</head>
<body>
    <?php 
      include("nav.html");
    ?>
    <br>
  

    <!-- **************************************************************** -->
    <!-- Photo -->
    <!-- **************************************************************** -->

    <div id class="container-fluid">  
      <hr>
        <h3>About Me</h3>
        <p>A brief introduction on my background.</p>
        <hr>
        <div class="row">
            <div class="col-4 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Professional Career</h5>
                  <ul>
                    <li>B.S. in Mathematics from Oregon State University <br>(expected 2023)</li>
                    <li>Area of interest is in Analysis.</li>
                    <li>Grading Experience:
                      <ul>
                        <li>Undergraduate Grader: MTH 342 (Linear Algebra II)</li>
                        <li>Teaching Assistant: CS 161 (Introduction to Computer Science I)</li>
                      </ul>
                    </li>
                    <li>Teaching Experience:
                      <ul>
                        <li>Learning Assistant: MTH 112 (Elementary Functions)</li>
                        <li>Teaching Assistant: CS 161 (Introduction to Computer Science I) </li>
                      </ul>
                    </li>
                    <li>Internship: Softare Engineer at Epi Use (2021)
                      <ul>
                        <li >
                              <a href="#" class="btn" data-toggle="tooltip" 
                              title="During the summer of 2021, I did an internship at Epi-Use, a
                              software development company based in Atlanta Georgia. I
                              was assigned to a team that included three senior software
                              developers of the company and another intern. Epi-Use was
                              concerned with the personally identifiable data being
                              exposed on one of their clients’ systems and tasked our
                              team with analyzing the flow of data between applications
                              within that system. The lead engineer suggested importing
                              all the data from the log files produced by the system to a
                              graph database. We used a few python scripts to import this
                              data into the graph database, Neo4j. The data was highly
                              connected and ideal for a graph database. 
                              
                              A simple example
                              of how we used a graph database would be as follows:
                              Suppose a payroll application used social security number
                              information. Each time we found such an event we would
                              have a social securfacultyity node and a payroll application node
                              with a weight on the vertex between them. The weight
                              corresponds to the number of times an application used the
                              specific data. This allowed us to see how dependent
                              applications were on sensitive information.
                              This was a valuable experience for me because of multiple
                              reasons. Firstly I was required to learn new technology such
                              as Neo4j and apply it efficiently to solve problems the clients
                              
                              had. Secondly, we had daily meetings with our team to
                              address any questions and difficulties. I was furthermore
                              required to give weekly presentations on the progress of our
                              analysis as well as outline our plan for the coming week.
                              This entailed clear and concise communication of
                              information on my part. At the end of our internship, we
                              presented our solutions and application that we built to
                              import data with a user interface to run queries on the data
                              to the entire division of the company."
                              >More</a>
                            </li>
                            <a href="math_pdf/about_me_files/Math in the Valley Winter 2022.pdf" target="_blank">Newsletter (pg. 11)</a>
                      </ul>
                    </li>
                    
                    <li> Employment
                      <ul>
                        <li>UHDS Student Painter</li>
                        <li>UHDS Food Service Worker </li>
                      </ul>
                    </li>
                    <li>Completion of 1 year at the University of Pretoria (2019)</li>
                    <li>Attended Die Hoerskool Menlopark (2014-2018)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-4 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Personal Background</h5>

                  <ul>
                    <li>Born and raised in Pretoria, South Africa.</li>
                    <li>I started playing rugby from the age of five up untill the end of highschool.</li>
                    <li>My academic interest has always been Mathematics.</li>
                    <li>Came to the United States in 2020 to pursue a career in Mathematics research.</li>
                  </ul>
                  
                </div>
              </div>
            </div>
            <div class="col-4 ">
              <div class="card">
                <img src="images/website_photo.jpg"> 
              </div>
            </div>
        </div>
    </div>
    <br>
    <!-- **************************************************************** -->
    <!-- Tools -->
    <!-- **************************************************************** -->
 
      <hr>

  <br>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script type="text/JavaScript">
      // Enable Tooltips
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
          container: 'body';
      });
     

      // Display if hover over heading.
      var orig0 = $("#vs_par").html();
      $("#vs_heading").mouseover(
        function(){

          $("#vs_par").html("We only consider real and complex vector spaces in these examples for now. "+
          "When our field (the place where the scalars come from) is the set of real numbers then we have"+
          " a <strong>real</strong> vector space. When our field (the place where the scalars come from) is the set of complex"+ 
          " numbers then we have a <strong>complex</strong> vector space."
          );
        }
      ).mouseout(
        function(){
          $("#vs_par").html(orig0);
        }
      );
      // Definitions.
      var orig1 = $("#li_text").html();
      $("#li_def_b").mouseover(
        function(){

          $("#li_text").attr("style","display:inline");
        }
      ).mouseout(
        function(){
          $("#li_text").attr("style","display:none");
        }
      );


    </script>
</body>
</html>
