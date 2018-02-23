<main>

<div class="container-fluid">
    <div class="logo container">
      <img class="responsive-img center-on-small-only" src="assets/images/finallogo.png">
     </div>

 <div class="divider"></div>

<!--####################CAROUSEL#######################-->
<div class="container">
   <div class="carousel carousel-slider center" data-indicators="true">
      <div class="carousel carousel-slider">
        <a class="carousel-item"><img class="responsive-img" src="assets/images/lightroom.jpg"></a>
        <a class="carousel-item" ><img class="responsive-img" src="assets/images/1.jpg"></a>
      </div>
    </div>
</div>
</div>

<!--####################INTRODUCTION#######################-->
<div class="didiver"></div>
<div class="divider"></div>

<div class="container-fluid" style="width: 100%; padding-bottom:10px;">
  <div class="view container">
    <center>
      <h2 class="">WHO WE ARE</h2>
      <!--<div class="divide" style="border-top: 1px dashed #8c8b8b; width: 60%;"></div>-->
      <p style="font-family: 'Roboto', sans-serif; font-weight: 300; font-size: 17px;">We want you to know about us</p>
      </center>
      <div class="boxedd">
      <p>KGI Mutual Benefit Association Inc. is a non-stock, non-profit organization and is the microinsurance provider of KAZAMA Grameen Inc. to its members. It is a separate and legal entity owned and managed by the members and is registered to Securities and Exchange Commission and received its license from the Insurance Commission last March 2012.  KGI-MBA offers Life and Health Insurance to KGI members. All members of KGI are automatically enrolled with KGI-MBA.</p>
      </div>
      
 </div>
</div>


<!--##################OBJECTIVES#######################-->
<div class="cover">
<div class="vision container">
    <div class="contentvision">
      <h2 class="center">OUR OBJECTIVES</h2>
       <p class="center" style="font-family: 'Roboto', sans-serif; font-weight: 300; font-size: 17px;">Insert some subheader here to make it cool</p>
      <div class="row">
        <div class="col s12 m4">
          <a href="#vision"><img class="responsive-img" src="assets/icons/vision.png"></a>
            <div id="vision" class="aboutus modal">
                <div class="modal-content">
                <h4 class="center">Vision</h4>
                <p class="visionclass">A God-centered institution dedicated to poverty alleviation in the community.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
          <a href="#mission"><img class="responsive-img" src="assets/icons/mission.png"></a>
            <div id="mission" class="aboutus modal">
                <div class="modal-content">
                <h4 class="center">Mission</h4>
                <p>To bring financial security and peace of mind to poor households by providing them quality and affordable micro-insurance products and services.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
          <a href="#goals"><img class="responsive-img" src="assets/icons/goals.png"></a>
            <div id="goals" class="aboutus modal">
              <div class="modal-content">
                <h4 class="center">Goals & Objectives</h4>
                <p>Ang layunin ng samahang ito ay upang isulong ang interes at kapakanan ng mga mahihirap partikular na ang interes at kapakanan ng Pilipinas sa pangkalahatan. Ang samahan ay naglalayong:</p>
                <p>1.  Makatulong sa mga kasapi nito, asawa, mga anak at kanyang magulang sa pamamagitan ng pagbibigay ng benepisyo para sa pagkamatay, benepisyo sa pagkakasakit, ipon na pondo at pagbabalewala ng pautang;</p>
                <p>2. Masiguro ang patuloy na pagbibigay ng benepisyo sa pamamagitan ng aktibong paglahok ng mga kasapi sa pamamahala ng samahan sa  pagpapatupad ng mga patakaran at polisiya na nakatuon sa matatag at pinabuting serbisyo.</p>
              </div>
            </div>
        </div>
      </div>
    </div>

 </div>

</div>


<!--####################highlights#######################-->
<section class="highlight">
        <div class="highlights container">
          <h2 class="center">AT A GLANCE</h2>
          <p class="center" style="font-family: 'Roboto', sans-serif; font-weight: 300; font-size: 17px;">Insert some subheader here to make it cool</p>
          <h5>Operation Highlights</h5>
            <table class="squarebox responsive-table  hoverable striped" style="font-weight: 300;">
              <thead style="background-color: #2c2c2c;color: #f2f2f2;">
                <tr>
                    <th>PARTICULARS</th>
                    <th>TOTAL</th>
                    
                </tr>
              </thead>

                

                <tbody>
                  <?php foreach ($assets as $asset) { ?>
                  <tr>
                   <td><?php echo $asset->Description; ?></td>
                  <td><?php echo $asset->Total; ?></td>
                    
                  </tr>
                  <?php 
                  }
                    ?>
                </tbody>
                    
          </table>
          <h5>Financial Highlights</h5>
            <table class=" squarebox responsive-table  hoverable" style="font-weight: 300;">
              <thead style="background-color: #2c2c2c;color: #f2f2f2;">
                <tr>
                    <th>PARTICULARS</th>
                    <th>TOTAL</th>
                </tr>
              </thead>

                 

                <tbody>
                  <?php
                foreach ($financials as $financial) { ?>
                  <tr>
                    <td><?php echo $financial->Description1 ?></td>
                    <td><?php echo $financial->Total1 ?></td>
                  </tr>
                  <?php 
                }
                ?>
                </tbody>

                

          </table>
        </div>
      
