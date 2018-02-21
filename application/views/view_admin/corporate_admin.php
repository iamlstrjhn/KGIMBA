

<!--######################################-->

<div class="logo container">
   <img class="responsive-img center-on-small-only" src="/assets/images/finallogo.png">
 </div>

<div class="divider"></div>
<!--######################################-->

<div class="container">
      <div class="boxes" style=" width: 100%; margin-top: 10px; margin-bottom: 20px;">
        <h3 style="color: #10bbb3;">Corporate Governance</h3>
      </div>
</div>


<section class="corporate">
	<div class="container" style="margin-bottom: 20px; margin-top: 20px;">
	<div class="row">
		<div class="col s12 m9">
			<h4 style="color: #2c2c2c; font-family: 'Roboto Condensed', sans-serif;">Corporate Governance</h4>
		</div>

		<div class="col s12 m3"  style="margin-top: 20px;text-align: center;">
			 <a href="#addfile1" class="waves-effect btn grey darken-4"><i class="material-icons right">add</i>add new</a>
			 <div id="addfile1" class="modal">
			 	<div class="modal-content">
			 		<h5>Upload Files</h5>
			 		<center>
			 		<div class="box" style=" margin-top: 30px;">
			 			 <div class="row">
							<?php echo form_open_multipart("AdminCorporate/upload"); ?>

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
			
	
			<table class="responsive-table hoverable" style="border: 1px solid grey;" >
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
		              	$x = $item->ID;
		              ?>


			          <tr>
			            <td><?php echo $item->File; ?></td>
			            <td><?php echo $item->Status; ?></td>
			            <td>
			            	<a href="<?php echo site_url('/uploads/') .$item->File ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a>
					 		 <a href="AdminCorporate/delete_upload/<?php echo $x; ?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
	  					</td>
			          </tr>


			         <?php 
		          		}
		              	?>
		         
		        </tbody>
      </table>
		
	</div>
	
		<div class="container" style="margin-bottom: 20px; margin-top: 10px;">
				<div class="row">
						<div class="col s12 m9">
							<h4 style="color: #2c2c2c;font-family: 'Roboto Condensed', sans-serif;">Notice & Minutes of Annual General Assembly</h4>
						</div>
						<div class="col s12 m3"  style="margin-top: 20px;text-align: center;">
							 <a href="#addfile2" class="waves-effect btn grey darken-4"><i class="material-icons right">add</i>add new</a>
							 <div id="addfile2" class="modal">
							 	<div class="modal-content">
							 		<h5>Upload Files</h5>
							 		<center>
							 		<div class="box" style=" margin-top: 30px;">
							 			 <div class="row">
											<?php echo form_open_multipart("AdminCorporate/upload_corp"); ?>

												<div class="input-field col s12">
										          <input placeholder="Input the status of the file" name="statuscorp" type="text">
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
					
				<table class="responsive-table hoverable" style="border: 1px solid grey;">
			        <thead style="color: #f2f2f2;">
			          <tr>
			              <th>Item</th>
			              <th>Status</th>
			              <th>Option</th>
			              
			          </tr>
			        </thead>

			        <tbody style="color: #615d5d;">

			        		<?php
				              foreach ($data_upload as $item) {
				              	$xy = $item->ID;
				              ?>

			          <tr>
			            <td><?php echo $item->Filecorp; ?></td>
			            <td><?php echo $item->Statuscorp; ?></td>
			            <td>
			            	<a href="<?php echo site_url('/uploads/') .$item->Filecorp ?>" target="_blank" class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">call_made</i></a>
					 		 <a href="AdminCorporate/delete_upload_corp/<?php echo $xy; ?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
	  					</td>
			          </tr>
			         	
			         		<?php } ?>
			        </tbody>
     		 </table>

		</div>
</section>

<!--######################################-->

