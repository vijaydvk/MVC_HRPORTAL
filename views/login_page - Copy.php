<?php


?>
<!--<!DOCTYPE html>-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" class="js">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sun Com Mobile HR Portal</title>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">-->
</head>
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700&amp;opaofe" media="all">
	<!--<script async="" src="//www.google-analytics.com/analytics.js"></script>
	<script type="text/javascript" src="https://myprimeportal.com/sites/all/modules/jquery_update/replace/jquery/1.10/jquery.min.js?v=1.10.2"></script>-->
	
	<link href="libs/js/jquery-ui/jquery-ui.structure.min.css" rel="stylesheet" media="screen">
	<link href="libs/js/jquery-ui/jquery-ui.theme.min.css" rel="stylesheet" media="screen">
	<link href="libs/js/jquery-ui/jquery-ui.min.css" rel="stylesheet" media="screen">

	<link href="libs/css/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="../libs/css/font-awesome.min.css" rel="stylesheet">-->
	
	<!-- jQuery library -->
	<script src="libs/js/jquery/jquery-3.2.0.min.js"></script>
	<!-- bootstrap JavaScript -->
	<script src="libs/css/bootstrap/js/bootstrap.min.js"></script>
<style>
	/* Toggle Styles */
	body {
    background-repeat: no-repeat;
	min-height:100%;

}


</style>

<body>
    <div class="container" >    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" style="background-color: rgba(115, 115, 115, 0.8);	opacity: 0.9;">
                    <div class="panel-heading">
						<div class="panel-title">Welcome to Sun Com Mobile HR Portal</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px">
						<!--<a href="#">Forgot password?</a>-->
						</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="index.php?action=login">
							<input type="hidden" id="login" name="login" />
							<input type="hidden" id="company_id" name="company_id" value="suncom"/>
							<input type="hidden" id="fin_year" name="fin_year" value="17-18"/>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="user_id" type="text" class="form-control" name="user_id" autofocus="autofocus" value="" placeholder="user id">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="user_pwd" type="password" class="form-control" name="user_pwd" placeholder="password" value="">
                                    </div>
                                    

                                
                           


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <!--<a id="loginButton" class="btn btn-success" type="submit">Login  </a>-->
									  <input id="loginButton" class="btn btn-success" type="submit" value="Login" />
                                    </div>
                                </div>


                                  
                            </form>     



                        </div>                     
                    </div>  
        </div>
		
    
	</div>

</body>
</html>
<?php

?>    