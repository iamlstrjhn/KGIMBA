<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

<div class="divider"></div>


<div class="container">

	<h3 style="color: #2c2c2c;"><?= $title; ?></h3>
	
	
		<?php echo form_open('AdminNews/update') ?>
		<input type="hidden" name="id" value="<?php echo $post['ID']; ?>">
		<div class="row">
			<div class="col s12" style="border: 1px solid grey;">
				<label for="text">Add Title</label>
				<input type="text" name="title" class="materialize-textarea" placeholder="Add title here" value="<?php echo $post['Title']; ?>" style="color: #000;">
			</div>
						&nbsp
			<div class="col s12" style="border: 1px solid grey;">
			<label for="text">Add Content</label>
				<input type="text" name="content" class="materialize-textarea" placeholder="Add content here" value= "<?php echo $post['Content']; ?>" style="color: #000;">
			</div>
			<?php echo validation_errors(); ?>
		</div>
		<p><input class="btn" type="submit" class="btn" name="Postnews"></p>
		</form>
		<br>	

</div>





<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>