<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!--<link rel="stylesheet" href="library/docs.theme.min.css">-->
	<link rel="stylesheet" href="library/owl.carousel.min.css">
	<link rel="stylesheet" href="library/owl.theme.default.min.css">
	<!-- <script src="library/owl.carousel.min.js"></script> -->
	<!-- <script src="library/jquery-3.5.1.js"></script>
	<script src="library/owl.carousel.js"></script> -->

	

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/lg_home_style.css">
	<link rel="stylesheet" type="text/css" href="../public/css/flex-layout.css">
	<link rel="stylesheet" type="text/css" href="../public/css/reset.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Home</title>
</head>
<body>
	<header>       
        <div class="bar">            
           		<!-- <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a> -->
           		<div class="logo">
           			<a href=""><img src="images/logo.jpg" alt="logo"></a>
           		</div>
           		<ul class="nav-pc">
					<li><a href="" class="active">NATURE'S WAY</a></li>
					<li><a href="">KIDS SMART</a></li>
					<li><a href="">VITAMINS</a></li>
					<li><a href="">ADULT VITA GUMMIES</a></li>
					<li><a href="">RESTORE</a></li>
					<li><a href="">SLIMRIGHT</a></li>
					
				</ul>
				<!-- <div class="logo-mb">
           			<a href=""><img src="images/logo.jpg" alt="logo"></a>
           		</div> -->
				<!-----menu nav----->
				<div id="mySidenav" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					<a href="#">About</a>
					<a href="#">Services</a>
					<a href="#">Clients</a>
					<a href="#">Contact</a>
				</div>
				<div id="main">
					<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
				</div>
				<!-----close-menu nav----->
        </div>

        <div class="account">       
                <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                <a href="#" class="address"><i class="fa fa-address-card-o" aria-hidden="true"></i></a>
       </div>

       
    </header>
    



    <main class="content">
    	<div class="conteiner">
    		<div class="box-top flex_wrap">
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    			<div class="box"><div>this is box 1</div></div>
    		</div>
    	</div>

    	<div class="container container-small">
            <div class="demo2 flex_wrap">
                <div class="box"><div>this is box 1</div></div>
                <div class="box"><div>this is box 2</div></div>
                <div class="box"><div>this is box 3</div></div>
                <div class="box"><div>this is box 4</div></div>
                <div class="box"><div>this is box 5</div></div>
                <div class="box"><div>this is box 6</div></div>
                <div class="box"><div>this is box 7</div></div>
                <div class="box"><div>this is box 8</div></div>
                <div class="box"><div>this is box 9</div></div>
                <div class="box"><div>this is box 10</div></div>
            </div>

        </div>

    </main>







    <div class="chat">
       	<a href=""><i class="fa fa-phone-square" aria-hidden="true"></i> Chat with us</a>
     </div>
</body>
<script>
		function openNav() 
		{
			document.getElementById("mySidenav").style.width = "100%";
			document.getElementById("main").style.marginLeft = "100%";
			document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() 
		{
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
			document.body.style.backgroundColor = "white";
		}
	</script>
</html>