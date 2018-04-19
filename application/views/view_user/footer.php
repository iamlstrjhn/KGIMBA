

 <footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h6 class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;">KGI Mutual Benefit Association Inc.</h6>
                
                 <a class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;" href="#!">Terms & Conditions</a>
                 <br>
                 <a class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;" href="https://www.linkedin.com/in/iamlstrjhn" target="_blank">About the developer</a> <br>
                 <a class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;" href="http://www.freepik.com/free-vector/polygonal-background-in-blue-tones_766023.htm" target="_blank">Poly Background by Freepik</a>
                 <p>
                      <a class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;">FOLLOW US</a> &ensp;
                  </p>
                  <p>
                    <a href=""><img src="<?php echo base_url('assets/icons/fb.png') ?>" alt width="25" height="25"></a>&ensp;
                    <a href=""><img src="<?php echo base_url('assets/icons/yt.png') ?>" alt width="25" height="25"></a>
                  </p>
                 
              </div>
              <div class="col l4 offset-l2 s12">
                <h6 class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;">MBA MAIN BRANCH OFFICE</h6>
                <p class="grey-text" style="font-family:'Roboto Condensed', sans-serif;">SEC. Reg. No.:A200106459<br>
                  Lot 25 Blk 12, Sta Monica Subdv., Subic, Zambales<br>
                  Telefax: (047)232-1871<br>
                  Mobile No.:(+63)908-8638-419</p>
                  <p><a href="<?php echo base_url('login'); ?>" style="color: #686868;" >Login Admin</a></p>
                 
              </div>
            </div>
          </div>
            <div class="footer-copyright" style="background-color: #191919 !important;">
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <a href="" class="grey-text" style="font-family: 'Roboto Condensed', sans-serif;">© 2017 KGI MBA, Inc.</a>
                  </div>
                </div>
              </div>
            </div>

        </footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkVcevF06CXAGQeJq2j0VLlVwJ9sVQPu0&callback=initMap" async defer></script>


<script type="text/javascript">

$('.button-collapse').sideNav('');	
$('.carousel.carousel-slider').carousel({fullWidth: true});


 $('.carousel').carousel();
  setInterval(function() {
    $('.carousel').carousel('next');
  }, 3000); 


 $(document).ready(function(){
    $('.scrollspy').scrollSpy({scrollOffset: 100});
  });


 $(document).ready(function(){
    
    $('.modal').modal();
  });



   $(document).ready(function() {
    Materialize.updateTextFields();
  });
        
  
  function initMap() {
        var Subic = {lat: 14.855790499161811, lng: 120.25206685066223};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: Subic
        });
        var marker = new google.maps.Marker({
          position: Subic,
          map: map
        });
      }



</script>



</body>
</html>