    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Sum Com HR Portal</a>	
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
	
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if(isset($_REQUEST['action'])){ if(($_REQUEST['action'] == 'homePage')||($_REQUEST['action'] == 'login')) {echo 'active';}} if(isset($_REQUEST['uid']))echo 'active'; ?>">
            <a class="nav-link" href="index.php?action=homePage">Home <span class="sr-only">(current)</span></a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link <?php if(isset($_REQUEST['action'])){ if($_REQUEST['action'] == 'inprocess') {echo 'active';}} ?>" href="index.php?action=inprocess">In Process</a>
          </li>	-->	  
          <li class="nav-item">
            <a class="nav-link " href="index.php?action=logout">Log out</a>
          </li>
		  <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" id="top_search_val" placeholder="Search" value="<?php if(isset($_REQUEST['searchVal'])) { echo $_REQUEST['searchVal']; }?>" aria-label="Search" data-toggle="tooltip" data-placement="left" title="Enter the Keyword to Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="top_search_button">Search</button>
        </form>-->
      </div>
    </nav>