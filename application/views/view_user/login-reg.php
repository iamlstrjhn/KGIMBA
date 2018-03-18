

<div class="container">
      <div class="boxes">
        <h3>Login</h3>
      </div>
            <div class="logincontainer">
              <h6 style="font-weight: 400;">THIS FEATURE IS FOR THE ADMIN ONLY</h6>
             
                  <form method="post" action="<?php echo base_url()?>Loginform/login">
                    <div class="input-field col s12">
                      <input id="username" type="text" name="username" class="validate">
                      <label for="username">Username</label>
                    </div>
                  <br>
                  
                    <div class="input-field col s12">
                      <input id="password" type="password" name="password" class="validate">
                      <label for="password">Password</label>
                    </div>

                    <div class="row">
                        <div class="col s12">
                           <input class="btn-flat white-text left teal lighten-2" style="margin-top: 20px;" type="submit" value= "submit">
                        </div>
                    </div>
                  </form>
            </div>

     </div>
  