<section class="corporate-asean">
	<div class="container">
		<h4 style="color: #2c2c2c;">KGI MBA ASEAN Corporate Governance Scorecard</h4>
			<table class="responsive-table hoverable" style="border: 1px solid grey;">
				<thead>
					<tr>
						<th>Company</th>
						<th>Financial Year End</th>
						<th colspan="2">Sector</th>
						<th>Company Structure</th>
					</tr>
				</thead>
				<tbody>
						<tr>
							<td>KGI Mutual Benefit Association Inc.</td>
							<td>2016</td>
							<td>Insurance</td>
							<td>MBA</td>
							<td>Class 5</td>
							
						</tr>
				</tbody>

			</table>

				<ul class="collapsible" data-collapsible="accordion">
				    <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>Right of Shareholders</div>
				      <div class="collapsible-body"> 

				      <table class="responsive-table" >
				      	<thead>
				      		<tr>
				      			<th colspan="3">A.1 Basic Shareholder Rights</th>
				      			<th>Y/N</th>
				      			<th>Reference/Source Documents</th>
				      		</tr>
				      	</thead>

				      	<tbody>
				      		<tr>
				      			<td>A.1.1</td>
				      			<td>Does the company pay (interim and final/annual) dividends in an equitable and timely manner; that is, all shareholders are treated equally and paid within 30 days after being (i) declared for interim dividends and (ii) approved by shareholders at general meetings for final dividends?</td>
				      			<td>OECD Principle II: The Rights of Shareholders and
								Key Ownership Functions 
								(A) Basic shareholder rights should include the right to, amongst others: (6) share in the profits of the corporation.</td>
								<td>N/A</td>
								<td>Because KGI Mba is a no-stock association and does not pay dividends
								</td>
				      		</tr>
				      		<tr style="background: none;"><td colspan="5"></td></tr>

				      	</tbody>

				      	<thead>
				      		<tr>
				      			<th>A.2</th>
				      			<th colspan="2">Right to participate in decisions concerning fundamental corporate changes.</th>
				      			<th>Y/N</th>
				      			<th>Reference/Source Documents</th>
				      		</tr>
				      	</thead>
				      	<tbody>
				      		<tr>
				      			<th></th>
				      			<th colspan="2">Do shareholders have the right to participate in:</th>
				      			<th></th>
				      			<th></th>
				      		</tr>
				      		<tr>
				      			<td>A.2.1</td>
				      			<td>Amendments to the company's constitution?</td>
				      			<td>
				      				OECD Principle II
									(B) Shareholders should have the right to participate in, and to be sufficiently informed on, decisions concerning fundamental corporate changes such as: (1) amendments to the statutes, or articles of incorporation or similar governing documents of the company.
				      			</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AMENDED_BY_LAWS_A3SEC2.pdf" target="_blank" class="center" style="color:#10bbb3;">Amended by Laws</a>
				      					
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.2.2</td>
				      			<td>The authorisation of additional shares?</td>
				      			<td>OECD Principle II (B): 
								(2) the authorisation of additional shares.</td>
								<td>N</td>
								<td>Because KGI Mba is a non-stock association and members are recognized through issuance of Certificate of Membership</td>
				      		</tr>
				      		<tr>
				      			<td>A.2.3</td>
				      			<td>The transfer of all or substantially all assets, which in effect results in the sale of the company?</td>
				      			<td>OECD Principle II.(B): 
								(3) extraordinary transactions, including the transfer of all or substantially all assets, that in effect result in the sale of the company.</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AMENDED_BY_LAWS_A3SEC2.pdf" target="_blank" class="center" style="color:#10bbb3;">Amended by Laws</a>
				      					
				      			</td>
				      		</tr>

				      		

				      		<tr>
				      			<td colspan="5"></td>
				      		</tr>
				      	</tbody>
				      	

				      	<thead>
				      		<tr>
				      			<th>A.3</th>
				      			<th colspan="2">Right to participate effectively in and vote in general shareholder meetings and should be informed of the rules, including voting procedures, that govern general shareholder meetings.</th>
				      			<th>Y/N</th>
				      			<th>Reference/Source Documents</th>
				      		</tr>
				      	</thead>

				      	<tbody>
				      		<tr>
				      			<td>A.3.1</td>
				      			<td>Do shareholders have the opportunity, evidenced by an agenda item, to approve remuneration (fees, allowances, benefit-in-kind and other emoluments) or any increases in remuneration for the non-executive directors/ commissioners?</td>
				      			<td>OECD Principle II (C):  	and key executives. The equity component of compensation schemes for board members and employees should be subject to shareholder approval.</td>
								<td>Y</td>
								<td>Default</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.2</td>
				      			<td colspan="2">Does the company provide non-controlling shareholders a right to nominate candidates for board of directors/commissioners?</td>
				      			<td>N</td>
				      			<td>KGI MBA is a non-stock, non-profit association and no non-controlling shareholders</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.3</td>
				      			<td>Does the company allow shareholders to elect directors/commissioners individually?</td>
				      			<td>&nbsp;</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AMENDED_BY_LAWS_A4SEC6.pdf" target="_blank" class="center" style="color:#10bbb3;">Amended by Laws</a>
				      					
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.4</td>
				      			<td>Does the company disclose the voting and vote tabulation procedures used, declaring both before the meeting proceeds?</td>
				      			<td>OECD Principle II (C): 
								Shareholders should have the opportunity to participate effectively and vote in general shareholder meetings and should be informed of the rules, including voting procedures, that govern general shareholder meetings.
								</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.5</td>
				      			<td>Do the minutes of the most recent AGM record that there was an opportunity allowing for shareholders to ask questions or raise issues?</td>
				      			<td>OECD Principle II (C): <br>
								(2) Shareholders should have the opportunity to ask questions to the board, including questions relating to the annual external audit, to place items on the agenda of general meetings, and to propose resolutions, subject to reasonable limitations.</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_309.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.6</td>
				      			<td>Do the minutes of the recent AGM record questions and answers?</td>
				      			<td>OECD Principle II (C): <br>
								(2) Shareholders should have the opportunity to ask questions to the board, including questions relating to the annual external audit, to place items on the agenda of general meetings, and to propose resolutions, subject to reasonable limitations.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>

				      		</tr>
				      		<tr>
				      			<td>A.3.7</td>
				      			<td>Does the disclosure of the outcome of the most recent AGM include resolution(s)?</td>
				      			<td>OECD Principle II (C): <br>
								(2) Shareholders should have the opportunity to ask questions to the board, including questions relating to the annual external audit, to place items on the agenda of general meetings, and to propose resolutions, subject to reasonable limitations.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.8</td>
				      			<td>Does the company disclose the voting results including approving, dissenting, and abstaining votes for each agenda item for the most recent AGM?</td>
				      			<td>OECD Principle II (C): <br>
								(2) Shareholders should have the opportunity to ask questions to the board, including questions relating to the annual external audit, to place items on the agenda of general meetings, and to propose resolutions, subject to reasonable limitations.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.9</td>
				      			<td>Does the company disclose the list of board members who attended the most recent AGM?</td>
				      			<td>OECD Principle II (C); and <br> <br>ICGN 2.4.2: 
								All directors need to be able to allocate sufficient time to the board to perform their responsibilities effectively, including allowing some leeway for occasions when greater than usual time demands are made.</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.10</td>
				      			<td>Did the chairman of the board of directors/commissioners attend the most recent AGM?</td>
				      			<td>OECD Principle II (C); and <br> <br>ICGN 2.4.2: 
								All directors need to be able to allocate sufficient time to the board to perform their responsibilities effectively, including allowing some leeway for occasions when greater than usual time demands are made.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.11</td>
				      			<td>Did the CEO/Managing Director/President attend the most recent AGM?</td>
				      			<td>OECD Principle II (C); and <br> <br>ICGN 2.4.2: 
								All directors need to be able to allocate sufficient time to the board to perform their responsibilities effectively, including allowing some leeway for occasions when greater than usual time demands are made.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>

				      		</tr>
				      		<tr>
				      			<td>A.3.12</td>
				      			<td>Did the chairman of the Audit Committee attend the most recent AGM?</td>
				      			<td>OECD Principle II (C); and <br> <br>ICGN 2.4.2: 
								All directors need to be able to allocate sufficient time to the board to perform their responsibilities effectively, including allowing some leeway for occasions when greater than usual time demands are made.</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES <br>Regular Board Meeting</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.13</td>
				      			<td>Did the company organise their most recent AGM in an easy to reach location?</td>
				      			<td>OECD Principle II (C)</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AMENDED_BY_LAWS_A3SEC2.pdf" target="_blank" class="center" style="color:#10bbb3;">Amended by Laws</a>
				      					
				      			</td>

				      		</tr>
				      		<tr>
				      			<td>A.3.14</td>
				      			<td>Does the company allow voting for in absentia?</td>
				      			<td>OECD Principle II (C):
								(4) Shareholders should be able to vote in person or in absentia, and equal effect should be given to votes whether cast in person or in absentia.</td>
								<td>Y</td>
								<td>Default</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.15</td>
				      			<td>Did the company vote by poll (as opposed to by show of hands) for all resolutions at the most recent AGM?</td>
				      			<td>OECD Principle II (C)</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.16</td>
				      			<td>Does the company disclose that it has appointed an independent party (scrutineers/inspectors) to count and/or validate the votes at the AGM?</td>
				      			<td>OECD Principle II (C)</td>
				      			<td>Y</td>
				      			<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_AGM_MINUTES_LINE_328.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.17</td>
				      			<td>Does the company make publicly available by the next working day the result of the votes taken during the most recent AGM for all resolutions?</td>
				      			<td>OECD Principle II (C):
								(1) Shareholders should be furnished with sufficient and timely information concerning the date, location and agenda of general meetings, as well as full and timely information regarding the issues to be decided at the meeting.</td>
								<td>N</td>
								<td>&nbsp;</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.18</td>
				      			<td>Do companies provide at least 21 days notice for all resolutions?</td>
				      			<td>&nbsp;</td>
				      			<td>Y</td>
				      			<td>The Notice of AGMM was released May 9, 2016</td>
				      		</tr>
				      		<tr>
				      			<td>A.3.19</td>
				      			<td>Does the company provide the rationale and explanation for each agenda item which require shareholders’ approval in the notice of AGM/circulars and/or the accompanying statement?</td>
				      			<td>&nbsp;</td>
				      			<td>N</td>
				      			<td>The rationale and explanation for each agenda is explained during the meeting.</td>
				      		</tr>
				      		<tr>
				      			<td colspan="5">The rationale and explanation for each agenda was explained during the meeting.</td>
				      		</tr>
				      	</tbody>

				      	<thead>
				      		<tr>
				      			<th>A.4</th>
				      			<th>Markets for corporate control should be allowed to function in an efficient and transparent manner.</th>
				      			<th>&nbsp;</th>
				      			<th>Y/N</th>
				      			<th>Reference/Source Documents</th>
				      		</tr>
				      	</thead>

				      	<tbody>
				      		<tr>
				      			<td>A.4.1</td>
				      			<td>In cases of mergers, acquisitions and/or takeovers requiring shareholders approval, does the board of directors/commissioners of the offeree company appoint an independent party to evaluate the fairness of the transaction price?</td>
				      			<td>OECD Principle II (E):<br>
								Markets for corporate control should be allowed to function in an efficient and transparent manner.
								<br><br>
								(1) The rules and procedures governing the acquisition of corporate control in the capital markets, and extraordinary transactions such as mergers, and sales of substantial portions of corporate assets, should be clearly articulated and disclosed so that investors understand their rights and recourse. Transactions should occur at transparent prices and under fair conditions that protect the rights of all shareholders according to their class.</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_CG_MANUAL_PART2-2.1.5.1.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
				      			</td>
				      		</tr>
				      		<tr>
				      			<td colspan="5"></td>
				      		</tr>
				      	</tbody>

				      	<thead>
				      		<tr>
				      			<th>A.5</th>
				      			<th>The exercise of ownership rights by all shareholders, including institutional investors, should be facilitated.</th>
				      			<th>&nbsp;</th>
				      			<th>Y/N</th>
				      			<th>Reference/Source Documents</th>
				      		</tr>
				      	</thead>

				      	<tbody>
				      		<tr>
				      			<td>A.5.1</td>
				      			<td>Does the Company publicly disclose policy/practice to encourage shareholders including institutional shareholders to attend the general meetings or engagement with the Company?</td>
				      			<td>OECD Principle II (F): <br>
								The exercise of ownership rights by all shareholders, including institutional investors, should be facilitated.</td>
								<td>Y</td>
								<td>
				      				<a href="PDF/ASEAN/A/KGI-MBA_CG_MANUAL_PART3-3.2.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
				      			</td>
				      		</tr>
				      	</tbody>

				      </table>

				      </div>
				    </li>

				    <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>Equitable Treatment of Shareholders</div>
					      <div class="collapsible-body">
					      	<table class="corpasean responsive-table" style="border: 1px solid grey;">
					      		<thead>
					      			<tr>
					      				<th>B.1</th>
					      				<th colspan="2">Shares and Voting Rights</th>
					      				<th>Y/N</th>
					      				<th>Reference/Source Documents</th>
					      			</tr>
					      		</thead>

					      		<tbody>
					      			<tr>
					      				<td>B.1.1</td>
					      				<td>Do the company's ordinary or common shares have one vote for one share?</td>
					      				<td rowspan="2">OECD Principle III <br>
										(A) All shareholders of the same series of a class should be treated equally.
										(1) Within any series of a class, all shares should carry the same rights. All investors should be able to obtain information about the rights attached to all series and classes of shares before they purchase. Any changes in voting rights should be subject to approval by those classes of shares which are negatively affected. <br> <br>

										ICGN 8.3.1 Unequal voting rights
										Companies ordinary or common shares should feature one vote for one share. Divergence from a 'one-share, one-vote' standard which gives certain shareholders power which is disproportionate to their equity ownership should be both disclosed and justified.</td>
										<td>Y</td>
										<td>
					      				<a href="PDF/ASEAN/B/KGI-MBA_AMENDED_BY_LAWS_A4SEC6.pdf" target="_blank" class="center" style="color:#10bbb3;">Amended by Laws</a>
					      				</td>
					      			</tr>

					      			<tr>
					      				<td>B.1.2</td>
					      				<td>Where the company has more than one class of shares, does the company publicise the voting rights attached to each class of shares (e.g. through the company website / reports/ the stock exchange/ the regulator's website)?</td>
					      				<td>Y</td>
					      				<td>ALL MEMBERS ARE ALL VOTING MEMBERS</td>
					      			</tr>
					      			<tr>
					      				<td colspan="5"></td>
					      			</tr>
					      		</tbody>

					      		<thead>
					      			<tr>
					      				<th>B.2</th>
					      				<th>Notice of AGM</th>
					      				<th>&nbsp;</th>
					      				<th>&nbsp;</th>
					      				<th>&nbsp;</th>
					      			</tr>
					      		</thead>

					      		<tbody>
					      			<tr>
					      				<td>B.2.1</td>
					      				<td>Does each resolution in the most recent AGM deal with only one item, i.e., there is no bundling of several items into the same resolution?</td>
					      				<td rowspan="8">OECD Principle II <br>
										(C) Shareholders should have the opportunity to participate effectively and vote in general shareholder meetings and should be informed of the rules, including voting procedures, that govern shareholder meetings:<br><br>
										(1) Shareholders should be furnished with sufficient and timely information concerning the date, location and agenda of general meetings, as well as full and timely information regarding the issues to be decided at the meeting.
										(3) Effective shareholder participation in key corporate governance decisions, such as the nomination and election of board members, should be facilitated.<br><br>

										OECD Principle II
										(A) All shareholders of the same series of a class should be treat equally.
										(4) Impediments to cross border voting should be eliminated.
										<br><br>
										ICGN 8.3.2 Shareholder participation in governance
										Shareholders should have the right to participate in key corporate governance decisions, such as the right to nominate, appoint and remove directors in an individual basis and also the right to appoint external auditor.
										<br><br>
										ICGN 8.4.1 Shareholder ownership rights
										The exercise of ownership rights by all shareholders should be facilitated, including giving shareholders timely and adequate notice of all matters proposed for shareholder vote.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_NOTICE_OF_AGM_2016.pdf" target="_blank" class="center" style="color:#10bbb3;">NOTICE OF AGM</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.2</td>
					      				<td>Are the company's notice of the most recent AGM/circulars fully translated into English and published on the same date as the local-language version?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_NOTICE_OF_AGM_2016.pdf" target="_blank" class="center" style="color:#10bbb3;">NOTICE OF AGM</a>
						      			</td>
						      		</tr>
					      			<tr>
					      				<td>&nbsp;</td>
					      				<td><b>Does the notice of AGM/circulars have the following details:</b></td>
					      				<td colspan="2">&nbsp;</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.3</td>
					      				<td>Are the profiles of directors/commissioners ( at least age, academic qualification, date of first appointment, experience, and directorships in other listed companies) in seeking election/re-election included?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_NOTICE_OF_AGM_WITH_NOMINEES.pdf" target="_blank" class="center" style="color:#10bbb3;">NOTICE OF AGM With Nominees</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.4</td>
					      				<td>Are the Auditors seeking appointment/re-appointment clearly identified?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_MINUTES_LINE_231-236.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.5</td>
					      				<td>Has an explanation of the dividend policy been provided?</td>
					      				<td>N/A</td>
					      				<td>Because KGI MBA is a non-stock non-profit association</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.6</td>
					      				<td>Is the amount payable for final dividends disclosed?</td>
					      				<td>N/A</td>
					      				<td>Because KGI MBA is a non-stock non-profit association</td>
					      			</tr>
					      			<tr>
					      				<td>B.2.7</td>
					      				<td>Were the proxy documents made easily available?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_MINUTES_LINE_314-317.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM MINUTES</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td colspan="5">&nbsp;</td>
					      			</tr>			      		
					      		</tbody>

					      		<thead>
					      			<tr>
					      				<th>B.4</th>
					      				<th colspan="2">Related party transactions by directors and key executives.</th>
					      				<th>&nbsp;</th>
					      				<th>&nbsp;</th>
					      			</tr>
					      		</thead>

					      		<tbody>
					      			<tr>
					      				<td>B.4.1</td>
					      				<td>Does the company have a policy requiring directors /commissioners to disclose their interest in transactions and any other conflicts of interest?</td>
					      				<td rowspan="4">OECD Principle III <br><br>
										(C) Members of the board and key executives should be required to disclose to the board whether they, directly, indirectly or on behalf of third parties, have a material interest in any transaction or matter directly affecting the corporation.<br><br>

										ICGN 2.11.1 Related party transactions<br>
										Companies should have a process for reviewing and monitoring any related party transaction. A committee of independent directors should review significant related party transactions to determine whether they are in the best interests of the company and if so to determine what terms are fair.
										<br><br>
										ICGN 2.11.2 Director conflicts of interest<br>
										Companies should have a process for identifying and managing conflicts of interest directors may have. If a director has an interest in a matter under consideration by the board, then the director should not participate in those discussions and the board should follow any further appropriate processes. Individual directors should be conscious of shareholder and public perceptions and seek to avoid situations where there might be an appearance of a conflict of interest.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_CG_MANUAL_PART2-2.4.1.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.4.2</td>
					      				<td>Does the company have a policy requiring a committee of independent directors/commissioners to review material/significant RPTs to determine whether they are in the best interests of the company and shareholders?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_CG_MANUAL_PART2-2.1.5.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.4.3</td>
					      				<td>Does the company have a policy requiring board members (directors/commissioners) to abstain from participating in the board discussion on a particular agenda when they are conflicted?</td>
					      				<td>Y</td>
					      				<td>Default</td>
					      			</tr>
					      			<tr>
					      				<td>B.4.4</td>
					      				<td>Does the company have policies on loans to directors and commissioners either forbidding this practice or ensuring that they are being conducted at arm's length basis and at market rates?</td>
					      				<td>Y</td>
					      				<td>Default</td>
					      			</tr>
					      			<tr>
					      				<td colspan="5">&nbsp;</td>
					      			</tr>
					      		</tbody>

					      		<thead>
					      			<tr>
					      				<th>B.5</th>
					      				<th colspan="2">Protecting minority	shareholders from abusive actions</th>
					      				<th>&nbsp;</th>
					      				<th>&nbsp;</th>
					      			</tr>
					      		</thead>

					      		<tbody>
					      			<tr>
					      				<td>B.5.1</td>
					      				<td>Were there any RPTs that can be classified as financial assistance to entities other than wholly-owned subsidiary companies?</td>
					      				<td rowspan="2">OECD Principle III <br>
										(A) All shareholders of the same series of a class should be treated equally.
										(2) Minority shareholders should be protected from abusive actions by, or in the interest of, controlling shareholders acting either directly or indirectly, and should have effective means of redress.<br><br>

										ICGN 2.11.1 Related party transactions<br>
										Companies should have a process for reviewing and monitoring any related party transaction. A committee of independent directors should review significant related party transactions to determine whether they are in the best interests of the company and if so to determine what terms are fair.
										<br><br>
										ICGN 2.11.2 Director conflicts of interest<br>
										Companies should have a process for identifying and managing conflicts of interest directors may have. If a director has an interest in a matter under consideration by the board, then the director should not participate in those discussions and the board should follow any further appropriate processes. Individual directors should be conscious of shareholder and public perceptions and seek to avoid situations where there might be an appearance of a conflict of interest.<br><br>

										ICGN 8.5 Shareholder rights of action<br>
										Shareholders should be afforded rights of action and remedies which are readily accessible in order to redress conduct of company which treats them inequitably. Minority shareholders should be afforded protection and remedies against abusive or oppressive conduct.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_AUDITED_FS_P17_N16.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
					      			</tr>
					      			<tr>
					      				<td>B.5.2</td>
					      				<td>Does the company disclose that RPTs are conducted in such a way to ensure that they are fair and at arms' length?</td>
					      				<td>Y</td>
					      				<td>
						      				<a href="PDF/ASEAN/B/KGI-MBA_CG_MANUAL_PART5-5.1.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
					      			</tr>
					      		</tbody>

					      	</table>
					      </div>
				    </li>

				    <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>Role of Stakeholders</div>
				      <div class="collapsible-body">
				      		<table class="responsive-table" style="border: 1px solid grey;">
				      			<thead>
				      				<tr>
				      					<th>C.1</th>
				      					<th colspan="2">The rights of stakeholders that are established by law or through mutual agreements are to be respected.</th>
				      					<th>Y/N</th>
				      					<th>Reference/Source Documents</th>
				      				</tr>
				      			</thead>

				      			<tbody>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="4">Does the company disclose a policy that :</th>
				      				</tr>
				      				<tr>
				      					<td>C.1.1</td>
				      					<td>Stipulates the existence and scope of the company's efforts to address customers' welfare?</td>
				      					<td rowspan="6">	
										<b>OECD Principle IV (A):</b> <br>
										The rights of stakeholders that are established by law or through mutual agreements are to be respected. In all OECD countries, the rights of stakeholders are established by law (e.g. labour, business, commercial and insolvency laws) or by contractual relations. Even in areas where stakeholder interests are not legislated, many firms make additional commitments to stakeholders, and concern over corporate reputation and corporate performance often requires the recognition of broader interests.<br><br>

										<b>Global Reporting Initiative:</b> Sustainability Report (C1.1 - C.15) International Accounting Standards 1: Presentation of Financial Statements</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.2</td>
				      					<td>Explains supplier/contractor selection practice?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.3</td>
				      					<td>Describes the company's efforts to ensure that its value chain is environmentally friendly or is consistent with promoting sustainable development?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.7.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.4</td>
				      					<td>Elaborates the company's efforts to interact with the communities in which they operate?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.6.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.5</td>
				      					<td>Describe the company's anti-corruption programmes and procedures?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART2-2.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.6</td>
				      					<td>Describes how creditors' rights are safeguarded?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART2-2.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="4">Does the company disclose the activities that it has undertaken to implement the above mentioned policies?</th>				
				      				</tr>
				      				<tr>
				      					<td>C.1.7</td>
				      					<td>Customer health and safety</td>
				      					<th rowspan="6">OECD Principle IV (A) & Global Reporting Initiative</th>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART3-3.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.8</td>
				      					<td>Supplier/Contractor selection and criteria</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.9</td>
				      					<td>Environmentally-friendly value chain</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.7.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.10</td>
				      					<td>Interaction with the communities</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART3-3.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.11</td>
				      					<td>Anti-corruption programmes and procedures</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART2-2.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.12</td>
				      					<td>Creditor's rights</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART2-2.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.1.13</td>
				      					<td>Does the company have a separate corporate responsibility (CR) report/section or sustainability report/section?</td>
				      					<td><b>OECD Principle V (A):</b><b> 
										Disclosure should include, but not be limited to, material information on: 
										(7) Issues regarding employees and other stakeholders.<b><b>

										Companies are encouraged to provide information on key issues relevant to employees and other stakeholders that may materially affect the long term sustainability of the company.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>C.2</th>
				      					<th colspan="2">Performance-enhancing mechanisms for employee participation should be permitted to develop.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>C.2.1</td>
				      					<td>Does the company provide contact details via the company's website or Annual Report which stakeholders (e.g. customers, suppliers, general public etc.) can use to voice their concerns and/or complaints for possible violation of their rights?</td>
				      					<td><b>OECD Principle IV (B):</b><b> 
										Where stakeholder interests are protected by law, stakeholders should have the opportunity to obtain effective redress for violation of their rights.<b><b>

										The governance framework and processes should be transparent and not impede the ability of stakeholders to communicate and to obtain redress for the violation
										of rights</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>C.3</th>
				      					<th colspan="2">Performance-enhancing mechanisms for employee participation should be permitted to develop.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>C.3.1</td>
				      					<td>Does the company explicitly disclose the health, safety, and welfare policy for its employees?</td>
				      					<td rowspan="5"><b>OECD Principle IV (C):</b><br>
										Performance-enhancing mechanisms for employee participation should be permitted to develop. In the context of corporate governance, performance enhancing mechanisms for participation may benefit companies directly as well as indirectly through the readiness by employees to invest in firm specific skills.<br><br>

										Firm specific skills are those skills/competencies that are related to production technology and/or organizational aspects that are unique to a firm.<br><br>

										Examples of mechanisms for employee participation include: employee representation on boards; and governance processes such as works councils that consider employee viewpoints in certain key decisions. With respect to performance enhancing mechanisms, employee stock ownership plans or other profit sharing mechanisms are to be found in many countries.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.2.2.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      				<a href="PDF/ASEAN/C/KGI-MBA_PERSONNEL_MANUAL_MEDICAL.pdf" target="_blank" class="center" style="color:#10bbb3;">Personnel Manual</a>

						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.3.2</td>
				      					<td>Does the company publish relevant information relating to health, safety and welfare of its employees?</td>
				      					<td>Y</td>
				      					<td>Memo-Medical Exam Result</td>
				      				</tr>
				      				<tr>
				      					<td>C.3.3</td>
				      					<td>Does the company have training and development programmes for its employees?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_PERSONNEL_MANUAL_CAPACITY_BUILDING.pdf" target="_blank" class="center" style="color:#10bbb3;">Personnel Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.3.4</td>
				      					<td>Does the company publish relevant information on training and development programmes for its employees?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>C.3.5</td>
				      					<td>Does the company have a reward/compensation policy that accounts for the performance of the company beyond short-term financial measures?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_PERSONNEL_MANUAL_CAPACITY_BUILDING.pdf" target="_blank" class="center" style="color:#10bbb3;">Personnel Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>C.4</th>
				      					<th colspan="2">Stakeholders including individual employee and their representative bodies, should be able to freely communicate their concerns about illegal or unethical practices to the board and their rights should not be compromised for doing this.</th>
				      					<th>N</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>C.4.1</td>
				      					<td>Does the company have procedures for complaints by employees concerning illegal (including corruption) and unethical behaviour?</td>
				      					<td rowspan="2"><b>OECD Principle IV (E):</b><br> 
										Stakeholders, including individual employees and their representative bodies, should be able to freely communicate their concerns about illegal or unethical practices to the board and their rights should not be compromised for doing this.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.1.5.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>C.4.2</td>
				      					<td>Does the company have a policy or procedures to protect an employee/person who reveals illegal/unethical behavior from retaliation?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/C/KGI-MBA_CG_MANUAL_PART4-4.4.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      			</tbody>
				      		</table>
				      </div>
				    </li>

				    <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>Disclosure and Transparency</div>
				      <div class="collapsible-body">
				      		<table class="responsive-table" style="border: 1px solid grey;">
				      			<thead>
				      				<tr>
				      					<th>D.1</th>
				      					<th colspan="2">Transparent Ownership Structure</th>
				      					<th>Y/N</th>
				      					<th>Reference/Source Documents</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>D.1.1</td>
				      					<td>Does the information on shareholdings reveal the identity of beneficial owners, holding 5% shareholding or more?</td>
				      					<td rowspan="5"><b>OECD Principle V: Disclosure and Transparency</b><br>
										(A) Disclosure should include, but not limited to, material information on:
										(3) Major share ownership and voting rights, including group structures, intra-group relations, ownership data, and beneficial ownership.<br><br>

										<b>ICGN 7.6 Disclosure of ownership</b><br>
										... the disclosure should include a description of the relationship of the company to other companies in the corporate group, data on major shareholders and any other information necessary for a proper understanding of the company's relationship with its public shareholders.</td>
										<td>N/A</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.2</td>
				      					<td>Does the company disclose the direct and indirect (deemed) shareholdings of major and/or substantial shareholders?</td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.3</td>
				      					<td>Does the company disclose the direct and indirect (deemed) shareholdings of directors (commissioners)?</td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.4</td>
				      					<td>Does the company disclose the direct and indirect (deemed) shareholdings of senior management?</td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.5</td>
				      					<td>Does the company disclose details of the parent/holding company, subsidiaries, associates, joint ventures and special purpose enterprises/ vehicles (SPEs)/ (SPVs)?</td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>D.2</th>
				      					<th colspan="2">Quality of Annual Report</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="2">Does the company's annual report disclose the following items:</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.2.1</td>
				      					<td>Key Risks</td>
				      					<td rowspan="11"><b>"OECD Principle V (A):</b><br> 
										(1) The financial and operating results of the company;<br>
										(2) Company objectives, including ethics, environment, and other public policy commitments;<br>
										(3) Major share ownership and voting rights, including group structures, intra-group relations, ownership data, beneficial ownership;<br>
										(4) Remuneration policy for members of the board and key executives, including their qualifications, the selection process, other company directorships and whether they are regarded as independent by the board;<br>
										(6) Foreseeable risk factors, including risk management system;<br>
										(7) Issues regarding employees and other stakeholders;<br>
										(8) Governance structure and policies, in particular, the content of any corporate governance code or policy and the process by which it is implemented.<br><br>

										<b>OECD Principle V (E): </b><br>
										Channels for disseminating information should provide for equal, timely and cost-efficient access to relevant information by users.<br><br>

										<b>ICGN 2.4 Composition and structure of the board<br>
										ICGN 2.4.1 Skills and experience<br>
										ICGN 2.4.3 Independence<br><br>

										ICGN 5.0 Remuneration<br>
										ICGN 5.4 Transparency<br><br>

										UK Corporate Governance Code (2010) </b>
										A.1.2 - the number of meetings of the board and those committees and individual attendance by directors.<br><br>

										<b>CLSA-ACGA (2010) CG Watch 2010 - Appendix 2</b><br>
										(I) CG rules and practices<br>
										(19) Disclose the exact remuneration of individual directors.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_MNGT_INSURANCE_RISKS.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.1</td>
				      					<td>Corporate Objectives</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_CORPORATE_INFORMATION.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.3</td>
				      					<td>Financial performance indicators</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_FINANCIAL_STATEMENTS.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.4</td>
				      					<td>Non-financial performance indicators</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_SEGURO_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.5</td>
				      					<td>Dividend policy</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_ARTICLES_OF_INCORPORATION.jpg" target="_blank" class="center" style="color:#10bbb3;">Articles of Incorporation</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.6</td>
				      					<td>Details of whistle-blowing policy</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_CORPORATE_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.7</td>
				      					<td>Biographical details (at least age, qualifications, date of first appointment, relevant experience, and any other directorships of listed companies) of directors/commissioners</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.8</td>
				      					<td>Training and/or continuing education programme attended by each director/commissioner</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_BOARD_TRAINING.pdf" target="_blank" class="center" style="color:#10bbb3;">Board Training</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.9</td>
				      					<td>Number of board of directors/commissioners meetings held during the year</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_SUMMARY_MEETINGS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">Summary of Meetings of BOT 2015</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.10</td>
				      					<td>Attendance details of each director/commissioner in respect of meetings held</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_SUMMARY_MEETINGS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">Summary of Meetings of BOT 2015</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.2.11</td>
				      					<td>Details of remuneration of each member of the board of directors/commissioners</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_CGM_PARTII.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="4">Corporate Governance Confirmation Statement</th>
				      				</tr>
				      				<tr>
				      					<td>D.2.12</td>
				      					<td>Does the Annual Report contain a statement confirming the company's full compliance with the code of corporate governance and where there is non-compliance, identify and explain reasons for each such issue?</td>
				      					<td><b>OECD PRINCIPLE V (A) (8)</b><br><br>

										<b>UK CODE (JUNE 2010): Listing Rules</b><br>
										9.8.6 R (for UK incorporated companies) and 9.8.7 R (for overseas incorporated companies) state that in the case of a company that has a Premium listing of equity shares, the following items must be included in its Annual Report and accounts: a statement of how the listed company has applied the Main Principles set out in the UK CG Code, in a manner that would enable shareholders to evaluate how the principles have been applied; a statement as to whether the listed company has complied throughout the accounting period with all relevant provisions set out in the UK CG Code; or not complied throughout the accounting period with all relevant provisions set out in the UK CG Code, and if so, setting out:<br>
										(i) those provisions, if any, it has not complied with;<br>
										(ii) in the case of provisions whose requirements are of a continuing nature, the period within which, if any, it did not comply with some or all of those provisions; and 
										(iii) the company’s reasons for non-compliance.<br><br>

										<b>ASX CODE:</b>
										Under ASX Listing Rule 4.10.3, companies are required to provide a statement in their Annual Report disclosing the extent to which they have followed the Recommendations in the reporting period. Where companies have not followed all the Recommendations, they must identify the Recommendations that have not been followed and give reasons for not following them. Annual Reporting does not diminish the company’s obligation to provide disclosure under ASX Listing Rule 3.1.</td>
										<td>Y</td>
										<td>CG Manual</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.3</th>
				      					<th colspan="2">Disclosure of related party transactions (RPT)</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>D.3.1</td>
				      					<td>Does the company disclose its policy covering the review and approval of material/significant RPTs?</td>
				      					<td rowspan="3"><b>OECD Principle V: Disclosure and Transparency</b><br>
										(A) Disclosure should include, but not limited to, material information on:<br>
										(5) Related party transactions<br><br>

										<b>ICGN 2.11.1 Related party transactions</b><br>
										The company should disclose details of all material related party transactions in its Annual Report.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_DISCLOSURE_AND_TRANSPARENCY.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.3.2</td>
				      					<td>Does the company disclose the name of the related party and relationship for each material/significant RPT?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_AUDITED_FS_NOTE_19.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.3.3</td>
				      					<td>Does the company disclose the nature and value for each material/significant RPT?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_AUDITED_FS_NOTE_19.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.4</th>
				      					<th colspan="2">Does the company disclose trading in the company's shares by insiders?</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>D.4.1</td>
				      					<td>Does the company disclose trading in the company's shares by insiders?</td>
				      					<td><b>OECD Principle V (A): </b><br>
										(3) Major share ownership and voting rights<br><br>

										<b>ICGN 3.5 Employee share dealing</b><br>
										Companies should have clear rules regarding any trading by directors and employees in the company's own securities.><br><br>

										<b>ICGN 5.5 Share ownership</b><br>
										Every company should have and disclose a policy concerning ownership of shares of the company by senior managers and executive directors with the objective of aligning the interests of these key executives with those of shareholders.</td>
										<td>N/A</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.5</th>
				      					<th colspan="2">External auditor and Auditor Report</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>D.5.1</td>
				      					<td>Are audit fees disclosed</td>
				      					<td rowspan="4"><b>OECD Principle V (C):</b><br> 
										An annual audit should be conducted by an independent, competent and qualified, auditor in order to provide an external and objective assurance to the board and shareholders that the financial statements fairly represent the financial position and performance of the company in all material respects.<br><br>

										<b>OECD Principle V (D):</b>
										External auditors should be accountable to the shareholders and owe a duty to the company to exercise due professional care in the conduct of the audit.<br><br>

										<b>ICGN 6.5 Ethical standards (Audit)</b><br>
										The auditors should observe high-quality auditing and ethical standards. To limit the possible risk of possible conflicts of interest, non-audit services and fees paid to auditors for non-audit services should be both approved in advance by the audit committee and disclosed in the Annual Report.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_AUDITORS_ENGAGEMENT_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">Auditor's Engagement Letter</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th>Where the same audit firm is engaged for both audit and non-audit services</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.5.2</td>
				      					<td>Are the non-audit fees disclosed?</td>
				      					<td>N</td>
				      					<td>KGI MBA doesn't have any non-audit services with the auditors</td>
				      				</tr>
				      				<tr>
				      					<td>D.5.3</td>
				      					<td>Does the non-audit fee exceed the audit fees?</td>
				      					<td>N</td>
				      					<td>KGI MBA doesn't have any non-audit services with the auditors</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.6</th>
				      					<th colspan="2">Medium of Communications</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th>Does the company use the following modes of communications?</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.6.1</td>
				      					<td>Quarterly reporting</td>
				      					<td><b>OECD Principle V (E): </b><br>
										Channels for disseminating information should provide for equal, timely and cost-efficient access to relevant information by users.<br><br>

										<b>ICGN 7.1 Transparent and open communication</b><br>
										Every company should aspire to transparent and open communication about its aims, its challenges, its achievements and its failures.<br><br>

										<b>ICGN 7.2 Timely disclosure</b><br>
										Companies should disclose relevant and material information concerning themselves on a timely basis, in particular meeting market guidelines where they exist, so as to allow investors to make informed decisions about the acquisition, ownership obligations and rights, and sales of shares.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/d.6.1.jpg" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.6.2</td>
				      					<td>Company website</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.6.3</td>
				      					<td>Analyst's briefing</td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.6.4</td>
				      					<td>Media briefings /press conferences</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.7</th>
				      					<th colspan="2">Timely filing/release of annual/financial reports</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>

				      			<tbody>
				      				<tr>
				      					<td>D.7.1</td>
				      					<td>Are the audited annual financial report / statement released within 120 days from the financial year end?</td>
				      					<td rowspan="3"><b>OECD Principle V (C)</b><br><br>

										<b>OECD Principle V (E) OECD Principle V-(A).</b><br><br>

										<b>ICGN 7.2 Timely disclosure</b><br><br>

										<b>ICGN 7.3 Affirmation of financial statements</b><br>
										The board of directors and the corporate officers of the company should affirm at least annually the accuracy of the company's financial statements or financial accounts.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_CORPORATE_INFORMATION.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.7.2</td>
				      					<td>Is the annual report released within 120 days from the financial year end?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_CORPORATE_INFORMATION.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				Does the company have a website disclosing up-to-date information on the following:      				<tr>
				      					<td>D.7.3</td>
				      					<td>Is the true and fairness/fair representation of the annual financial statement/reports affirmed by the board of directors/commissioners and/or the relevant officers of the company?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/SMR_FS.pdf" target="_blank" class="center" style="color:#10bbb3;">SMR FS <br></br> SMR ITR</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.8</th>
				      					<th colspan="2">Company Website</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="2">Does the company have a website disclosing up-to-date information on the following:</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.8.1</td>
				      					<td>Business operations</td>
				      					<td rowspan="9"><strong>OECD Principle V (A)<br><br>

											OECD Principle V (E)<br><br>

											ICGN 7.1 Transparent and open communication<br><br>

											ICGN 7.2 Timely disclosure</strong></td>
										<td>Y</td>
										<td>Company Website</td>	
				      				</tr> 
				      				<tr>
				      					<td>D.8.2</td>
				      					<td>Financial statements/reports (current and prior years)</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.3</td>
				      					<td>Materials provided in briefings to analysts and media</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.4</td>
				      					<td>Shareholdings structure</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_ORGANIZATIONAL_STRUCTURE.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.5</td>
				      					<td>Group corporate structure</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_ORGANIZATIONAL_STRUCTURE.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.6</td>
				      					<td>Downloadable and Annual Report</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.7</td>
				      					<td>Notice of AGM and/or EGM</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.8</td>
				      					<td>Minutes of AGM and/or EGM</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>D.8.9</td>
				      					<td>Company's constitution (company's by-laws, memorandum and articles of association)</td>
				      					<td>Y</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.9</th>
				      					<th colspan="2">Investor Relations</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>D.9.1</td>
				      					<td>Does the company disclose the contact details (e.g. telephone, fax, and email) of the officer / office responsible for investor relations?</td>
				      					<td><b>ICGN 7.1 Transparent and open communication</b></td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      			</tbody>
				      		</table>

				      </div>
				    </li>

				    <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>Responsibilities of the Board</div>
				      <div class="collapsible-body">
				      		<table class="responsive-table" style="border: 1px solid grey;">
				      			<thead>
				      				<tr>
				      					<th>E.1</th>
				      					<th colspan="2">Board duties and responsibilities</th>
				      					<th>Y/N</th>
				      					<th>Reference/Source Documents</th>
				      				</tr>
				      			</thead>

				      			<tbody>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td><b>Clearly defined board responsibilities and corporate governance policy.</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.1</td>
				      					<td>Does the company disclose its corporate governance policy / board charter?</td>
				      					<td><b>OECD PRINCIPLE V: Disclosure and Transparency </b><br>
										(A) Disclosure should include, but not be limited to, material information on:<br>
										8. Governance structures and policies, in particular, the content of any corporate governance code or policy and the process by which it is implemented.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_GENERAL_RESPONSIBILITY.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.2</td>
				      					<td>Are the types of decisions requiring board of directors/commissioners' approval disclosed ?</td>
				      					<td rowspan="2"><b>OECD PRINCIPLE VI (D)</b></td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_ART_V_SEC_1.pdf" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.3</td>
				      					<td>Are the roles and responsibilities of the board of directors/commissioners clearly stated ?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_DUTIES_FUNCTIONS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Corporate Vision/Mission</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.4</td>
				      					<td>Does the company have a vision and mission statement?</td>
				      					<td><b>OECD PRINCIPLE 6 (P58) <br>
										ICGN:3.2 Integrity <br>
										ICGN:3.2 Integrity The board is responsible for overseeing the implementation and maintenance of a culture of integrity. The board should encourage a culture of integrity permeating all aspects of the co., and secure that its vision, mission and objectives are ethically sound.</b></td>
										<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CGM_VISION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.5</td>
				      					<td>Has the board review the vision and mission/strategy in the last financial year?</td>
				      					<td>&nbsp;</td>
				      					<td>N</td>
				      					<td>KGI MBA started operation only in 2013</td>
				      				</tr>
				      				<tr>
				      					<td>E.1.6</td>
				      					<td>Does the board of directors monitor/oversee the implementation of the corporate strategy?</td>
				      					<td>&nbsp;</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CORPORATE_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.2</th>
				      					<th colspan="2">Board Structure</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Code of Ethics or Conduct</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.1</td>
				      					<td>Are the details of the code of ethics or conduct disclosed?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI </b><br>
										(C) The board should apply high ethical standards. It should take into account the interests of stakeholders.<br>
										The board has a key role in setting the ethical tone of a company, not only by its own actions, but also in appointing and overseeing key executives and consequently the management in general. High ethical standards are in the long term interests of the company as a means to make it credible and trustworthy, not only in day-to-day operations but also with respect to longer term commitments. To make the objectives of the board clear and operational, many companies have found it useful to develop company codes of conduct based on, inter alia, professional standards and sometimes broader codes of behaviour. The latter might include a voluntary commitment by the company (including its subsidiaries) to comply with the OECD Guidelines for Multinational Enterprises which reflect all four principles contained in the ILO Declaration on Fundamental Labour Rights.<br>
										Company-wide codes serve as a standard for conduct by both the board and key executives, setting the framework for the exercise of judgement in dealing with varying and often conflicting constituencies. At a minimum, the ethical code should set clear limits on the pursuit of private interests, including dealings in the shares of the company. An overall framework for ethical conduct goes beyond compliance with the law, which should always be a fundamental requirement.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CODE_OF_ETHICS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.2</td>
				      					<td>Does the company disclose that all directors/commissioners, senior management and employees are required to comply with the code?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CODE_OF_ETHICS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.3</td>
				      					<td>Does the company disclose how it implements and monitors compliance with the code of ethics or conduct?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CODE_OF_ETHICS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Board Structure & Composition</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.4</td>
				      					<td>Do independent directors/commissioners make up at least 50% of the board of directors/commissioners?</td>
				      					<td><b>OECD PRINCIPLE VI (E) </b><br>
										In order to exercise its duties of monitoring managerial performance, preventing conflicts of interest and balancing competing demands on the corporation, it is essential that the board is able to exercise objective judgement. In the first instance this will mean independence and objectivity with respect to management with important implications for the composition and structure of the board. Board independence in these circumstances usually requires that a sufficient number of board members will need to be independent of management. The ASX Code recommends at least a majority of independent directors, while the UK Code recommends at least half of the board, excluding the Chairman, be independent directors. The minimum of three independent directors is to ensure that companies with small boards have enough independent directors (note that stock exchange rules often require at least two independent directors).</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_BY_LAWS_SECTION-2.jpg" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.5</td>
				      					<td>Are the independent directors/commissioners independent of management and major/ substantial shareholders?</td>
				      					<td rowspan="2"><b>OECD PRINCIPLE VI (E) </b><br>
										In order to exercise its duties of monitoring managerial performance, preventing conflicts of interest and balancing competing demands on the corporation, it is essential that the board is able to exercise objective judgement. In the first instance this will mean independence and objectivity with respect to management with important implications for the composition and structure of the board. Board independence in these circumstances usually requires that a sufficient number of board members will need to be independent of management.<br><br>

										The variety of board structures, ownership patterns and practices in different countries will thus require different approaches to the issue of board objectivity. In many instances objectivity requires that a sufficient number of board members not be employed by the company or its affiliates and not be closely related to the company or its management through significant economic, family or other ties. This does not prevent shareholders from being board members. In others, independence from controlling shareholders or another controlling body will need to be emphasised, in particular if the exante rights of minority shareholders are weak and opportunities to obtain redress are limited. This has led to both codes, and the law in some jurisdictions, to call for some board members to be independent of dominant shareholders, independence extending to not being their representative or having close business ties with them.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CORPORATE_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.6</td>
				      					<td>Does the company have a term limit of nine years or less for its independent directors/commissioners?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_BY_LAWS_SECTION-2.jpg" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.7</td>
				      					<td>Has the company set a limit of five board seats that an individual independent/non-executive director/commissioner may hold simultaneously?</td>
				      					<td>UK CODE (JUNE 2010): Non-executive directors should be appointed for specified terms subject to re-election and to statutory provisions relating to the removal of a director. Any term beyond six years for a non-executive director should be subject to particularly rigorous review, and should take into account the need for progressive refreshing of the board and to succession for appointments to the board and to senior management, so as to maintain an appropriate balance of skills and experience within the company and on the board.</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_BOARD_OF_TRUSTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.8</td>
				      					<td>Does the company have any independent directors/commissioners who serve on a total of more than five boards of publicly-listed companies?</td>
				      					<td rowspan="2"><b>OECD PRINCIPLE VI (E)</b><br> 
										(3) Board members should be able to commit themselves effectively to their responsibilities.
										Service on too many boards can interfere with the performance of board members. Companies may wish to consider whether multiple board memberships by the same person are compatible with effective board performance and disclose the information to shareholders.</td>
										<td>N</td>
										<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.9</td>
				      					<td>Does the company have any executive directors who serve on more than two boards of listed companies outside of the group?</td>
				      					<td>N</td>
				      					<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.10</td>
				      					<td>Does the company have a Nominating Committee (NC)?</td>
				      					<td rowspan="2"><b>OECD PRINCIPLE II (C)</b><br>
										(3) Effective shareholder participation in key corporate governance decisions, such as the nomination and election of board members, should be facilitated. Shareholders should be able to make their views known on the remuneration policy for board members and key executives. The equity component of compensation schemes for board members and employees should be subject to shareholder approval.<br><br>

										With respect to nomination of candidates, boards in many companies have established Nominating Committees to ensure proper compliance with established nomination procedures and to facilitate and coordinate the search for a balanced and qualified board. It is increasingly regarded as good practice in many countries for independent board members to have a key role on this committee. To further improve the selection process, the Principles also call for full disclosure of the experience and background of candidates for the board and the nomination process, which will allow an informed assessment of the abilities and suitability of each candidate.<br><br>

										<b>OECD PRINCIPLE VI (E)</b><br>
										(1) Boards should consider assigning a sufficient number of non-executive board members capable of exercising independent judgement to tasks where there is a potential for conflict of interest. Examples of such key responsibilities are ensuring the integrity of financial and non-financial reporting, the review of related party transactions, nomination of board members and key executives, and board remuneration.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CGM_BOARD_COMMITTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">Minutes 2015</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.11</td>
				      					<td>Does the Nominating Committee comprise of a majority of independent directors/commissioners?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.12</td>
				      					<td>Is the chairman of the Nominating Committee an independent director/commissioner?</td>
				      					<td>This item is in most codes of corporate governance.</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CGM_BOARD_COMMITTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">Minutes 2015</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.13</td>
				      					<td>Does the company disclose the terms of reference/ governance structure/charter of the Nominating Committee?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI (E) </b><br>
										(2) When committees of the board are established, their mandate, composition and working procedures should be well defined and disclosed by the board.<br><br>

										While the use of committees may improve the work of the board they may also raise questions about the collective responsibility of the board and of individual board members. In order to evaluate the merits of board committees it is therefore important that the market receives a full and clear picture of their purpose, duties and composition. Such information is particularly important in an increasing number of jurisdictions where boards are establishing independent Audit Committees with powers to oversee the relationship with the external auditor and to act in many cases independently. Other such committees include those dealing with nomination and compensation. The accountability of the rest of the board and the board as a whole should be clear. Disclosure should not extend to committees set up to deal with, for example, confidential commercial transactions<br><br>

										Given the responsibilities of the NC spelt out in codes of corporate governance, the NC is unlikely to be fulfilling these responsibilities effectively if it is only meeting once a year. Globally, the NC of large companies would meet several times a year.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_NOMINATION_COMMITTEE.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.14</td>
				      					<td>Did the Nominating Committee meet at least twice during the year?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.15</td>
				      					<td>Is the attendance of members at Nominating Committee meetings disclosed?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>	Remuneration Committee/ Compensation Committee</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.16</td>
				      					<td>Does the company have a Remuneration Committee?</td>
				      					<td rowspan="3">	
										<b>OECD PRINCIPLE VI (D) </b><br>
										(4) Aligning key executive and board remuneration with the longer term interests of the company and its shareholders.<br><br>

										It is considered good practice in an increasing number of countries that remuneration policy and employment contracts for board members and key executives be handled by a special committee of the board comprising either wholly or a majority of independent directors. There are also calls for a Remuneration Committee that excludes executives that serve on each others’ Remuneration Committees, which could lead to conflicts of interest.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_NOMINATION_COMMITTEE.pdf" target="_blank" class="center" style="color:#10bbb3;">Minutes 2015</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.17</td>
				      					<td>Does the Remuneration Committee comprise of a majority of independent directors/commissioners?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.18</td>
				      					<td>Is the chairman of the Remuneration Committee an independent director/commissioner?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.19</td>
				      					<td>Does the company disclose the terms of reference/ governance structure/ charter of the Remuneration Committee?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI (E) </b><br>
										(2) When committees of the board are established, their mandate, composition and working procedures should be well defined and disclosed by the board.<br><br>

										While the use of committees may improve the work of the board they may also raise questions about the collective responsibility of the board and of individual board members. In order to evaluate the merits of board committees it is therefore important that the market receives a full and clear picture of their purpose, duties and composition. Such information is particularly important in an increasing number of jurisdictions where boards are establishing independent Audit Committees with powers to oversee the relationship with the external auditor and to act in many cases independently. Other such committees include those dealing with nomination and compensation. The accountability of the rest of the board and the board as a whole should be clear. Disclosure should not extend to committees set up to deal with, for example, confidential commercial transactions
										<br><br>
										Given the responsibilities of the Remuneration Committee (RC) which are spelt out in codes of corporate governance, the RC is unlikely to be fulfilling these responsibilities effectively if it only meets once a year. Globally, the RC of large companies would meet several times a year.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_RENUMERATION_COMMITTEE.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.20</td>
				      					<td>Did the Remuneration Committee meet at least twice during the year?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.21</td>
				      					<td>Is the attendance of members at Remuneration Committee meetings disclosed?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="2">Audit Committee</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>E.2.22</td>
				      					<td>Does the company have an Audit Committee?</td>
				      					<td><b>OECD PRINCIPLE VI (E) </b><br>
										(1) Boards should consider assigning a sufficient number of non-executive board members capable of exercising independent judgement to tasks where there is a potential for conflict of interest. Examples of such key responsibilities are ensuring the integrity of financial and non-financial reporting, the review of related party transactions, nomination of board members and key executives, and board remuneration.</td>
										<td>Y</td>
										<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.23</td>
				      					<td>Does the Audit Committee comprise entirely of non-executive directors/commissioners with a majority of independent directors/commissioners?</td>
				      					<td>OECD PRINCIPLE VI (E) 
										(2) When committees of the board are established, their mandate, composition and working procedures should be well defined and disclosed by the board.

										While the use of committees may improve the work of the board they may also raise questions about the collective responsibility of the board and of individual board members. In order to evaluate the merits of board committees it is therefore important that the market receives a full and clear picture of their purpose, duties and composition. Such information is particularly important in the increasing number of jurisdictions where boards are establishing independent Audit Committees with powers to oversee the relationship with the external auditor and to act in many cases independently. Other such committees include those dealing with nomination and compensation. The accountability of the rest of the board and the board as a whole should be clear. Disclosure should not extend to committees set up to deal with, for example, confidential commercial transactions.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.24</td>
				      					<td>Is the chairman of the Audit Committee an independent director/commissioner?</td>
				      					<td>&nbsp;</td>
				      					<td>Y</td>
				      					<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.25</td>
				      					<td>Does the company disclose the terms of reference/governance structure/charter of the Audit Committee?</td>
				      					<td>&nbsp;</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CGM_BOARD_COMMITTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.26</td>
				      					<td>Does the Annual Report disclose the profile or qualifications of the Audit Committee members?</td>
				      					<td>Most codes specify the need for accounting/finance expertise or experience.</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.27</td>
				      					<td>Does at least one of the independent directors/commissioners of the committee have accounting expertise (accounting qualification or experience)?</td>
				      					<td rowspan="3"><b>UK CODE (JUNE 2010) </b><br>
										C.3.1. The board should satisfy itself that at least one member of the Audit Committee has recent and relevant financial experience.<br><br>

										As many of the key responsibilities of the Audit Committee are accounting-related, such as oversight of financial reporting and audits, it is important to have someone specifically with accounting expertise, not just general financial expertise.</td>
										<td>N</td>
										<td>Members of the committee are primarily mothers who are active members of KGI</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.28</td>
				      					<td>Did the Audit Committee meet at least four times during the year?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.29</td>
				      					<td>Is the attendance of members at Audit Committee meetings disclosed?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.30</td>
				      					<td>Does the Audit Committee have primary responsibility for recommendation on the appointment, and removal of the external auditor?</td>
				      					<td><b>UK CODE (JUNE 2010) </b>
										C.3.6 The Audit Committee should have primary responsibility for making a recommendation on the appointment, reappointment and removal of the external auditor. If the board does not accept the Audit Committee’s recommendation, it should include in the Annual Report, and in any papers recommending appointment or re-appointment, a statement from the Audit Committee explaining the recommendation and should set out reasons why the board has taken a different position.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_CORPORATE_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.3</th>
				      					<th colspan="2">Board Processes</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Board meetings and attendance</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.1</td>
				      					<td>Are the board of directors meeting scheduled before the start of financial year?</td>
				      					<td>Scheduling board meetings before or at the beginning of the year would allow directors to plan ahead to attend such meetings, thereby helping to maximise participation, especially as non-executive directors often have other commitments. Additional ad hoc meetings can always be scheduled if and when necessary. It is common practice for boards in developed markets to schedule meetings in this way.</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_SUMMARY_MEETINGS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">Schedule of Meetings</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.2</td>
				      					<td>Does the board of directors/commissioners meet at least six times during the year?</td>
				      					<td><b>WORLDBANK PRINCIPLE 6 </b><br>
										(VI.I.24) Does the board meet at least six times per year?<br><br>

										<b>INDO SCORECARD</b><br>
										E.10. How many meetings were held in the past year?<br>
										If the board met more than six times, the firm earns a 'Y' score. If four to six meetings, the firm was scored as ’fair’, while less than four times was scored as ‘N’</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_SUMMARY_MEETINGS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">Attendance of BOT</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.3</td>
				      					<td>Has each of the directors/commissioners attended at least 75% of all the board meetings held during the year?</td>
				      					<td><b>OECD PRINCIPLE VI (E) </b><br>
										(3) Board members should be able to commit themselves effectively to their responsibilities.<br><br>

										Specific limitations may be less important than ensuring that members of the board enjoy legitimacy and confidence in the eyes of shareholders. Achieving legitimacy would also be facilitated by the publication of attendance records for individual board members (e.g. whether they have missed a significant number of meetings) and any other work undertaken on behalf of the board and the associated remuneration.</td>
										<td>Y</td>
										<td>Attendance of BOT</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.4</td>
				      					<td>Does the company require a minimum quorum of at least 2/3 for board decisions?</td>
				      					<td><b>WORLDBANK PRINCIPLE 6</b><br>
										(VI.I.28) Is there a minimum quorum of at least 2/3 for board decisions to be valid?</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_ART_IV_SEC_4.pdf" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.5</td>
				      					<td>Did the non-executive directors/commissioners of the company meet separately at least once during the year without any executives present?</td>
				      					<td><b>WORLDBANK PRINCIPLE 6</b><br>
											(VI.E.1.6) Does the corporate governance framework requires or encourages boards to conduct executive sessions?
										</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Board Appointments and Re-Election</b></td>
				      					<td colspan="2">&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.9</td>
				      					<td>Does the company disclose the criteria used in selecting new directors/commissioners?</td>
				      					<td><b>OECD PRINCIPLE II (C) (3)</b><br>
										To further improve the selection process, the Principles also call for full disclosure of the experience and background of candidates for the board and the nomination process, which will allow an informed assessment of the abilities and suitability of each candidate.<br><br>

										<b>OECD Principle VI (D) </b><br>
										(5) Ensuring a formal and transparent board nomination and election process.<br>
										These Principles promote an active role for shareholders in the nomination and election of board members. The board has an essential role to play in ensuring that this and other aspects of the nominations and election process are respected. First, while actual procedures for nomination may differ among countries, the board or a nomination committee has a special responsibility to make sure that established procedures are transparent and respected. Second, the board has a key role in identifying potential members for the board with the appropriate knowledge, competencies and expertise to complement the existing skills of the board and thereby improve its value-adding potential for the company. In several countries there are calls for an open search process extending to a broad range of people.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_QUALIFICATION_TRUSTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.10</td>
				      					<td>Does the company disclose the process followed in appointing new directors/commissioners?</td>
				      					<td>&nbsp;</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_BOARD_APPOINTMENT.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.11</td>
				      					<td>Are all the directors/commissioners subject to re-election at least once every three years?</td>
				      					<td><b>ICGN: 2.9.1</b><br> 
										Election of directors: Directors should be conscious of their accountability to shareholders, and many jurisdictions have mechanisms to ensure that this is in place on an ongoing basis. There are some markets however where such accountability is less apparent and in these each director should stand for election on an annual basis. Elsewhere directors should stand for election at least once every three years, though they should face evaluation more frequently.<br><br>

										<b>WORLDBANK PRINCIPLE 6 </b><br>
										(VI.I.18) Can the re-election of board members be staggered over time? (Staggered boards are those where only a part of the board is re-elected at each election, e.g. only 1/3 of directors are re-elected every year.)</td>
										<td>Y</td>
										<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Remuneration Matters</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.12</td>
				      					<td>Does the company disclose its remuneration (fees, allowances, benefit-in-kind and other emoluments) policy/practices (i.e. the use of short term and long term incentives and performance measures) for its executive directors and CEO?</td>
				      					<td><b>OECD PRINCIPLE VI (D) </b><br>
										(4) Aligning key executive and board remuneration with the longer term interests of the company and its shareholders.<br><br>

										In an increasing number of countries it is regarded as good practice for boards to develop and disclose a remuneration policy statement covering board members and key executives. Such policy statements specify the relationship between remuneration and performance, and include measurable standards that emphasise the longer run interests of the company over short term considerations. Policy statements generally tend to set conditions for payments to board members for extra-board activities, such as consulting. They also often specify terms to be observed by board members and key executives about holding and trading the stock of the company, and the procedures to be followed in granting and re-pricing of options. In some countries, policy also covers the payments to be made when terminating the contract of an executive.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_RENUMERATION_MEMBERS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.13</td>
				      					<td>Is there disclosure of the fee structure for non-executive directors/commissioners?</td>
				      					<td><b>UK CODE (JUNE 2010)</b><br>
										D.1.3 Levels of remuneration for non-executive directors should reflect the time commitment and responsibilities of the role.<br><br>

										Disclosure of fee structure for non-executive directors allows shareholders to assess if these directors are remunerated in an appropriate manner, for example, whether they are paid for taking on additional responsibilities and contributions, such as chairing committees.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/By Laws Art IV Section 7.jpg" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.14</td>
				      					<td>Do the shareholders or the Board of Directors approve the remuneration of the executive directors and/or the senior executives?</td>
				      					<td><b>OECD PRINCIPLE VI. (D.4)</b><br>
										The Board should fulfil certain key functions including aligning key executive and board remuneration with the longer term interests of the company and its shareholders.<br><br>

										<b>ICGN 2.3 (D) and (E) </b><br>
										D. Selecting, remunerating, monitoring and where necessary replacing key executives and overseeing succession planning. 
										E. Aligning key executives and Board remuneration with the longer term interest of the company and its shareholders.</td>
										<td>Y</td>
										<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.15</td>
				      					<td>Do independent non-executive directors/commissioners receive options, performance shares or bonuses?</td>
				      					<td><b>UK CODE (JUNE 2010)</b><br>
										(D.1.3) Levels of remuneration for non-executive directors should reflect the time commitment and responsibilities of the role. Remuneration for non-executive directors should not include share options or other performance-related elements. If, by exception, options are granted, shareholder approval should be sought in advance and any shares acquired by exercise of the options should be held until at least one year after the non-executive director leaves the board. Holding of share options could be relevant to the determination of a non-executive director’s independence (as set out in provision B.1.1).<br>

										<b>ASX CODE</b> 
										Box 8.2: Guidelines for non-executive director remuneration
										Companies may find it useful to consider the following when considering non-executive director
										remuneration:<br>
										1. Non-executive directors should normally be remunerated by way of fees, in the form of cash, noncash benefits, superannuation contributions or salary sacrifice into equity; they should not normally participate in schemes designed for the remuneration of executives.<br>
										2. Non-executive directors should not receive options or bonus payments.<br>
										3. Non-executive directors should not be provided with retirement benefits other than superannuation.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Internal Audit</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.16</td>
				      					<td>Does the company have a separate internal audit function?</td>
				      					<td><b>OECD PRINCIPLE VI (D) </b><br>
										(7) Ensuring the integrity of the corporation’s accounting and financial reporting systems, including the independent audit, and that appropriate systems of control are in place, in particular, systems for risk management, financial and operational control, and compliance with the law and relevant standards.<br><br>

										Ensuring the integrity of the essential reporting and monitoring systems will require the board to set and enforce clear lines of responsibility and accountability throughout the organisation. The board will also need to ensure that there is appropriate oversight by senior management. One way of doing this is through an internal audit system directly reporting to the board.</td>
										<td>Y</td>
										<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.17</td>
				      					<td>Is the head of internal audit identified or, ifoutsourced, is the name of the external firm dislosed?</td>
				      					<td>Companies often disclose that they have an internal audit but, in practice, it is not uncommon for it to exist more in form than in substance. For example, the in-house internal audit may be assigned to someone with other operational responsibilities. As internal audit is unregulated, unlike external audit, there are firms providing outsourced internal audit services which are not properly qualified to do so. Making the identity of the head of internal audit or the external service provider public would provide some level of safeguard that the internal audit is substantive.</td>
				      					<td>Y</td>
				      					<td>Not in place yet, instead the association is utilizing the internal audit of the founding organization - KAZAMA Grameen Inc.</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.18</td>
				      					<td>Does the appointment and removal of the internal auditor require the approval of the Audit Committee?</td>
				      					<td><b>OECD PRINCIPLE VI (D) (7)</b> <br><br>

										In some jurisdictions it is considered good practice for the internal auditors to report to an independent Audit Committee of the board or an equivalent body which is also responsible for managing the relationship with the external auditor, thereby allowing a coordinated response by the board.<br><br>

										<b>WORLDBANK PRINCIPLE 6</b> <br>
										(VI.D.7.9) Does the internal auditors have direct and unfettered access to the board of directors and its independent Audit Committee?<br><br>

										<b>ASX Principles on CG</b><br> 
										“…companies should consider a second reporting line from the
										internal audit function to the board or relevant committee.” Under the ASX Principles it is also recommended that the Audit Committee have access to internal audit without the presence of management, and that “the audit committee should recommend to the board the appointment and dismissal of a chief internal audit executive."</td>
										<td>Y</td>
										<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>&nbsp;</td>
				      					<td colspan="2"><b>Risk Oversight</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.19</td>
				      					<td>Does the company disclose the internal control procedures/risk management systems it has in place?</td>
				      					<td><b>OECD PRINCIPLE 6 (VI) (D) (7)</b><br><br>

											Ensuring the integrity of the corporation’s accounting and financial reporting systems, including the independent audit, and that appropriate systems of control are in place, in particular, systems for risk management, financial and operational control, and compliance with the law and relevant standards.</td>
											<td>Y</td> 
											<td>
						      				<a href="PDF/ASEAN/D/KGI-MBA_OPERATIONS_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">Operations Manual</a>
						      				</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.20</td>
				      					<td>Does the Annual Report disclose that the board of directors/commissioners has conducted a review of the company's material controls (including operational, financial and compliance controls) and risk management systems?</td>
				      					<td><b>UK CODE (JUNE 2010)</b><br>
										C.2.1 The board should, at least annually, conduct a review of the effectiveness of the company’s risk management and internal control systems and should report to shareholders that they have done so. The review should cover all material controls, including financial, operational and compliance controls.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/D/SMR_FS.pdf" target="_blank" class="center" style="color:#10bbb3;">SMR_FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.21</td>
				      					<td>Does the company disclose how key risks are managed?</td>
				      					<td><b>OECD PRINCIPLE V (A) </b><br>
										(6) Foreseeable risk factors. <br><br>

										Disclosure of risk is most effective when it is tailored to the particular industry in question. Disclosure about the system for monitoring and managing risk is increasingly regarded as good practice.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_AUDITED_FS_NOTE_20.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.22</td>
				      					<td>Does the Annual Report contain a statement from the board of directors/commissioners or Audit Committee commenting on the adequacy of the company's internal controls/risk management systems?</td>
				      					<td><b>OECD PRINCIPLE 6 (VI) (D) </b><br>
										(7) Ensuring the integrity of the corporation’s accounting and financial reporting systems, including the independent audit, and that appropriate systems of control are in place, in particular, systems for risk management, financial and operational control, and compliance with the law and relevant standards. <br> <br>

										In some jurisdictions it is considered good practice for the internal auditors to report to an independent audit committee of the board or an equivalent body which is also responsible for managing the relationship with the external auditor, thereby allowing a coordinated response by the board. It should also be regarded as good practice for this committee, or equivalent body, to review and report to the board the most critical accounting policies which are the basis for financial reports. However, the board should retain final responsibility for ensuring the integrity of the reporting systems. Some countries have provided for the chair of the board to report on the internal control process.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_AUDITED_FS_NOTE_20.pdf" target="_blank" class="center" style="color:#10bbb3;">Audited FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.4</th>
				      					<th colspan="2"><b>People on the board</b></th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>

				      			<tbody>
				      				<tr>
				      					<td colspan="5"><b>Board Chairman</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.4.1</td>
				      					<td>Do different persons assume the roles of chairman and CEO?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI </b><br>
										(E) The board should be able to exercise objective independent judgement on corporate affairs. <br><br>

										In a number of countries with single tier board systems, the objectivity of the board and its independence from management may be strengthened by the separation of the role of chief executive and chairman, or, if these roles are combined, by designating a lead non-executive director to convene or chair sessions of the outside directors. Separation of the two posts may be regarded as good practice, as it can help to achieve an appropriate balance of power, increase accountability and improve the board’s capacity for decision making independent of management. <br><br>

										<b>UK Code (June 2010)</b><br>
										A.3.1 The chairman should on appointment meet the independence criteria set out in B.1.1 below. A chief executive should not go on to be chairman of the same company. If, exceptionally, a board decides that a chief executive should become chairman, the board should consult major shareholders in advance and should set out its reasons to shareholders at the time of the appointment and in the next Annual Report. <br><br>

										<b>ASX Code</b><br>
										Recommendation 3.2 <br>
										The chief executive officer should not go on to become chair of the same company. A former chief executive officer will not qualify as an “independent” director unless there has been a period of at least three years between ceasing employment with the company and serving on the board.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_RBY_LAWS_ARTICLE_XI_SEC_1.pdf" target="_blank" class="center" style="color:#10bbb3;">By Laws <br></br>In an MBA the President is the Chairman and also called as the CEO, and the person who handles the operation is called the General Manager</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.4.2</td>
				      					<td>Is the chairman an independent director/commissioner?</td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_RBY_LAWS_ARTICLE_XI_SEC_1.pdf" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.4.3</td>
				      					<td>Has the chairman been the company CEO in the last three years?</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.4.4</td>
				      					<td>Are the role and responsibilities of the chairman disclosed?</td>
				      					<td><b>ICGN: 2.5 Role of the Chair</b> <br>
										The chair has the crucial function of setting the right context in terms of board agenda, the provision of information to directors, and open boardroom discussions, to enable the directors to generate the effective board debate and discussion and to provide the constructive challenge which the company needs. The chair should work to create and maintain the culture of openness and constructive challenge which allows a diversity of views to be expressed...The chair should be available to shareholders for dialogue on key matters of the company’s governance and where shareholders have particular concerns.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_OFFICERS_BOARD.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"><b>Skills and Competencies</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.4.5</td>
				      					<td>Does at least one non-executive director/commissioner have prior working experience in the major sector that the company is operating in?</td>
				      					<td><b>ICGN: 2.4.3 Independence</b> <br>
										Alongside appropriate skill, competence and experience, and the appropriate context to encourage effective behaviours, one of the principal features of a well-governed corporation is the exercise by its board of directors of independent judgement, meaning judgement in the best interests of the corporation, free of any external influence on any individual director, or the board as a whole. In order to provide this independent judgement, and to generate confidence that independent judgement is being applied, a board should include a strong presence of independent non-executive directors with appropriate competencies including key industry sector knowledge and experience. There should be at least a majority of independent directors on each board.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.4.6</td>
				      					<td>Does the company disclose a board of directors/commissioners diversity policy?</td>
				      					<td><b>ASX Code</b> <br>
										Recommendation 3.2 <br>
										Companies should establish a policy concerning diversity and disclose the policy or a summary of that policy. The policy should include requirements for the board to establish measurable objectives for achieving gender diversity and for the board to assess annually both the objectives and progress in achieving them. <br><br>

										Regulations and codes of corporate governance in many developed markets now incorporate board diversity as a consideration in board composition</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_MEMO_2015-1.pdf" target="_blank" class="center" style="color:#10bbb3;"><b>MEMO 2015-001</b> <br></br>KGI MBA assures that sets of BOT do not come from one area only to ensure that there's an equal representation of the membership</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"></td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.5</th>
				      					<th colspan="2">Board Performance</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td colspan="5"><b>Director's Development</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.5.1</td>
				      					<td>Does the company have orientation programmes for new directors/commissioners?</td>
				      					<td>This item is in most codes of corporate governance.</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_ORIENTATION_NEW_TRUSTEES.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.2</td>
				      					<td>Does the company have a policy that encourages directors/commissioners to attend on-going or continuous professional education programmes?</td>
				      					<td><b>OECD PRINCIPLE VI (E) </b><br>
										(3) Board members should be able to commit themselves effectively to their responsibilities.
										<br><br>
										In order to improve board practices and the performance of its members, an increasing number of jurisdictions are now encouraging companies to engage in board training and voluntary self-evaluation that meets the needs of the individual company. This might include that board members acquire appropriate skills upon appointment, and thereafter remain abreast of relevant new laws, regulations, and changing commercial risks through in-house training and external courses.</td>
										<td>Y</td>
										<td>CG Manual <br><br> Board Training</td>
				      				</tr>
				      				<tr>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_DEFINITION_STAKEHOLDERS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual <br></br> Board Training</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.3</td>
				      					<td>Does the company disclose how the board of directors/commissioners plans for the succession of the CEO/Managing Director/President and key management?</td>
				      					<td><b>OECD PRINCIPLE VI (D) </b><br>
										(3) Selecting, compensating, monitoring and, when necessary, replacing key executives and overseeing succession planning. <br><br>

										In two tier board systems the supervisory board is also responsible for appointing the management board which will normally comprise most of the key executives.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_RBY_LAWS_ARTICLE_X_SEC_1.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.4</td>
				      					<td>Does the board of directors/commissioners conduct an annual performance assessment of the CEO/Managing Director/President?</td>
				      					<td><b>OECD PRINCIPLE VI (D) </b><br>
										(2). Monitoring the effectiveness of the company’s governance practices and making changes as needed. <br><br>

										Monitoring of governance by the board also includes continuous review of the internal structure of the company to ensure that there are clear lines of accountability for management throughout the organisation. In addition to requiring the monitoring and disclosure of corporate governance practices on a regular basis, a number of countries have moved to recommend or indeed mandate self-assessment by boards of their performance as well as performance reviews of individual board members and the CEO/Chairman.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"><b>Board Appraisal</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.5.5</td>
				      					<td>Is an annual performance assessment conducted of the board of directors/commissioners?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI (D) (2)</b></td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.6</td>
				      					<td>Does the company disclose the process followed in conducting the board assessment?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.7</td>
				      					<td>Does the company disclose the criteria used in the board assessment?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"><b>Director Appraisal</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.5.8</td>
				      					<td>Is an annual performance assessment conducted of individual director/commissioner?</td>
				      					<td rowspan="3"><b>OECD PRINCIPLE VI (D) (2)</b></td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.9</td>
				      					<td>Does the company disclose the process followed in conducting the director/commissioner assessment?</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>E.5.10</td>
				      					<td>Does the company disclose the criteria used in the director/commissioner assessment?</td>
				      					<td>Y</td>
				      					<td>CG Manual</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"><b>Committee Appraisal</b></td>
				      				</tr>
				      				<tr>
				      					<td>E.5.11</td>
				      					<td>Is an annual performance assessment conducted of the board of directors/commissioners committees?</td>
				      					<td><b>UK CODE (JUNE 2010)</b><br>
										B.6 Evaluation: The board should undertake a formal and rigorous annual evaluation of its own performance and that of its committees and individual directors.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/E/KGI-MBA_PERFORMANCE_EVALUATION.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      			</tbody>

				      		</table>

				      </div>
				    </li>

				     <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>BONUS</div>
				      <div class="collapsible-body">
				      		<table class="responsive-table">
				      			<thead>
				      				<tr>
				      					<th>A.</th>
				      					<th colspan="2">Rights of the Shareholders</th>
				      					<th>Y/N</th>
				      					<th>Reference/Source Documents</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>A.1</th>
				      					<th colspan="2">Right to participate effectively in and vote in general shareholders meeting and should be informed of the rules, including voting procedures, that govern general shareholders meeting.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>A.1.1(B)</td>
				      					<td>Does the company allow the use of secure electronic voting in absentia at the general meetings of shareholders?</td>
				      					<td><b>OECD Principle II (C)</b><br>
										(4) Shareholders should be able to vote in person or in absentia, and equal effect should be given to votes whether cast in person or in absentia.</td>
										<td>Y</td>
										<td>
						      				<a href="PDF/ASEAN/F/KGI-MBA_CGM_VOTING_RIGHTS.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>B.</th>
				      					<th colspan="2">Equitable treatment of shareholders</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>B.1</th>
				      					<th colspan="2">Notice of AGM</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>B.1.1(B)</td>
				      					<td>Does the company release its notice of AGM (with detailed agendas and explanatory circulars), as announced to the Exchange, at least 28 days before the date of the meeting?</td>
				      					<td><b>OECD Principle II (C)</b><br>
										(1) Shareholders should be furnished with sufficient and timely information concerning the date, location and agenda of general meetings, as well as full and timely information regarding the issues to be decided at the meeting. <br>
										(3) Effective shareholder participation in key corporate governance decisions, such as the nomination and election of board members, should be facilitated. <br><br>

										<b>OECD Principle III (A)</b> <br><br>

										<b>ICGN 8.3.2 Shareholder participation in governance</b> <br><br>
										Shareholders should have the right to participate in key corporate governance decisions, such as the right to nominate, appoint and remove directors on an individual basis and also the right to appoint external auditors. <br><br>

										<b>ICGN 8.4.1 Shareholder ownership rights</b><br>
										The exercise of ownership rights by all shareholders should be facilitated, including brgiving shareholders timely and adequate notice of all matters proposed for shareholder vote. <br><br>

										<b>CLSA-ACGA (2010) CG Watch 2010 - Appendix 2.</b> <br>
										(I) CG rules and practices <br>
										(25) Do company release their AGM notices (with detailed agendas and explanatory circulars) at least 28 days before the date of the meeting?</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>C.</th>
				      					<th colspan="2">Roles of Stakeholders</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>C.1</th>
				      					<th colspan="2">The rights of stakeholders that are established by law or through mutual agreements are to be respected</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>C.1.1(B)</td>
				      					<td>Does the company practice integrated report on its annual reports?</td>
				      					<td><b>International <IR> Framework - DRAFT ,IIRC Council Item 3b Meeting of 5 December 2013</b> <br><br>

										“Integrated Reporting <IR> promotes a more cohesive and efficient approach to corporate reporting and aims to improve the quality of information available to providers of financial capital to enable a more efficient and productive allocation of capital. The IIRC’s vision is a world in which integrated thinking is embedded within mainstream business practice in the public and private sectors, facilitated by <IR> as the corporate reporting norm.”</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>D.</th>
				      					<th colspan="2">Disclosure and Transparency</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>D.1</th>
				      					<th colspan="2">Quality of Annual Report</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.1.1(B)</td>
				      					<td>Are the audited annual financial report /statement released within 60 days from the financial year end?</td>
				      					<td><b>OECD Principle V (C) </b> <br>
										<b>OECD Principle V (E)</b> <br>
										<b>ICGN 7.2 Timely disclosure</b> <br>
										<b>ICGN 7.3 Affirmation of financial statements</b> <br>
										The board of directors and the corporate officers of the company should affirm at least annually the accuracy of the company's financial statements or financial accounts.</td>
										<td>N</td>
										<td>The Audited Financial Statements was released last April 13,2016</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.2(B)</td>
				      					<td>&nbsp;</td>
				      					<td>N</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.</th>
				      					<th colspan="2">Responsibilities of the Board</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>E.1</th>
				      					<th colspan="2">Board Competencies and Diversity</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>E.1.1(B)</td>
				      					<td>Does the company have at least one female independent director/commissioner?</td>
				      					<td><b>ICGN 2.4.1 Skills and experience </b> <br>
										The board should consist of directors with the requisite range of skills, competence, knowledge, experience and approach, as well as a diversity of perspectives, to set the context for appropriate board behaviours and to enable it to discharge its duties and responsibilities effectively.</td>
										<td>Y</td>
										<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td><b>E.2</b></td>
				      					<td colspan="2"><b>Nominating Committee</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.1(B)</td>
				      					<td>Does the Nominating Committee comprise entirely of independent directors/commissioners?</td>
				      					<td><b>ICGN 2.4.4 Composition of board committees</b> <br>
										The members of these key board committees should be solely non-executive directors, and in the case of the audit and remuneration committees, solely independent directors. All members of the nominations committee should be independent from management and at least a majority should be independent from dominant owners.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.2(B)</td>
				      					<td>Does the Nominating Committee undertake the process of identifying the quality of directors aligned with the company's strategic directions?</td>
				      					<td>&nbsp;</td>
				      					<td>Y</td>
				      					<td>
						      				<a href="PDF/ASEAN/F/KGI-MBA_NOMINATION_COMMITTEE.pdf" target="_blank" class="center" style="color:#10bbb3;">CG Manual</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td><b>E.3</b></td>
				      					<td colspan="2"><b>Board Appointments and Re-Election</b></td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>E.3.1(B)</td>
				      					<td>Does the company use professional search firms or other external sources of candidates (such as director databases set up by director or shareholder bodies) when searching for candidates to the board of directors/commissioners?</td>
				      					<td><b>WORLDBANK PRINCIPLE 6 </b> <br>
										(VI.I.21) Are boards known to hire professional search firms when proposing candidates to the board?</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.4</th>
				      					<th colspan="2">Board Structure & Composition</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>E.4.1(B)</td>
				      					<td>Do independent non-executive directors/commissioners make up more than 50% of the board of directors/commissioners?</td>
				      					<td>&nbsp;</td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/F/KGI-MBA_BY_LAWS_ARTICLE_V_SEC_2.pdf" target="_blank" class="center" style="color:#10bbb3;">By Laws</a>
						      			</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>E.5</th>
				      					<th colspan="2">Board Performance</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>E.5.1(B)</td>
				      					<td>Does the company have a separate level Risk Committee?</td>
				      					<td>International Financial Corporation’s Global Corporate Governance Forum Publication: When Do Companies Need a Board-level Risk Management Committee?(Volume 31, pp.11, March 2013) <br><br>

										Benefits of a Board Level Risk Committee: <br>
										1. elevate risk oversight to the highest level in the company; <br>
										2. strengthen the quality of risk management; <br>
										3. inculcate a risk culture and risk-management environment to mitigate and manage risks effectively across the organization; <br>
										4. establish a platform for continuous assessment of risks in light of the changing internal and external environments; <br>
										5. improve communication among the board, management, and other stakeholders about risk management; and <br>
										6. demonstrate to internal and external stakeholders the company’s commitment to risk management</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			
				      		</table>
				      </div>
				    </li>

				     <li>
				      <div class="collapsible-header"><i class="material-icons">content_copy</i>PENALTY</div>
				      <div class="collapsible-body">
				      		<table class="responsive-table">
				      			<thead>
					      			<tr>
					      				<th>A.</th>
					      				<th colspan="2">Rights of the Shareholders</th>
					      				<th>Y/N</th>
					      				<th>Reference/Source Documents</th>
					      			</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td><b>A.1</b></td>
				      					<td colspan="2">Basic Shareholder Rights</td>
				      					<td>&nbsp;</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<td>A.1.1(P)</td>
				      					<td>Did the company fail or neglect to offer equal treatment for share repurchases to all shareholders?</td>
				      					<td><b>OECD Principle II (A)</b></td>
				      					<td>N/A</td>
				      					<td>&nbsp;</td>
				      				</tr>
				      				<tr>
				      					<th>A.2</th>
				      					<th colspan="2">Shareholders, including institutional shareholders, should be allowed to consult with each other on issues concerning their basic shareholder rights as defined in the Principles, subject to exceptions to prevent abuse.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>A.2.1(P)</td>
				      					<td>Is there evidence of barriers that prevent shareholders from communicating or consulting with other shareholders?</td>
				      					<td><b>OECD Principle II (G)</b> <br>
										Shareholders, including institutional shareholders, should be allowed to consult with each other on issues concerning their basic shareholder rights as defined in the Principles, subject to exceptions to prevent abuse.</td>
										<td>N</td>
										<td>&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      					<th>A.3</th>
				      					<th colspan="2">Right to participate effectively in and vote in general shareholders meeting and should be informed of the rules, including voting procedures, that govern general shareholders meeting.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>A.3.1(P)</td>
				      					<td>Did the company include any additional and unannounced agenda item into the notice of AGM/EGM?</td>
				      					<td><b>OECD Principle II (C) 2</b></td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_MINUTES_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">AGM Minutes</a>
						      			</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>A.4</th>
				      					<th colspan="2">Capital structures and arrangements that enable certain shareholders to obtain a degree of control disproportionate to their equity ownership should be disclosed.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>&nbsp;</th>
				      					<th colspan="2">Did the company fail to disclose the existence of:</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>A.4.1(P)</td>
				      					<td>Shareholders agreement?</td>
				      					<td rowspan="3"><b>OECD Principle II (C) 2</b></td>
				      					<td>N</td>
				      					<td>KGI MBA is a non-stock, non-profit institution</td>
				      				</tr>
				      				<tr>
				      					<td>A.4.2(P)</td>
				      					<td>Voting cap?</td>
				      					<td>N</td>
				      					<td>Default</td>
				      				</tr>
				      				<tr>
				      					<td>A.4.3(P)</td>
				      					<td>Multiple Voting Rights</td>
				      					<td>N</td>
				      					<td>Default</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>A.5</th>
				      					<th colspan="2">Capital structures and arrangements that enable certain shareholders to obtain a degree of control disproportionate to their equity ownership should be disclosed.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>A.5.1(P)</td>
				      					<td>Is a pyramid ownership structure and/ or cross holding structure apparent?</td>
				      					<td>OECD Principle II (D): 
										Capital structures and arrangements that enable certain shareholders to obtain a degree of control disproportionate to their equity ownership should be disclosed.</td>
										<td>N/A</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5"></td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>B.</th>
				      					<th colspan="2">Equitable treatment of shareholders</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>B.1</th>
				      					<th colspan="2">Insider trading and abusive self-dealing should be prohibited.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			
				      				<tr>
				      					<td>B.1.1(P)</td>
				      					<td>Has there been any conviction of insider trading involving directors/commissioners, management and employees in the past three years?</td>
				      					<td><b>OECD Principle III: The Equitable Treatment of Shareholders</b> <br>
										(B) Insider trading and abusive dealing should be prohibited. <br><br>

										<b>ICGN 3.5 Employee share dealing</b><br>
										Companies should have clear rules regarding any trading by directors and employees in the company's own securities. Among other issues, these must seek to ensure individuals do not benefit from knowledge which is not generally available to the market. <br><br>

										<b>ICGN 8.5 Shareholder rights of action</b> <br>
										... Minority shareholders should be afforded protection and remedies against abusive or oppressive conduct.</td>
										<td>N</td>
										<td>There was no case filed nor complaint filed related to insider trading</td>
				      				</tr>
				      				<tr>
				      					<th>B.2</th>
				      					<th colspan="2">Protecting minority shareholders from abusive action</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>B.2.1(P)</td>
				      					<td>Has there been any cases of non compliance with the laws, rules and regulations pertaining to significant or material related party transactions in the past three years?</td>
				      					<td><b>OECD Principle III</b> <br>
										(B) Insider trading and abusive dealing should be prohibited <br><br>

										<b>ICGN 2.11.1 Related party transactions</b> <br><br>
										Companies should have a process for reviewing and monitoring any related party transaction. A committee of independent directors should review significant related party transactions to determine whether they are in the best interests of the company and if so to determine what terms are fair. <br> <br>

										<b>ICGN 2.11.2 Director conflicts of interest</b> <br>
										Companies should have a process for identifying and managing any conflicts of interest directors may have. If a director has an interest in a matter under consideration by the board, then the director should not participate in those discussions and the board should follow any further appropriate processes. Individual directors should be conscious of shareholder and public perceptions and seek to avoid situations where there might be an appearance of a conflict of interest. <br><br>

										<b>ICGN 8.5 Shareholder rights of action</b> <br>
										Shareholders should be afforded rights of action and remedies which are readily accessible in order to redress conduct of company which treats them inequitably. Minority shareholders should be afforded protection and remedies against abusive or oppressive conduct.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_AUDITED_FS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">AUDITED FS <br></br> No cases of non compliance stated in audited financial statement. This is also shown in the Independent Auditors Report to SEC and BIR stating the full compliance of the association</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>C.</th>
				      					<th colspan="2">Role of stakeholders</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>C.1</th>
				      					<th colspan="2">The rights of stakeholders that are established by law or through mutual agreements are to be respected.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>C.1.1(P)</td>
				      					<td>Have there been any violations of any laws pertaining to labour/employment/ consumer/insolvency/ commercial/competition or environmental issues?</td>
				      					<td><b>OECD Principle IV </b> <br>
										(A) The rights of stakeholders that are established by law or through mutual agreements are to be respected.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">IC VERIFICATION LETTER <br></br>The letters shows compliance of the required Risk Base Capital (RBC) and Solvency Ratio by the association as prescribed by government regulation.</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<th>C.2</th>
				      					<th colspan="2">Where stakeholders participate in the corporate governance process, they should have access to relevant, sufficient and reliable information on a timely and regular basis.</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>C.2.1(P)</td>
				      					<td>Has the company faced any sanctions by regulators for failure to make announcements within the requisite time period for material events?</td>
				      					<td><b>OECD Principle IV </b><br>
										(B) Where stakeholders participate in the corporate governance process, they should have access to relevant, sufficient and reliable information on a timely and regular basis.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">IC VERIFICATION LETTER <br></br>The letters shows compliance of the required Risk Base Capital (RBC) and Solvency Ratio by the association as prescribed by government regulation.</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>D.</th>
				      					<th colspan="2">Disclosure and Transparency</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>D.1</th>
				      					<th>Sanctions from regulator on financial reports</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>D.1.1(P)</td>
				      					<td>Did the company receive a "qualified opinion" in its external audit report?</td>
				      					<td rowspan="4"><b>OECD Principle V: Disclosure and Transparency</b><br>
										(B) Information should be prepared and disclosed in accordance with high quality standards of accounting and financial and non-financial disclosures. <br>
										(C) An annual audit should be conducted by an independent, competent and qualified, auditor in order to provide an external and objective assurance to the board and shareholders that the financial statements fairly represent the financial position and performance of the company in all material respects. <br>
										(D) External auditors should be accountable to the shareholders and owe a duty to the company to exercise due professional care in the conduct of the audit. <br><br>

										<b>ICGN 6.2 Annual audit</b><br>
										The annual audit carried out on behalf of shareholders is an essential part of the checks and balances required at a company. It should provide an independent and objective opinion that the financial statements fairly represent the financial position and performance of the company in all material respects, give a true and fair view of the affairs of the company and are in compliance with applicable laws and regulations. <br><br>

										<b>ICGN 7.3 Affirmation of financial statements</b> <br>
										The board of directors and the appropriate officers of the company should affirm at least annually the accuracy of the company's financial statements or financial accounts. <br><br>

										International Auditing Standard (ISA) No. 705 "Modifications to the Opinion in the Independent Auditor's Report" (2009).	<br>
										Paras. 7, 8 and 9 specify the three types of modifications to the auditor's opinion; that is, Qualified opinion, Adverse opinion, and Disclaimer opinion respectively.</td>
										<td>N</td>
										<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">AUDITED FS <br></br>The opinion of the external auditor on the 2015 audited financial report shows unqualified opinion.</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.2(P)</td>
				      					<td>Did the company receive an "adverse opinion" in its external audit report?</td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">AUDITED FS <br></br>The opinion of the external auditor on the 2015 audited financial report shows unqualified opinion.</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.3(P)</td>
				      					<td>Did the company receive a "disclaimer opinion" in its external audit report?</td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">AUDITED FS <br></br>The opinion of the external auditor on the 2015 audited financial report shows unqualified opinion.</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td>D.1.4(P)</td>
				      					<td>Has the company in the past year revised its financial statements for reasons other than changes in accounting policies?</td>
				      					<td>N</td>
				      					<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_VERIFICATION_LETTER.pdf" target="_blank" class="center" style="color:#10bbb3;">AUDITED FS</a>
						      			</td>
				      				</tr>
				      				<tr>
				      					<td colspan="5">&nbsp;</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>E.</th>
				      					<th colspan="2">Responsibilities of the Board</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<th>E.1</th>
				      					<th colspan="2">Compliance with listing rules, regulations and applicable laws</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      				<tr>
				      					<td>E.1.1(P)</td>
				      					<td>Is there any evidence that the company has not complied with any listing rules and regulations over the past year apart from disclosure rules?</td>
				      					<td><b>OECD Principle VI (D) </b> <br>
											(7) Ensuring the integrity of the corporation’s accounting and financial reporting systems, including the independent audit, and that appropriate systems of control are in place, in particular, systems for risk management, financial and operational control, and compliance with the law and relevant standards. <br><br>

											Companies are also well advised to set up internal programmes and procedures to promote compliance with applicable laws, regulations and standards, including statutes to criminalise bribery of foreign officials that are required to be enacted by the OECD Anti-bribery Convention and measures designed to control other forms of bribery and corruption. Moreover, compliance must also relate to other laws and regulations such as those covering securities, competition and work and safety conditions. Such compliance programmes will also underpin the company’s ethical code.</td>
											<td>N/A</td>
											<td>&nbsp;</td>
											
				      				</tr>
				      				<tr>
				      					<td>E.1.2(P)</td>
				      					<td>Have there been any instances where non-executive directors/commissioner have resigned and raised any issues of governance-related concerns?</td>
				      					<td><b>UK CODE (JUNE 2010) </b> <br>
										A.4.3 Where directors have concerns which cannot be resolved about the running of the company or a proposed action, they should ensure that their concerns are recorded in the board minutes. On resignation, a non-executive director should provide a written statement to the chairman, for circulation to the board, if they have any such concerns.</td>
										<td>N</td>
										<td>The Association have not received any resignation due to governance-related concerns</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>E.2</th>
				      					<th colspan="2">Board Appraisal</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>E.2.1(P)</td>
				      					<td>Does the Company have any independent directors/commissioners who have served for more than nine years or two terms (which ever is higher) in the same capacity?</td>
				      					<td><b>OECD Principle V </b><br>
											(C) An annual audit should be conducted by an independent, competent and qualified, auditor in order to provide an external and objective assurance to the board and shareholders that the financial statements fairly represent the financial position and performance of the company in all material respects. <br><br>

											Examples of other provisions to underpin auditor independence include, a total ban or severe limitation on the nature of non-audit work which can be undertaken by an auditor for their audit client, mandatory rotation of auditors (either partners or in some cases the audit partnership), a temporary ban on the employment of an ex-auditor by the audited company and prohibiting auditors or their dependents from having a financial stake or management role in the companies they audit.</td>
											<td>N</td>
											<td>Company Website</td>
				      				</tr>
				      				<tr>
				      					<td>E.2.2(P)</td>
				      					<td>Did the company fail to identify who are the independent director(S)/ commisioner(s)?</td>
				      					<td><b>ICGN 2.4 Composition and structure of the board <br>
											ICGN 2.4.1 Skills and experience <br>
											ICGN 2.4.3 Independence</b></td>
											<td>N</td>
											<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_LIST_OFFICERS_2015.pdf" target="_blank" class="center" style="color:#10bbb3;">LIST OF OFFICERS</a>
						      			</td>
				      				</tr>
				      			</tbody>
				      			<thead>
				      				<tr>
				      					<th>E.3</th>
				      					<th colspan="2">External Audit</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				tr
				      				<td>E.3.1(P)</td>
				      				<td>Is any of the directors or senior management a former employee or partner of the current external auditor (in the past 2 years)?</td>
				      				<td><b>OECD Principle V </b><br>
									(C) An annual audit should be conducted by an independent, competent and qualified, auditor in order to provide an external and objective assurance to the board and shareholders that the financial statements fairly represent the financial position and performance of the company in all material respects. <br><br>

									Examples of other provisions to underpin auditor independence include, a total ban or severe limitation on the nature of non-audit work which can be undertaken by an auditor for their audit client, mandatory rotation of auditors (either partners or in some cases the audit partnership), a temporary ban on the employment of an ex-auditor by the audited company and prohibiting auditors or their dependents from having a financial stake or management role in the companies they audit.</td>
									<td>N</td>
									<td>
						      				<a href="PDF/ASEAN/G/KGI-MBA_CORPORATE_MANUAL.pdf" target="_blank" class="center" style="color:#10bbb3;">CG MANUAL</a>
						      			</td>
				      			</tbody>

				      			<thead>
				      				<tr>
				      					<th>E.4</th>
				      					<th colspan="2">Board structure and composition</th>
				      					<th>&nbsp;</th>
				      					<th>&nbsp;</th>
				      				</tr>
				      			</thead>
				      			<tbody>
				      				<tr>
				      					<td>E.4.1(P)</td>
				      					<td>Is any of the directors a former CEO of the company in the past 2 years?</td>
				      					<td>&nbsp;</td>
				      					<td>N</td>
				      					<td>Company Website</td>
			      				</tr>
				      			</tbody>
				      			
				      		</table>
				      </div>
				    </li>


				 </ul>
        
	</div>	

</section>

<!--######################################-->
<div class="fixed-action-btn">
  <div class="section">
  <a class="waves-effect btn-floating btn-large cyan accent-3" href="#introduction"><i class="material-icons">arrow_upward</i></a>
  </div>
</div>




<!--######################################-->

