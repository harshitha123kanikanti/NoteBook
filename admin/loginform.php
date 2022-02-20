<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Admin Login</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <?php include("css.php"); ?>
	    <?php include("js.php"); ?>
	    <style>
	    #marquee
	    {
	        padding:5px;
	        background-color:red;
	    }
        h1{
            font-size:80px;
            font-family: "Stencil";
        }
	    </style>
    </head>
    <body>

    <nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
			<!--	<li class="heading"><img src="images/book.png" width="100px" />&nbsp;Engineering Notes <i class="fa fa-plus-circle" aria-hidden="true"></i></li>-->
		    <center>	<h1>UPES NoteBook</h1></center>
			</ul>
			<!--<ul class="nav navbar-nav navbar-right">
				<li><img src="" width="225px" /></li>
				<li><img src="" width="100px" /></li>
			</ul>-->
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-md-3">

				<legend class="form-heading">Admin Login</legend>
				<br />

        <div id="content">
        
            <form action="adminlogin.php" method="POST">
            <table>
                    <tbody>
                        <tr>
                            <td>Username &nbsp;
                            </td>
                            <td><input type="text" name="username" value="" />
                            </td>
                        </tr>
                        <tr>
                        <td>
                        &nbsp; &nbsp; &nbsp;
                        </td>
                        </tr>
                        <tr>
                            <td>Password  
                            </td>
                            <td><input type="password" name="passwd" value="" />
                            </td>
                        </tr>
                        <tr>
                        <td>
                        &nbsp; &nbsp; &nbsp;
                        </td>
                        </tr>
                            <td colspan="2" class="center">
                                <input type="submit" value="Login" name="submit" />
                            </td>
                        </tr>
                    </tbody>
                </table>

            </form>
        </div>
    </body>
</html>
