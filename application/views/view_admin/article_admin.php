<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

<div class="divider"></div>

<div class="container" style="color: grey;">
	<h4><?php echo $post['Title']; ?></h4>
	<small>UPDATED ON: <?php echo $post['Date Created']; ?></small>	
	<p><?php echo $post['Content']; ?></p>
		
	<p><a class="btn" href="<?php echo base_url(); ?>AdminNews/edit/<?php echo $post['slug']; ?>">Edit</a>

	
	<a href="<?php echo base_url('AdminNews/delete'). "/" .$post['ID']; ?>" class="btn red lighten-1">REMOVE</a>


	<hr>
		<a class="btn" href="<?php echo base_url(); ?>AdminNews">Go Back</a></p>
		
		<br>
	

			
</div>
	



<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>	
</div>