</section>

    

<section class="gallery">
  
    <div class="container">      
      <div class="picture">
        
            <div class="row">
                
                <div class="col s12 m8">
                  <h2>WHAT WE DO</h2>
                  <p style="font-family: 'Roboto',sans-serif; font-weight: 300; color: #444c63; font-size: 17px; ">KGI-MBA believes in the importance of providing members with solid protection from unexpected incidents</p>
                  <div class="divider"></div>
                  <h5 style="font-family:'raleway', sans-serif; color: #f2f2f2; font-weight:400; padding-top: 20px; ">WE PROVIDE BENEFITS:</h5>
                  
                   <ul style=" color: #444c63; font-size: 17px;font-weight: 300;">
                     <li>Basic Life Insurance Program</li>
                     <li>Other Services</li>
                   </ul>

                
                  <span><a class="btn service" href="<?php echo base_url(); ?>Services">View more</a></span>
                </div>
                <div class="col s12 m4">
                  <img class="responsive-img" src="assets/images/handicon-01.png" style="padding: 25px 0 0 0;">
                </div>
            </div>            
        
        </div>
    </div>
  
</section>

<section class="partnership">
    <div class="container">
      <h2 class="center">OUR CORPORATE PARTNERS</h2>
      <p class="center">Insert some subheader here to make it cool</p>

        <div class="row row-partner">
          <div class="col s12 m6 l6">
            <div class="card card-card">
              <div class="card-image waves-effect waves-block waves-light card-partner">
                <img class="responsive-img" src="assets/images/rimansii.png">
              </div>
              <div class="divider"></div>
              <div class="card-content">
                <a href="http://rimansi.org/" target="_blank" class="card-title activator grey-text text-darken-4">Rimansi Mi-MBA, Inc.<i class="material-icons right">arrow_forward</i></a>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l6">
            <div class="card card-card">
              <div class="card-image waves-effect waves-block waves-light card-partner">
                <img class="responsive-img" src="assets/images/microinsurance-logo.png">
              </div>
              <div class="divider"></div>
              <div class="card-content">
                <a href="http://microinsurancephil.blogspot.com/" class="card-title activator grey-text text-darken-4" target="_blank">Microinsurance Philippines<i class="material-icons right">arrow_forward</i></a>
              </div>
            </div>
          </div>
        </div>

    </div>
</section>

<div class="divider"></div>

<!-- this is the sitemap -->

<section class="sitemap">
  <div class="container">
  <center>
    <h2>REACH US HERE</h2>
      <!--<div class="divide" style="border-top: 1px dashed #8c8b8b; width: 60%"></div>-->
    <p>As a part of a growing Microinsurance organization in the Philippines, we make sure that<br>
    our clients and members reach us easily as they have their consents and feedbacks<br>
    regards to the company.</p>
      <div class="bordermap"> 
        <div id="map" style="height: 500px; width: 100%; border-radius: 5px;"></div>
      </div>
      <p style="font-size: 15px;"><i>Blk. 12 Lot 25, Sta.Monica Subdv. Matain, Subic, Zambales</i></p>
       
  </center>
  </div>
</section>
<!-- this is the end code for the map -->

  <div class="divider"></div>
<section class="socialmedia">
    <div class="container">
      <center>
        <h2>EMAIL US</h2>
         <!-- <div class="divide" style="border-top: 1px dashed #8c8b8b; width: 60%"></div>-->
        <p>Send us your feedbacks and suggestions</p>
          <div class="box card">
                <div class="row">
                  <?php 
                  echo $this->session->flashdata('email_sent');
                  echo form_open('Usermain/send_email'); ?>
                  <div class="col s12">
                    <div class="row">
                      <div class="input-field col s12 l6">
                        <i class="material-icons prefix">person_pin</i>
                        <input type="text" class="validate" name="email">
                        <label for="icon_prefix">Full Name</label>
                      </div>
                      <div class="input-field col s12 l6">
                        <i class="material-icons prefix">email</i>
                        <input type="tel" class="validate" name="email">
                        <label for="icon_telephone">Email Address</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">subject</i>
                        <input type="text" class="validate" name="subject">
                        <label for="first_name">Subject</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">message</i>
                        <textarea class="materialize-textarea" name="message" ></textarea>
                        <label for="icon_prefix2">Enter your message</label>
                      </div>
                    </div>
                    <div class="row">
                      <input type="submit" value="send" name="send" class="btn btn-large white-text cyan" href="" style="  box-shadow: none;">
                    </div>
                  </div>
                  </form>
                </div>
          </div>
        </div>

      
      </center>
    </div>
</section>


<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>


</main>


