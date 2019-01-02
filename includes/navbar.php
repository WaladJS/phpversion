<nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">
	<div class="container-fluid">

		<div class="pmd-navbar-right-icon pull-right navigation">
			<!-- Login / Sign Up here -->
            <?php include "login-register.php" ?>
		</div>
		
		<!-- Detecting sessions activity here. Then do the role! -->
		<?php if(!empty(@$_SESSION['user_id'])): ?>
			<div class="pmd-navbar-right-icon pull-right navigation">
				<!-- Notifications here -->
				<?php include "notification.php" ?>
			</div>
			<div class="navbar-header">
				<a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle">
				<i class="material-icons"></i><span class="fa fa-bars fa-2x"></span></a>
			</div>
		<?php else: ?>
			<!-- Your alternate code here -->
		<?php endif; ?>	
		
	</div>
</nav><!--End Nav bar -->