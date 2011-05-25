
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

    #login_form {
        background: #eee;
        padding: 10px;
        width: 300px;
    }    

    #login_form label {
        float: left;
        display: block;
        min-width: 100px;
    }
    #login_form input {
        width: 170px;
    }
    .info {
        margin: 10px 0;
    }
    .info p {
        margin: 0;
    }
	</style>
</head>
<body>

<div id="container">
	<h1>Codeigniter User Libray</h1>
	<div id="body">
        <p>If you can see this page you have successfully installed the Codeigniter-user library. <br />Here is a simple test form and logged page for you to play around.</p>
        <div class="info">
            <p>Login: <strong>admin</strong></p>
            <p>Password: <strong>admin</strong></p>
        </div>
        <form action="<?php echo site_url('login/validate') ?>" method="post" id="login_form">

            <?php echo $this->session->flashdata('error_message');?>
            <?php echo $this->session->flashdata('success_message');?>

            <p>
            <label for="login">User: </label>
            <input type="text" name="login" id="login" />
            </p>

            <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            </p>

            <p><button value="send">Login</button></p>
        </form>
	</div>
	<p class="footer">Library by <a href="http://waldir.org/">Waldir Bertazzi Junior</a>. Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>
</body>
</html>



