<!DOCTYPE html>
<html>
    <head>
        <title>GRE Math Subject Test</title>
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
    <!--GRE Resource-->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
        <h3>Resources</h3>
        <p>Some resoures gather while studying for the GRE Math subject test in 2022.</p>
        <hr>
        <!-- **************************************************************** -->
        <!--Resources-->
        <!-- **************************************************************** -->

        <div class="row">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Resources</h5>
 
                  <p class="card-text">
                </p>
                 <!-- <a href="#" class="card-link" >Card link</a>
                  <a href="#" class="card-link">Another link</a>-->
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Resource Type</th>
          <th scope="col">Link To Pdf</th>
          <th scope="col">Source</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Practise Test</th>
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR0568.pdf" target="_blank">GR0568</a></td>
          <td>ETS</td>
        </tr>
        <tr>
          <th scope="row">Practise Test</th>
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR1768.pdf" target="_blank">GR1768</a></td>
          <td>ETS</td>
        </tr>
        <tr>
          <th scope="row">Practise Test</th>
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR8767.pdf" target="_blank">GR8767</a></td>
          <td>ETS</td>
        </tr>
        <tr>
          <th scope="row">Practise Test</th>
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR8767.pdf" target="_blank">GR8767</a></td>
          <td>ETS</td>
        </tr>
        <tr>
          <th scope="row">Practise Test</th>html
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR9367.pdf" target="_blank">GR9367</a></td>
          <td>ETS</td>
        </tr>  
        <tr>
          <th scope="row">Practise Test</th>
          <td><a class="dropdown-item" href="math_pdf/gre_test/GR9768.pdf" target="_blank">GR9768</a></td>
          <td>ETS</td>
        </tr>       
        <!--Rambo-->
        <tr>
          <th scope="row">Practise For GRE Math Subject Test</th>
          <td><a class="dropdown-item" href="math_pdf/Rambo_prac/rambo_prac.pdf" target="_blank">Practise Test</a></td>
          <td>Charles Rambo</td>
        </tr>         
        <tr>
          <th scope="row">Practise For GRE Math Subject Test Solutions</th>
          <td><a class="dropdown-item" href="math_pdf/Rambo_prac/rambo_prac_sol.pdf" target="_blank">Solutions</a></td>
          <td>Charles Rambo</td>
        </tr> 
        <tr>
          <th scope="row">University of Chicago Practise Problems</th>
          <td>
           <ul> 
            <a class="dropdown-item" href="math_pdf/chicago_gre/week1.pdf" target="_blank">Week1</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/week2.pdf" target="_blank">Week2</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/week3.pdf" target="_blank">Week3</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/week4.pdf" target="_blank">Week4</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/week5.pdf" target="_blank">Week5</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/week6.pdf" target="_blank">Week6</a>
            <a class="dropdown-item" href="math_pdf/chicago_gre/extra.pdf" target="_blank">extra</a>
          </ul>
  
          
          </td>
          <td>University Of Chicago</td>
        </tr>
        <tr>
          <th scope="row">University of California Berkley Practise Problems</th>
          <td>
           <ul> 
            <a class="dropdown-item" href="math_pdf/ucla/GRE16f-Chousionis.pdf" target="_blank">Set1</a>
            <a class="dropdown-item" href="math_pdf/ucla/GRE16f-Xiao.pdf" target="_blank">Set2</a>
            <a class="dropdown-item" href="math_pdf/ucla/GRE16s-Chen.pdf" target="_blank">Set3</a>
            <a class="dropdown-item" href="math_pdf/ucla/GRE16s-Chousionis.pdf" target="_blank">Set4</a>
            <a class="dropdown-item" href="math_pdf/ucla/GRE16s-Xiao.pdf" target="_blank">Set5</a>
            <a class="dropdown-item" href="math_pdf/ucla/GREfall2018.pdf" target="_blank">Set6</a>
          </ul>
  
          
          </td>
          <td>University of California Berkley</td>
        </tr>

        
      </tbody>
    </table>
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Solutions to Selected Topics (Under Construction)</h5>

                <p class="card-text">
              </p>
               <!-- <a href="#" class="card-link" >Card link</a>
                <a href="#" class="card-link">Another link</a>-->
              </div>
            </div>
          </div>
      </div>
  </div>
  <br>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Area in Mathematics</th>
        <th scope="col">Topic and Source</th>

 

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Pre-Calculus</th>
        <td><div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">
            Basic Algebra</a>
          <!-- Remember to disable buttons-->
          <a href="#" class="list-group-item list-group-item-action disabled">Dapibus ac facilisis in</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Porta ac consectetur ac</a>
          <a href="#" class="list-group-item list-group-item-action ">Trigonometry</a>
        </div></td>
        <td></td>



      </tr>
      <!-- Calculus I-->
      <tr>
        <th scope="row">Calculus I</th>
        <!-- Differential Calc start-->
        <td><div class="list-group">
          <!-- Remember to disable buttons-->
          <a href="#" class="list-group-item list-group-item-action ">

            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Differential Caluclus 
              </a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">...</a>
                
                <a class="dropdown-item" href="#">...</a>
              </div>
            </div>
          </a> <!-- Differential Calc end-->
          <!-- Integral Calc start-->
          <a href="#" class="list-group-item list-group-item-action ">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Integral Calculus
              </a>
            
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="math_pdf/Integral_calc_pdf.pdf" target="_blank">Integration Techniques</a>
                <a class="dropdown-item" href="math_pdf/Volume_of_s_of_rev_pdf.pdf">Volumes of Solids of Revolution</a>
                <a class="dropdown-item" href="#">...</a>
              </div>
            </div>
          
          </a><!-- Integral Calc end-->

        </div></td> 
        <td></td>

      </tr>
            <!-- Calculus II-->
            <tr>
              <th scope="row">Calculus II</th>
              <td>
                <div class="list-group">
                  <!-- Remember to disable buttons-->
                  <a href="#" class="list-group-item list-group-item-action ">
        
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Multivariate Differential Caluclus 
                      </a>
                    
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">...</a>
                        
                        <a class="dropdown-item" href="math_pdf/dist_in_r3.pdf">Distance in Euclidean Space</a>
                        <a class="dropdown-item" href="#">...</a>
                        <a class="dropdown-item" href="#">...</a>
                      </div>
                    </div>
                  </a> <!-- Differential Calc end-->
                  <!-- Integral Calc start-->
                  <a href="#" class="list-group-item list-group-item-action ">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Multivariate Integral Calculus
                      </a>
                    
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#" target="_blank">...</a>
                        <a class="dropdown-item" href="#">...</a>
                        <a class="dropdown-item" href="#">...</a>
                      </div>
                    </div>
                  
                  </a><!-- Integral Calc end-->
        
                </div>

              </td>


            </tr>
      <!-- Differential Equations -->
      <tr>
        <th scope="row">Differential Equations</th>
        <td><div class="list-group">
          <a href="#" class="list-group-item list-group-item-action active">Introduction</a>
          <!-- Remember to disable buttons-->
          <a href="#" class="list-group-item list-group-item-action disabled">First Order Ordinary Differential Equations</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Second and higher Order Ordinary Differential Equations</a>
          <a href="#" class="list-group-item list-group-item-action disabled">Extra: Laplace Transforms</a>
          <a href="math_pdf/mixing_prob1.pdf" class="list-group-item list-group-item-action ">Application of FODE: Exponential Growth and Mixing Problems</a>
        </div></td>


      </tr>
      <!-- Linear Algebra-->
      <tr>
        <th scope="row">Linear Algebra</th>
        <td></td>


      </tr>
      <!-- Abstract Algebra-->
      <tr>
        <th scope="row">Abstract Algebra</th>
        <td></td>


      </tr>
      <!-- Point Set Topology-->
      <tr>
        <th scope="row">Point Set Topology</th>
        <td></td>


      </tr>
      <!-- Complex Variables -->
      <tr>
        <th scope="row"> Complex Variables </th>
        <td></td>


      </tr>
            <!-- Resources -->
            <tr>
              <th scope="row">Resources Used</th>
              <td>  
                <a class="btn btn-secondary " href="math_pdf/list_of_resources.pdf" role="button" id="dropdownMenuLink"  aria-haspopup="true" aria-expanded="false">
                List of Resources</a>
            </td>
      
      
            </tr>

    </tbody>
  </table>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script type="text/<td>@mdo</td>JavaScript">
      // Enable Tooltips
      $(function () {
          $('[data-toggle="tooltip"]').tooltip();
      });
    </script>
</body>
</html>
