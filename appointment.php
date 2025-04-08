<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="appointment.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="damsmsdb.sql">
  </head>

    <body>
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Book You Slot Now and Save your time</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis at lacus at rhoncus. Integer pharetra lacus vitae sapien blandit eleifend. </p>
                        <h2>For Help Call : +189-123-453</h2>
                        <footer>
                            
                        </footer>
                       
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Enter Full name" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="number" placeholder="Enter Mobile Number" class="form-control">
                            </div>
                             <div class="row form-row">
                              <input type="email" placeholder="Enter Email Adreess" class="form-control">
                            </div>
                           <div class="row form-row">
                              <input id="Date" type="text" placeholder="Appointment Date" class="form-control">
                            </div>
                            
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter Area" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter City" class="form-control">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Enter State" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="number" placeholder="Postal Code" class="form-control">
                                </div>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment">
                                 Book Appointment
                               </button>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  </body>
</html>