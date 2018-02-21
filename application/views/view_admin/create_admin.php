<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

<div class="divider"></div>


<div class="container">
      <div class="boxes" style="border: 1px solid #2c2c2c; border-radius: 30px; width: 100%; padding-left: 10px; margin-top: 10px; margin-bottom: 20px;">
        <h3 style="color: #2c2c2c;">Add News</h3>
      </div>

	
	
		<?php echo form_open("AdminNews/create_admin") ?>
		<div class="row">
			<div class="col s12" style="border: 1px solid grey;">
				<label for="text">Add Title</label>
				<input type="text" name="title" class="materialize-textarea" placeholder="Add title here" style="color: #000;">
			</div>
						&nbsp
			<div class="col s12" style="border: 1px solid grey;">
			<label for="text">Add Content</label>
				<input type="text" name="content" class="materialize-textarea" placeholder="Add content here"  style="color: #000;">
			</div>
			<?php echo validation_errors(); ?>
		</div>
		<p><input class="btn" type="submit" name="Postnews"></p>
		</form>
		<br>	

</div>





<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><img src="/assets/icons/arrow-up.png" style="padding-top:4px;"></a>
  </div>
</div>