<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

<div class="divider"></div>

<div class="container" style="color: grey;">
	<h4><?php echo $post['Title']; ?></h4>
	<small>UPDATED ON: <?php echo $post['Date Created']; ?></small>	
	<p><?php echo $post['Content']; ?></p>
		
	<p><a class="btn" href="<?php echo base_url(); ?>AdminNews/edit/<?php echo $post['slug']; ?>">Edit</a>

	<a class="btn right	" href="<?php echo base_url(); ?>AdminNews">Go Back</a></p>


	<hr>
		<?php echo form_open('/AdminNews/delete/' .$post['ID']); ?>
			<input type="submit" value="delete" class="btn red darken-4">	
		</form>

		<br>
	

			
</div>
	



<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>	
</div>