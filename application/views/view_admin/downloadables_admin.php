
<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

 <div class="divider"></div>

<!--######################################-->
<div class="container">
      <div class="boxes" style="width: 100%; margin-top: 10px; margin-bottom: 20px;">
        <h3 style="color: #10bbb3;">Downloadables</h3>
      </div>
</div>

<section class="downloadables">
	<div class="container" style="margin-bottom: 20px; margin-top: 20px;">
				<div class="row">
						<div class="col s12 m9">
							<h4 style="color: #2c2c2c; font-family: 'Roboto Condensed', sans-serif;">KGI MBA Downloadable Forms</h4>
						</div>
						<div class="col s12 m3"  style="margin-top: 20px;text-align: center;">
							 <a href="#addfile1" class="waves-effect btn grey darken-4"><i class="material-icons right">add</i>add new</a>
							 <div id="addfile1" class="modal">
							 	<div class="modal-content">
							 		<h5>Upload Files</h5>
							 		<center>
							 		<div class="box" style=" margin-top: 30px;">
							 			 <div class="row">
											<?php echo form_open_multipart("AdminDownloadable/upload"); ?>

												<div class="input-field col s12">
										          <input placeholder="Input the status of the file" name="status" type="text">
										          <label for="text">Status</label>
										        </div>

										        <div class="form-group">
													  <div class="file-field input-field col s12">
													      <div class="btn">
													        <span>File</span>
													        <input type="file" name="userfile" size="20">
													      </div>
													      <div class="file-path-wrapper">
													        <input class="file-path validate" type="text">
													      </div>
													  </div>
												</div>
											  
									      </div>
							 		</div>
							 		</center>
				                
				                     <div class="row">
				                        <div class="col s12">
				                          <input class="btn right grey darken-4" type="submit" value= "upload">
				                        </div>
				                     </div>

				                     	</form>

							 	</div>
							 </div>
						</div>
					</div>


		
			<table class="responsive-table" style="border: 1px solid grey">
	        <thead style="color: #f2f2f2;">
	          <tr>
	              <th>Item</th>
	              <th>Status</th>
	              <th>Option</th>
	              
	          </tr>
	        </thead>

	        <tbody style="color: #615d5d;">

	        		<?php
		              foreach ($upload_data as $item) {
		              	$x = $item ->ID;
		              ?>
 					<tr>
			            <td><?php echo $item->File; ?></td>
			            <td><?php echo $item->Status; ?></td>
			            <td>
			            	<a href="<?php echo site_url('/uploads/') .$item->File ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a>
					 		 <a href="AdminDownloadable/delete_upload/<?php echo $x; ?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
	  					</td>
			          </tr>

	          <?php }
	          ?>

	          </tbody>
      </table>
	</div>

	

		<div class="container" style=";margin-bottom: 20px; margin-top: 20px;">
		<div class="divider"></div>
			<div class="row">
						<div class="col s12 m9">
							<h4 style="color: #2c2c2c; font-family: 'Roboto Condensed', sans-serif;">KGI MBA Financial Statements</h4>
						</div>
						<div class="col s12 m3"  style="margin-top: 20px;text-align: center;">
							 <a href="#addfile2" class="waves-effect btn grey darken-4"><i class="material-icons right">add</i>add new</a>
							 <div id="addfile2" class="modal">
							 	<div class="modal-content">
							 		<h5>Upload Files</h5>
							 		<center>
							 		<div class="box" style=" margin-top: 30px;">
							 			 <div class="row">
											<?php echo form_open_multipart("AdminDownloadable/upload_financial"); ?>

												<div class="input-field col s12">
										          <input placeholder="Input the status of the file" name="statusfinancial" type="text">
										          <label for="text">Status</label>
										        </div>

										        <div class="form-group">
													  <div class="file-field input-field col s12">
													      <div class="btn">
													        <span>File</span>
													        <input type="file" name="userfile" size="20">
													      </div>
													      <div class="file-path-wrapper">
													        <input class="file-path validate" type="text">
													      </div>
													  </div>
												</div>
											  
									      </div>
							 		</div>
							 		</center>
				                    
				                     <div class="row">
				                        <div class="col s12">
				                          <input class="btn right grey darken-4" type="submit" value= "upload">
				                        </div>
				                     </div>

				                 		</form>

							 	</div>
							 </div>
						</div>
					</div>


				<table class="responsive-table" style="border: 1px solid grey">
					<thead style="color: #f2f2f2;">
						<th>Item</th>
						<th>Status</th>
						<th>Option</th>
					</thead>

					<tbody style="color: #615d5d;">

						<?php
		              foreach ($data_upload as $item) {
		              	$xy = $item ->ID;
		              ?>
 					<tr>
			            <td><?php echo $item->Filefinancial; ?></td>
			            <td><?php echo $item->Statusfinancial; ?></td>
			            <td>
			            	<a href="<?php echo site_url('/uploads/') .$item->Filefinancial ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a>
					 		 <a href="AdminDownloadable/delete_upload_financial/<?php echo $xy; ?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
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
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>


<!--######################################-->

