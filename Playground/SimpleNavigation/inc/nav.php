    <style type="text/css">
    	.navbar-brand.active { background-color: #000; }
    </style>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">SUNY Simple Navigation</a>
        </div>
        <div class="navbar-collapse collapse">
        
        	
		    <ul class="nav navbar-nav">
		    	
		    	<?
		    		$links = array(
		    			array('class' => 'contact-menu', 'link' => 'contact.php', 'title' => 'Contact Us' ),
		    			array('class' => 'links-menu', 'link' => 'links.php', 'title' => 'Links' ),
		    		  );
		    	?>
		    	
		    	<? foreach ($links as $value) { ?>
					<li class="<?=$value['class']?>" ><a href="<?=$value['link']?>"><?=$value['title']?></a></li>
				<? } ?>
		      
		       
		      
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Super Menu <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		          <li class="divider"></li>
		          <li><a href="#">One more separated link</a></li>
		        </ul>
		      </li>
		    </ul>        
        
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
