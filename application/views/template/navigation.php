    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="<?php echo base_url();?>index.php">
                       CI Project
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Audio <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Actions on Audios</li>
                    <li><a href="#">View Audios</a></li>
                    <li><a href="<?php echo base_url();?>index.php">Add Audios</a></li>
                    <li><a href="#">Update Audios</a></li>
                    <li><a href="#">Delete Audios</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#top">Services</a>
                </li>
                <li>
                    <a href="https://facebook.com/khansaifullahkhan">Contact</a>
                </li>
                <li>
                    <a href="https://twitter.com/JananOfficial" target="blank">Follow me</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->