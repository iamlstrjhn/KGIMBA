

<div class="container">
  <div class="boxes" style="border: 1px solid #08adb1; border-radius: 30px; width: 100%; padding-left: 10px; margin-top: 10px;">
        <h3>Login</h3>
      </div>
          <div class="logincontainer">
            <h5 style="font-weight: 300;">This feature is for the admin only.</h5>
           
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
                         <input class="btn-flat white-text left teal lighten-2" type="submit" value= "submit">
                      </div>
                  </div>
                </form>
          </div>

     </div>
  

