</body>

</html>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assates/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assates/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assates/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assates/js/dataTables.bootstrap5.js')}}"></script>
<!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="{{asset('./script.js')}}"></script> -->
<script src="{{asset('https://canvasjs.com/assets/script/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('https://canvasjs.com/assets/script/jquery-ui.1.11.2.min.js')}}"></script>
<script src="{{asset('https://canvasjs.com/assets/script/jquery.canvasjs.min.js')}}"></script>
<script src="{{asset('assates/js/main.js')}}"></script>
@stack('custom_js')

<script>
   
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>
</html>
