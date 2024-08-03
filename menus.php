<nav class="navbar navbar-inverse" style="background:#00796B;color:#f6f8f9;font-weight:bold;">
    <div class="container-fluid">
        <div class="navbar-header" style="display: flex; align-items: center;">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
                <img src="images/ocp.png" alt="Logo" style="height: 60px;width:90px; padding:5px;">
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="ticket"><a href="ticket.php" class="navbar-brand">Ticket</a></li>
                <?php if(isset($_SESSION["admin"])) { ?>
                    <li id="department"><a href="department.php">Department</a></li>
                    <li id="user"><a href="user.php">Users</a></li>                
                <?php } ?>                        
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="label label-pill label-danger count"></span> 
                        <img src="//gravatar.com/avatar/<?php echo md5($user['email']); ?>?s=100" width="20px">
                        &nbsp;<?php if(isset($_SESSION["userid"])) { echo $user['name']; } ?>
                    </a>
                    <ul class="dropdown-menu">                    
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
				<div class="navbar-header" style="display: flex; align-items: center;">
            <a class="navbar-brand" href="#" style="display: flex; align-items: center;">
                <img src="images/emi.jpg" alt="Logo1" style="height: 60px;width:90px; padding:5px;">
            </a>
        </div>
            </ul>
        </div>
		
    </div>
</nav>
