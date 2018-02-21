

	<!--######################################-->

<div class="logo container">
   <img class="responsive-img center-on-small-only" src="assets/images/finallogo.png">
 </div>

 <div class="divider"></div>
<!--######################################-->
<div class="container">
     <div class="boxes" style="width: 100%; margin-bottom: 40px; margin-top: 50px;">
        <h3>DOWNLOADABLES</h3>
      </div>
</div>

<section class="downloadables">
	<div class="container">
		<h4>KGI MBA Downloadable Forms</h4>
			<table class="responsive-table">
	        <thead >
	          <tr style="background-color: #2c2c2c;color: #f2f2f2;">
	              <th>Item</th>
	              <th>Status</th>
	              <th>Option</th>

	              
	          </tr>
	        </thead>

	        <tbody>
	        	<?php
		              foreach ($upload_data as $item) {
		              ?>
	          <tr>
	            <td><?php echo $item->File; ?></td>
			    <td><?php echo $item->Status; ?></td>
			    <td>
			        <a href="<?php echo site_url('/uploads/') .$item->File ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a>
	  			</td>
	          </tr>

	           <?php }
	          ?>

	        </tbody>
      </table>
	</div>
</section>

<section class="downloadables">
	<div class="container">
		<h4>KGI Financial Statements</h4>
			<table class="responsive-table">
	        <thead >
	          <tr style="background-color: #2c2c2c;color: #f2f2f2;">
	              <th>Item</th>
	              <th>Status</th>
	              <th>Option</th>

	              
	          </tr>
	        </thead>

	        <tbody>
	        	<?php
		              foreach ($data_upload as $item) {
		              ?>
	          <tr>
	           <td><?php echo $item->Filefinancial; ?></td>
			   <td><?php echo $item->Statusfinancial; ?></td>
			   <td>
			      <a href="<?php echo site_url('/uploads/') .$item->Filefinancial ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a> 
	  			</td>
	          </tr>

	           <?php }
	          ?>

	        </tbody>
      </table>
	</div>
</section>










 <!--######################################-->
<div class="fixed-action-btn">
  <div class="section">
     <a class="waves-effect btn-floating btn-large cyan" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>


<!--######################################-->


