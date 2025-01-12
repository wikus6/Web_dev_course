<!DOCTYPE html>
<html>
    <head>
        <title>Mathematics Index</title>
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
    <!-- History -->
    <!-- **************************************************************** -->

    <div class="container-fluid">  
      <hr>
        <h3>History and Famous Mathematicians</h3>
        <p>This will be a section where we explore the history of Mathematics and the people behind it.</p>
        <hr>
        <div class="row">
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link" >Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3 ">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <br>
    <!-- **************************************************************** -->
    <!-- Tools -->
    <!-- **************************************************************** -->
    <div class="container-fluid">  
      <hr>
      <h3>Tools</h3>
      <p>Here you will find <strong>Visualization Tools</strong>, <strong>Computional Tools</strong>, and <strong>Helpful Resources</strong>.</p>
      <hr>
      <div class="row">
          <!-- Card 1-->
          <div class="col-3 ">
            <div class="card" >
              <img src="images/circ_card_photo.png" alt="circ_card_photo" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Circular Motion</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text"></p>
                <a href="circular_motion.php" class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="left" 
                title="This is a basic program that shows a point moving on a co-ordinate axis."
                >Open Tool</a>
              </div>
            </div>
          </div>
          <!-- ******** -->
          <div class="col-3 ">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Computation Tools</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some easy to use online tools for computation and visualization.</p>
                <a href="https://www.wolframalpha.com/" class="card-link">Wolfram Alpha</a>
                <a href="https://www.symbolab.com/" class="card-link">Symbo Lab</a>
                <a href="https://www.desmos.com/" class="card-link">Desmos</a>
                <a href="https://www.math3d.org/" class="card-link">Math3d</a>
              </div>
            </div>
          </div>
          <div class="col-3" >
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-3 " >
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Resources</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="card-text">
                  <!-- GRE Subject test -->                  
                  <a href="/gre_math_resources.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Resources to use in studing for the GRE Mathematics subject test."
                  >GRE Math</a>
                </p>
                <a href="#" class="btn">Card link</a>
                <a href="https://www.ets.org/gre/subject/about/content/mathematics/" class="card-link">GRE Math Home Page</a>
              </div>
            </div>
          </div>
      </div>
  </div>
  <br>
 
    <!-- **************************************************************** -->
    <!-- Branches  -->
    <!-- **************************************************************** -->
    <div class="container-fluid">  
      <hr>
      <h3>Branches of Mathematics</h3>
      <p>This area looks at the different <strong>branches</strong> of Mathematics.</p>
      <hr>
      <div class="row">
          <div class="col-3 " >
            <div class="card">
              <!--<img src="images/linAlg_card.png" alt="circ_card_photo" class="card-img-top">-->
              <div class="card-text">
           
                <h5 class="card-title">Linear Algebra</h5>
                <h6 class="card-subtitle mb-2 text-muted">Introduction</h6>
                <p class="card-text"></p>
                <a href="/vector_spaces.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Axioms, span, subspaces, basis, transformations, matrices, and more."
                >Vector Spaces</a>
                <a href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="3 types of solutions,  finding solutions, ..."
                >Systems of Equations</a>
                <a href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Answering the question of: What is the determinant?"
                >Determinants</a>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="The study of Eigenvalues and Eigenvectors."
                >Spectral Theory</button>
                <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Still"
                >Inner Product Spaces</button>
                <a href="numerical_la.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                title="Notes from a course in Numerical Linear Algebra (MTH 451)"
                >Numerical Linear Algebra</a>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Algebra</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Analysis</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">
                  <!-- Logic -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="In Progress"
                  >Real Analysis</button>
                  <!-- Proofs -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="In Progress"
                  >Complex Analysis</button>
                  <!-- Relations -->                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="In Progress"
                  >Functional Analysis</button>
                  <!-- Functions --Trigonometry>                  
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Functions as used in higher, more abstract Mathematics."
                  >Functions</button> -->
                  <!-- Principle of Mathematical Induction -->                  
                
              </div>
            </div>
          </div>
          <div class="col-3 ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <h6 class="card-subtitle mb-2 text-muted">Introduction</h6>
                <p class="card-text">
                  <!-- Basics -->                  
                  <a href="trig_basics.php" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="A general discussion of how to think of Trigonometry and how to apply it."
                  >Basics</a>
                  <!-- Triangles -->
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Motivtions using triangles."
                  >Triangle Viewpoint</button>
                  <!-- Circles -->
                  <button href="#" class="btn btn-outline-success btn-sm mb-1" data-toggle="tooltip" 
                  title="Motivtions using circles."
                  >Unit Circle Viewpoint</button>
                </p>
                <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
          </div>
      </div>
  </div>
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
