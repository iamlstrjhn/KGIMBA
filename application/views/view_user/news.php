

	<!--######################################-->

<div class="logo container">
   <img class="responsive-img center-on-small-only" src="assets/images/finallogo.png">
 </div>

<div class="divider"></div>
<!--######################################-->

<div class="container">
      <div class="boxes" style="width: 100%; margin-bottom: 40px; margin-top: 50px;">
        <h3>NEWS & ADVISORIES</h3>
      </div>
</div>

<div class="container" style="color: #2c2c2c;">

<br>
<?php foreach ($tbl_news as $news) : ?>

		<div class="card" style="padding: 20px 20px 20px 30px;">
			<h4><?php echo $news['Title']; ?></h4>
				<small>UPDATED ON: <?php echo $news['Date Created']; ?></small>
					<div class="news">
						<p style="font-size: 16px;"><?php echo word_limiter($news['Content'], 50); ?></p>
					</div>
		</div>

			

<br>

<?php endforeach; ?>

		
</div>	



<!--######################################-->
<div class="fixed-action-btn">
  <div class="section">
    <a class="waves-effect btn-floating btn-large cyan" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>


<!--Last page-->
