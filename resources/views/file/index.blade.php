@extends('layouts.app')
  <div class="d-flex" id="wrapper">
    @include('partials.sidebar')
    <div id="page-content-wrapper"> 
    @include('partials.navbar')
      <div class="tab">
        <div class="container">
          <div class="row">
          <button class="tablinks" onclick="openCity(event, 'general')">General Info</button>
          <button class="tablinks" onclick="openCity(event, 'correspondence')">Correspondence</button>
          <button class="tablinks" onclick="openCity(event, 'submission')">Submission</button>
          <button class="tablinks" onclick="openCity(event, 'rw')">RW</button>     
          <button class="tablinks" onclick="openCity(event, 'quote')" >Quote</button>   
          <button class="tablinks" onclick="openCity(event, 'binder')" disabled>Binder</button>
          <button class="tablinks" onclick="openCity(event, 'policy')" disabled>Policy</button>                              
          <button class="tablinks" onclick="openCity(event, 'finance')" disabled>Finance</button>      
          <button class="tablinks" onclick="openCity(event, 'support')">Support</button>   
          <button class="tablinks" onclick="openCity(event, 'log')">Log</button>           
          <button class="tablinks" onclick="openCity(event, 'note')">Note</button>     
            @include('partials.file.rw')
            @include('partials.file.submission')
            @include('partials.file.general')
            @include('partials.file.log')                          
            </div>
        </div>
      </div>

  </div>
</div>
<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

<style>
tr:nth-child(even) {
  background-color: #dddddd;
}

table td{
  padding-bottom: 4px;
}

</style>