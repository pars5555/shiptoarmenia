<header class="header-wrapper">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$SITE_PATH}/">Ship To Armenia</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
              <li class="active"><a href="#">Home</a></li>
              <li class="active"><a id="priceBtn" href="{$SITE_PATH}/price">Prices</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              {if $ns.userLevel === $ns.userGroupsUser}
              	<li>
              		<a href="{$SITE_PATH}/dyn/user/do_logout">Logout</a>
              	</li>
              {else}
             	 <li>
             	 	<a id="loginBtn" href="javascript:void(0);">
             	 		Login
         	 		</a>
     	 		</li>
         	 {/if}
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
</header>
<div id="loginBlock" style="display: none;" class="login-block-wrapper">
	<div class="f_close_pop_up login_close_btn">
		<i class="glyphicon glyphicon-remove-circle"></i>
	</div>
	<h2>Login</h2>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" />
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" />
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="#" class="sta-button block orange">LOGIN</a>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<a href="#" class="sta-button block orange">SIGN UP</a>
		</div>
	</div>
</div>