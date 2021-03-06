@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>

  <title>PLQR</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Page Content -->
    <div id="page-content-wrapper">

    @include('partials.navbar')

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <br>
            <div class="card">
                <div class="card-header text-center"></div>
                <div class="card-body">
                  <h3>Your submission has been sent successfully!</h3> 
                  <br>
                  <p>Reply will follow within 24 hours.</p>
                  <br>
                  <p>Confirmation email with your submission number will be sent to your email shortly.</p>
                  <br>
                  <p>You can go <a href="/">back</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



</body>

</html>

