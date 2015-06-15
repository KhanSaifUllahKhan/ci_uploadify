<?php
require 'template/doc_header.php';
require 'template/header.php';
//require 'template/navigation.php';
?>

<style type="text/css" media="screen">
	h1 a {
		 text-decoration: none;
	font: 80px Helvetica, Arial, Sans-Serif; letter-spacing: -5px;  
	text-align: center;
	color: #999; text-shadow: 0px 3px 8px #2a2a2a;
 }
 	h1 a:hover {
 		color: #a0a0a0; text-shadow: 0px 4px 8px #2a2a2a;
 		text-decoration:none;
 	}

</style>

    <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse 
      </div>
    </nav>-->

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background: #474747">
      <div class="container">
        <h1><img src="<?php echo base_url();?>images/favicon.ico" alt="image not supported by brower" style='height: 70px' /> <a href="<?php echo base_url();?>">mp3.com</a></h1>
        
        <p style="width: 100%; margin: 0 auto; background: #222; padding: 20px; font-size: 22px; color: #555; text-shadow: 0px 2px 3px #171717; -webkit-box-shadow: 0px 2px 3px #555; -moz-box-shadow: 0px 2px 3px #555; -webkit-border-radius: 10px; -moz-border-radius: 10px;">This is a simple project that uploads audio(mp3 only) files and store it in a folder and store its details to database.<br />
			&nbsp;&nbsp; It then retrieve the audio from the the uploads folder by details stored in the database, and gives an option to listen or download the audio.</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
      <div class="row">
        <div class="col-md-6">
          <h2>Songs</h2>
          <table class="table table-responsive table-striped table-hover table-condensed">
          	<thead>
          		<tr>
          			<th>Dated</th>
          			<th>Title</th>
          			<th style="text-align: center">Action</th>
          		</tr>
          	</thead>
          	<tfoot>
          		<tr>
          			<th>Dated</th>
          			<th>Title</th>
          			<th style="text-align: center">Action</th>
          		</tr>
          	</tfoot>
          	<tbody>
          		<?php $counter=0;
					foreach($mp3 as $row){ ?>
						<tr>
							<td width=""><?php echo date('d M,Y',strtotime($row->last_update));?></td>
							<td><?php echo $row->file_title;?></td>
							<td style="text-align: right;width: 200px;">
								<a href="<?php echo base_url().'uploads/'.$row->file_name;?>" class='btn btn-small btn-success'>Download <i class="fa fa-download"></i></a>
								
								<button id='listenbtn' class='first btn btn-small btn-warning'>Listen <i class="fa fa-play"></i></button>
								<audio class="audioP" controls style="width: 190px; margin-top: 10px"  id="audioDiv">
									<source src="<?php echo base_url().'uploads/'.$row->file_name;?>" type="audio/mpeg">
									Your browser does not support the audio element.
								</audio>
							
							</td>
						</tr>
				<?php $counter++; } ?>
          	</tbody>
          </table>
        </div>
        <div class="col-md-6">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
       </div>
      </div>

      <hr>

      
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<?php
require 'template/footer.php';
require 'template/doc_footer.php';
?>