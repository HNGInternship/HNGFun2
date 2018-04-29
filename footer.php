<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
               <li class="list-inline-item footer-li">
                  <a id="twitter" href="https://twitter.com/hnginternship?lang=en" target="_blank">
                     <span class="fa-stack fa-lg">
                        <i class="fa fa-twitter fa-stack-1x"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item footer-li">
                  <a id="facebook" href="https://web.facebook.com/hotelsng/" target="_blank">
                     <span class="fa-stack fa-lg">
                        <i class="fa fa-facebook fa-stack-1x"></i>
                     </span>
                  </a>
               </li>
               <li class="list-inline-item footer-li">
                  <a id="github" href="https://github.com/HNGInternship/" target="_blank">
                     <span class="fa-stack fa-lg">
                        <i class="fa fa-github fa-stack-1x"></i>
                     </span>
                  </a>
               </li>
    
            </ul>
            <p class="copyright text-muted">Copyright &copy; HNG FUN <?= date("Y")?></p>
         </div>
      </div>
   </div>
</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/hng.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php if (function_exists('custom_styles')) {
          custom_scripts();
        }
     ?>
</body>

</html>