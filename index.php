<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Ferdian-Store</title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		
    </head>
	
    <body id="welcome">

    	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:login.php");
	}
 
	?>
    
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#welcome">Pulsa</a></li>
                    <li><a href="#installation">Top Up Game Online</a></li>
                    <li><a href="#tmpl-structure">E-Money</a></li>
                    <li><a href="#css-structure">Crypto Curreny</a></li>
                    <li><a href="#javascript">About Me</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
		    <div class="main-content">
		        <section id="welcome">
		            <div class="content-header">
		                <h1>Top Up Pulsa</h1>
		            </div>
		            <div class="welcome">
                        
                        <div class="card-group">
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in .</p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
  </div>
  <div class="card" style="width: 150px; height: 150px;">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card </p>
    </div>
  </div>
</div>
		            </div>
		            
		            <div class="">
		             <hr>
		             <br>
		             <br>
		             <br>
		             <hr>
		            </div>

		        </section>
		        
		        <section id="installation">
                    <div class="content-header">
		                <h1>Coffee Landing Page</h1>
                    </div>
                    <h2 class="title">Installing Template.</h2>
                    
                    <div class="section-content">
                        <ol>
                            <li>After unzip the download pack, you'll found a Template Folder with all the files.</li>
                            <li>You can view this Template in any browser, you can display or edit the Template without an internet connection.(May not wotrk fonts and google map).</li>
                            <li>The only section that will not work is the Contact Section which contains PHP code and requires a server environment for send messages.</li>
                            <li>Now go to your cpanel or open your FTP Client (like <a target="_blank" href="https://filezilla-project.org/download.php">Filezilla</a>) and upload the content of the Template on your server root.</li>
                            <li>Once the files are done uploading go to www.yourdomainname.com/index.html</li>
                        </ol>
                    </div>
		            
		        </section>


		        <section id="tmpl-structure">
		            <h2 class="title">Template Structure</h2>
		            <p class="fifteen">All information within the main content area is nested within a body tag. The general template structure is pretty the same throughout the template. Here is the general structure of main page (index.html).</p>
		            <pre class="brush: html">
		                <header class="site-header">
		                	
		                </header>

		                <main class="site-main">
		                	<section class="section">
		                		
		                	</section>
		                	<section class="section">
		                		
		                	</section>
		                	<section class="section">
		                		
		                	</section>
		                </main>

		                <footer class="site-footer">
		                	
		                </footer>
		            </pre>
		        </section>


		        <section id="css-structure">
		            <h2 class="title">CSS Files and Structure</h2>
		            <p class="fifteen">These are the css files that are loaded into templates in <strong>Head Section</strong>.</p>
		            <pre class="brush: html">
		                <!--
						CSS
						============================================= -->
						<link rel="stylesheet" href="css/linearicons.css">
						<link rel="stylesheet" href="css/owl.carousel.css">
						<link rel="stylesheet" href="css/font-awesome.min.css">
						<link rel="stylesheet" href="css/nice-select.css">
						<link rel="stylesheet" href="css/magnific-popup.css">
						<link rel="stylesheet" href="css/bootstrap.css">
						<link rel="stylesheet" href="css/main.css">
					</pre>
		            
		            <h2 class="title">Google Web Fonts</h2>
		            
		            <p>By default, the template loads this font from Google Web Font Services, you can change the font with the one that suits you best.</p>
		            
		            <pre class="brush:html">		                
						<!--
						Google Font
						=========================== -->
		                <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600" rel="stylesheet"> 
		            </pre>
		            
		            <p class="twenty">Remember to change the font into <strong>main.css</strong></p>
		        </section>
		        
		        <section id="javascript">
		            <h2 class="title">Javascript Files and Structure</h2>
		            
		            <p class="fifteen">These are the list of Javascript files that are loaded into templates in end of the <strong>Body Section</strong>.
		            
		            <pre class="brush: html">
				        <!--
						JavaScripts
						========================== -->
						<script src="js/vendor/jquery-2.2.4.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
						<script src="js/vendor/bootstrap.min.js"></script>
						<script src="js/jquery.ajaxchimp.min.js"></script>
						<script src="js/owl.carousel.min.js"></script>
						<script src="js/jquery.nice-select.min.js"></script>
						<script src="js/jquery.magnific-popup.min.js"></script>
						<script src="js/main.js"></script>
		            </pre>
		        </section>
		        
		        <section id="contact-form">
		            <h2 class="title"> Contact Form </h2>
		            <p>This is a PHP Script for sending messages to your email, you should replace <strong>support@pixelcoder.net</strong> to your email to start receive messages.</p>
		            <pre class="brush:php">
	                    $to = 'demo@spondonit.com'; // replace this mail with yours
					    $firstname = $_POST["fname"];
					    $email= $_POST["email"];
					    $headers = 'MIME-Version: 1.0' . "\r\n";
					    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
					    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					    $message ='<table style="width:100%">
					        <tr>
					            <td>'.$firstname.'  '.$laststname.'</td>
					        </tr>
					        <tr><td>Email: '.$email.'</td></tr>
					    </table>';

					    if (@mail($to, $email, $message, $headers))
					    {
					        echo 'The message has been sent.';
					    }else{
					        echo 'failed';
					    }
		            </pre>		            
		        </section>
		        <section id="subscription-form">
		            <h2 class="title"> Subscription Form </h2>
		            <p>Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".</p>
		            <pre class="brush: javascript">
				        <div id="mc_embed_signup">
				        	//Replace this action with your own mailchimp post URL. Don't remove the "". Just paste the url inside "".
				        	<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative d-flex justify-content-center"></form>
				        </div>
		            </pre>		            
		        </section>
		        <section id="video">
		        	<h2 class="title"> Video Tutorial </h2>
		        	<!-- 21:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-21by9">
					  <iframe class="embed-responsive-item" width="100%" height="515" src="https://www.youtube.com/embed/i7_PRPLOxVE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					</div>	            
		        </section>
		        <section id="credit">
		            <h2 class="title">Source and Credit</h2>		            
		            <div class="script-source">
		                <ul>
		                    <li><a target="_blank" href="http://www.pexels.com">Pexels</a></li>
		                    <li><a target="_blank" href="http://jquery.com/">jQuery</a></li>
		                    <li><a target="_blank" href="http://getbootstrap.com">Bootstrap Framework</a></li>
		                    <li><a target="_blank" href="http://www.owlgraphic.com/owlcarousel">Owl Carousel</a></li>
		                    <li><a target="_blank" href="https://github.com/iamMonzurul/jQuery-AJAX-MailChimp">Ajax Mailchimp</a></li>
		                    <li><a target="_blank" href="http://fontawesome.io/">FontAwesome</a></li>
		                    <li><a target="_blank" href="http://dimsemenov.com/plugins/magnific-popup/">Magnefic Pop Up</a></li>
		                    <li><a target="_blank" href="http://hernansartorio.com/jquery-nice-select/">Nice Select</a></li>
		                    <li><a target="_blank" href="https://linearicons.com/">Linear Icons</a></li>
		                </ul>
		            </div>
		        </section>
		    </div>
		</div>
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
    </body>
</html>
