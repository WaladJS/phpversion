
<div class="dropdown notification icons pmd-dropdown">
	
		<a href="javascript:void(0)" title="User Account" class="dropdown-toggle pmd-ripple-effect"  data-toggle="dropdown" role="button" aria-expanded="true">
			<div class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap"><i class="fa fa-user fa-sm"></i></div>
		</a>
	
		<div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
			 
		<!-- Notifications list -->
		
			<ul class="list-group pmd-list-avatar pmd-card-list"> 
				<li class="list-group-item unread">
				
						
						<div class="media-body">
						 <!-- Navigation buttons -->
							<div class="collapse navbar-collapse" id="myNavbar">

								<?php if(!empty(@$_SESSION['user_id'])): ?>
									<div class="media-middle text-center">
										<span class="avatar-list-img60x60">
											<img alt="60x60" data-src="holder.js/40x40" class="img-responsive" src="<?=$THEMEDIR?>/images/profile-1.png" data-holder-rendered="true">
										</span>
									</div>
									<a class="btn btn-default btn-wide" href="logout.php"><span class="fa fa-sign-out"></span> Sign out</a>
									<a class="btn btn-default btn-wide" href="profile.php"><span class="fa fa-user"></span> Account</a>
								<?php else: ?>

    <!-- Login form -->
    <div class="loginForm pmd-card-body">
        <form  action="login.php" name="loginform" class="form-login" method="post">
			<div class="form-group pmd-textfield pmd-textfield-floating-label">
				<label for="inputError1" class="control-label pmd-input-group-label">Username</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="material-icons md-dark pmd-sm fa fa-user"></i></div>
					<input type="text" name="username" id="username" class="input form-control" autocomplete="off" required autofocus>
				</div>
			</div>
			<div class="form-group pmd-textfield pmd-textfield-floating-label">
				<label for="inputError1" class="control-label pmd-input-group-label">Password</label>
				<div class="input-group">
					<div class="input-group-addon"><i class="material-icons md-dark pmd-sm  fa fa-lock"></i></div>
					<input type="password" name="password" id="password" class="input form-control" autocomplete="off" required>
				</div>
			</div>
			
            <a href="forgot.php">Forgot your password?</a><br><br>
            
            <!-- If there is an error it will be shown. --> 
            <?php if(!empty($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-container" id="alert">
                    <strong><center><?php echo htmlentities($_SESSION['message']) ?></center></strong>
                    <?php unset($_SESSION['message']); ?>
                </div>
            <?php endif; ?>
            
            <input type="submit"  name="login" value="Sign In" class="btn btn-primary btn-lg btn-block submit" /> 
            
        </form>

    </div>  <!-- End Login Form-->
 
									<!--
										<a class="btn btn-default" href="login.php"><span class="fa fa-sign-in"></span> Login</a>
										<a class="btn btn-default" href="registration.php"><span class="fa fa-user"></span> Sign Up</a>
									-->
								<?php endif; ?>			

							</div> <!-- /Navigation buttons -->            
						</div>

				</li>
				  
			</ul><!-- End notifications list -->
		
		</div>
		
		
	</div> <!-- End notifications -->
	