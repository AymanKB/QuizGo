<?php

require_once('../../DB/connection.php');
require_once('../../DB/dbFunctions.php');

$quizes = read("quiz");
// $imprints = readImprints();

// if(isset($_GET['search'])){
// 	$customers = readSelectCustomers($_GET['search']);
// }
// else {
// 	$customers = readAllCustomers();
// }


?>

<html lang="en"><head>

  <head>

    <!-- DON'T touch, should be in all files -->
    <?php include '../general/bootstrapMagic.php' ?>

    <!-- Custom styles for this page -->
    <link href="../../css/home.css" rel="stylesheet">
  </head>

  <body>

  <?php include 'top-nav.php'?>


<div class="container-fluid">
  <div class="row">


        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="lecturer-home.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="create-quiz.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                  Quiz
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="results.html">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Results
                </a>
              </li>

            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Recent Quizzes</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Quiz #1
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Quiz #2
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                  Quiz #3
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <?php

        require_once('../../DB/connection.php');
        require_once('../../DB/dbFunctions.php');

        $quizes = read("quiz");
        // $imprints = readImprints();

        // if(isset($_GET['search'])){
        // 	$customers = readSelectCustomers($_GET['search']);
        // }
        // else {
        // 	$customers = readAllCustomers();
        // }


        ?>





        <html lang="en">

          <head>

            <!-- DON'T touch, should be in all files -->
            <?php include '../general/bootstrapMagic.php' ?>

            <!-- Custom styles for this page -->
            <link href="../../css/home.css" rel="stylesheet">
          </head>


          <body>

            <?php include 'top-nav.php'?>

            <div class="container-fluid">

              <div class="row">

                <?php include 'side-nav.php' ?>

                <!-- Start Editing page from here -->
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                  <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Quiz Builder</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group mr-2">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-auto order-md-1">


                    <form class="needs-validation" novalidate="" method="post" action="">

                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="font-weight-bold " for="Title" style="font-size: 1.4em;">Title</label>
                          <input type="text" class="form-control" id="Title" placeholder="" value="<?php echo $_POST['Title'] ?>" required="" name="Title">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="font-weight-bold " for="Description" style="font-size: 1.4em;">Description (optional)</label>
                          <textarea class="form-control" id="Description" rows="4" cols="50" placeholder="" value="" required=""></textarea>
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="font-weight-bold " for="Date" style="font-size: 1.4em;">Start date</label>
                          <input type="datetime-local" class="form-control" id="Date" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="font-weight-bold " for="Date" style="font-size: 1.4em;">End date</label>
                          <input type="datetime-local" class="form-control" id="Date" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 mb-3">
                          <label class="font-weight-bold " for="Timer" style="font-size: 1.4em;">Timer</label>
                          <input type="time" class="form-control" id="Timer" placeholder="" value="" required="">
                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4 mb-3" id="numbOfQuestions">
                          <label class="font-weight-bold col-12 p-0" for="Title" style="font-size: 1.4em;">Number of questions</label>

                            <script>
                              var myDiv = document.getElementById("numbOfQuestions");

                              //Create and append select list
                              var selectList = document.createElement("select");
                              selectList.setAttribute("id", "mySelect");
                              myDiv.appendChild(selectList);

                              //Create and append the options
                              for (var i = 0; i < 50; i++) {
                                  var option = document.createElement("option");
                                  option.text = i + " Questions";
                                  selectList.appendChild(option);
                              }

                            </script>

                          <div class="invalid-feedback">
                          </div>
                        </div>
                      </div>


                      <hr class="mb-4">

                      <div class="col-12 text-center">
                        <h3>Please answer the question to determine the correct answer</h3>
                      </div>

                      <hr class="mb-4">

                      <div class="link">
                            <form class="mx-5 my-2 border-danger  text-center">
                              <div class="form-row align-items-center">


                                <div class="col-12">
                                  <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Question statement">
                                </div>


                                <!-- Question mcq div -->
                                <div class="col-12">

                                  <div class="input-group">

                                    <div class="col-3 input-group-prepend">

                                      <div class="input-group-text">
                                        <input type="radio" name="qs" aria-label="Radio button for following text input">
                                      </div>
                                      <input type="text" class="form-control" aria-label="Text input with radio button">

                                    </div>
                                    <div class="col-3 input-group-prepend">

                                      <div class="input-group-text">
                                        <input type="radio" name="qs" aria-label="Radio button for following text input">
                                      </div>
                                      <input type="text" class="form-control" aria-label="Text input with radio button">

                                    </div>
                                    <div class="col-3 input-group-prepend">

                                      <div class="input-group-text">
                                        <input type="radio" name="qs" aria-label="Radio button for following text input">
                                      </div>
                                      <input type="text" class="form-control" aria-label="Text input with radio button">

                                    </div>
                                    <div class="col-3 input-group-prepend">

                                      <div class="input-group-text">
                                        <input type="radio" name="qs" aria-label="Radio button for following text input">
                                      </div>
                                      <input type="text" class="form-control" aria-label="Text input with radio button">

                                    </div>

                                  </div>
                                </div>

                              </div>
                          </form>
                      </div>

                      <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Save Quiz</button>
                  </form>

                </div>

                </main>

                <!-- End editing page from here -->
              </div>
            </div>

          </body>
        </html>

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>

</body></html>
