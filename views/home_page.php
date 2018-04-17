<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include_once("header.php");
  ?>
	<script src="js/data_change_view.js"></script>
	<script src="js/global_search.js"></script>
    <!-- Custom styles for this template -->
  </head>

  <body>

   <?php 
   include_once("menu.php");
   ?>

    <div class="container">

      <!--<div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>-->
	  <div class="row">
		<div class="col-md-12">
			<div class="col-md-12" id="div_view_data_change">
			<table id="view_data_change" class="display responsive" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Requested By</th>
						<th>Requested For</th>
						<th>Submit Time</th>
						<th>Request Type</th>
					</tr>
				</thead>          
			</table> 
			</div>
		</div>
	  </div>

    </div><!-- /.container -->
  </body>
  <?php
  include_once("footer.php");
  ?>
</html>
