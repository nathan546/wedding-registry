<div class="stickyFooterWrapper1">

		<div class="stickyFooterWrapper2">

        		<div class="header-menu">
        		
        			<div class="header-logo">{$partyName}</div>
        			
        			<ul>	
        			
        				{if $isuser}			
        				<li class="header-solobutton">
        					<a href="login.php?action=logout">
        						<div class="header-buttoninner">
        							Logout
        						</div>
        					</a>
        				</li>
        
        				<li class="header-solobutton">
        					<a href="profile.php">
        						<div class="header-buttoninner">
        							Update Profile
        						</div>
        					</a>
        				</li>
        				
        			     <li class="header-solobutton">
        					<a href="rsvp.php">
        						<div class="header-buttoninner">
        							RSVP
        						</div>
        					</a>
        				</li>
        				
        			     <li class="header-solobutton">
        					<a href="registry.php">
        						<div class="header-buttoninner">
        							Gift Registry
        						</div>
        					</a>
        				</li>
        				
        				<li class="header-solobutton">
        					<a href="proposal.php">
        						<div class="header-buttoninner">
        							Proposal
        						</div>
        					</a>
        				</li>
        				
        				<li class="header-solobutton">
        					<a href="info.php">
        						<div class="header-buttoninner">
        							Info
        						</div>
        					</a>
        				</li>	
        				
        				<li class="header-solobutton">
        					<a href="index.php">
        						<div class="header-buttoninner">
        							Home
        						</div>
        					</a>
        				</li>	
        								
        				{/if}
        				
                        {if $isadmin}
            				<li class="header-button">
            					<a>
            						<div style="border: 0px">
            							<div class="header-buttoninner">
            								Admin
            							</div>
            	
            							<ul>
            							<li><a href=""></a></li>
            								<a href="users.php"><li class="header-subbutton">Manage Users</li></a>
            								<a href="categories.php"><li class="header-subbutton">Manage Categories</li></a>
            								<a href="ranks.php"><li class="header-subbutton">Manage Ranks</li></a>
            								<a href="wedding_info.php"><li class="header-subbutton">Manage Wedding</li></a>
            								<a href="item.php?action=add"><li class="header-subbutton">Add registry item</li></a>
            							</ul>
            
            						</div>
            					</a>				
            				</li>
                        {/if}
        				
        				<li class="header-solobutton">
        					<div>
        					</div>
        				</li>
        				
        			</ul>
        		</div>

			<div class="body-div">
			
            	<div class="container" style="padding-top: 30px;">

