<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>
 <div class="divider"></div>

<div class="container ">
	<div class="bodybox" style=" margin-top: 20px; ">
		<h2 class="center" style="color: #10bbb3; font-weight: 300;">YOU ARE IN ADMIN PAGE</h2>
		<h5 class="subheader center" style="color: #615d5d;font-weight: 200;">You are in control of everything</h5>
	</div>
</div>





<section class="highlight">
        <div class="highlights container">
		    <div class="row">
				<div class="col s12 m9">
					<h5 style="color: #2c2c2c;">Operational Highlights</h5>
				</div>

				<div class="col s12 m3"  style="margin-top: 20px;">
					 <a href="#operations" class="waves-effect btn cyan "><i class="material-icons right">add</i>add new</a>
				</div> 

				
					 <div id="operations" class="modal">
					 	<div class="modal-content" style="padding: 20px 40px 20px 40px;">
					 			
					 			<h5>OPERATIONAL HIGHLIGHTS</h5>
							 		<?php echo form_open("AdminUser/create_admin") ?>

								 		<div class="box" style=" margin-top: 30px;">
								 			 <div class="row" >
										       <label for="text">Add Particular</label>
												<input type="text" name="description" class="materialize-textarea" >
										      </div>
										      <div class="row">
										        <label for="text">Enter Total</label>
												<input type="text" name="total" class="materialize-textarea" >
										      </div>
								 		</div>
							 		

						                     <div class="row">
						                        <div class="col s12">
						                          <input class="btn right cyan " type="submit" value= "submit">
						                     	</div>
									 		</div>
							 		</form>
					 	</div>
					</div>
				</div>


            <table class="squarebox responsive-table  hoverable">

				
              <thead style="color: #f2f2f2;">
                <tr>
                    <th>PARTICULARS</th>
                    <th>TOTAL</th>
                    <th>ACTION</th>
                    
                </tr>
              </thead>

                
             
          
            <tbody style="color: #615d5d;">
            	 <?php
              foreach ($assets as $asset) {
              	$x = $asset->ID;
              ?>
             
              <tr>
              	
              	<td><?php echo $asset->Description; ?></td>
              	<td><?php echo $asset->Total; ?></td>
              	<td>
              		<a class='dropdown-button btn red lighten-1' href='adminuser/delete_operation/<?php echo $x; ?>'>DELETE</a>

				  
              	</td>
              </tr>
              <?php 
          		}
              	?>
             </tbody>
         
             	
                
          </table>


		          <div class="row" style="margin-top: 20px;">
						<div class="col s12 m9">
							<h5 style="color: #2c2c2c;">Financial Highlights</h5>
						</div>
						<div class="col s12 m3"  style="margin-top: 10px;">
							 <a href="#financials" class="waves-effect btn cyan"><i class="material-icons right">add</i>add new</a>
							 
							 <div id="financials" class="modal">
							 	<div class="modal-content" style="padding: 20px 40px 20px 40px;">
							 		<h5>FINANCIAL HIGHLIGHTS</h5>
							 		
							 		<?php echo form_open("AdminUser/create_adminhighlight") ?>

								 		<div class="box" style=" margin-top: 30px;">
								 			 <div class="row">
										       <label for="text">Add Particular</label>
												<input type="text" name="description1" class="materialize-textarea" >
										      </div>
										      <div class="row">
										        <label for="text">Enter Total</label>
												<input type="text" name="total1" class="materialize-textarea" >
										      </div>
								 		</div>
							 		
							 		
				                    

						                     <div class="row">
						                        <div class="col s12">
						                          <input class="btn right grey darken-4" type="submit" value= "Submit">
						                     	</div>
									 		</div>
							 		</form>


							 	</div>
							 </div>
						</div>
				</div>

            <table class=" squarebox responsive-table hoverable">
              <thead style="color: #f2f2f2;">
           
                <tr>
                    <th>PARTICULARS</th>
                    <th>TOTAL</th>
                    <th>ACTION</th>
                </tr>
              </thead>

               

            <tbody style="color: #615d5d;">
            	<?php
	              foreach ($financials as $financial) {

	  				$xy = $financial->ID;
	           	?>
              <tr>
              	<td><?php echo $financial->Description1 ?></td>
              	<td><?php echo $financial->Total1 ?></td>
              	<td>
              	<a class='dropdown-button btn red lighten-1' href='adminuser/delete_financial/<?php echo $xy; ?>'>DELETE</a>
  				</td>
              </tr>
              <?php 
          		}
              	?>
             </tbody>
             	
          </table>
        </div>
</section>




<!--######################################-->
<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>
