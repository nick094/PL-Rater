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
      <br>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card" id="card">
                    <div class="card-header text-center">Waiting for Approval</div>
                      <div class="card-body text-center">
                        Your account is waiting for our administrator approval.
                        <hr/>
                        Please check back later.
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
