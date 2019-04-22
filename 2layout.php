<!DOCTYPE html>
<html>
<head>
	<title>2Layout</title>



	<style type="text/css">
  body{
      background: #fff;

    }
    *{
      margin: 0px;
      padding: 0px;
    }
  .main{
      width: 954px;
      height: 757px;
      background:#fff;
      margin: 0 auto;
    }

  .black{
    height: 50px;
    width: 100%;
     background: #000000;
  }
  .coco{
    height: 50px;
    width: 340px;
     background: #000000;
      float: left;
  }

    nav{
  height: 50px;
  width: 550px;
  background: #000000;
   float: left;
   margin-left: 260px;

  }
}
nav ul{
  list-style: none;
}
nav li{
  float: left;
  line-height: 50px;
  width:77px;
  text-align: center;
  cursor: pointer;
  font-size: 14px;
  color:white;
  padding-right: 12px;
  list-style-type: none;

}
nav li:hover{
  background: #fff;
  color:#66a3ff;
  text-decoration: underline;
  font-weight: bold;
}

.sample-blog{
	height: 240px;
	width: 970x;
	background-color:#DCDCDC;

}
.spacer{

	margin-top: 24px;
	height: 245px;
	width: 970px;
	background-color: #DCDCDC;
	padding-top: 35px;
}

.sub-blog{
	height: 60px;
	width: 300px;
	background-color: #DCDCDC;
	margin-left: 60px;
}



.heading{
	height: 50px;
	width: 810px;
	background-color: #DCDCDC;
	margin-left: 60px;

}
.content1{
	height: 40px;
	width: 140px;
	background-color:#DCDCDC;
	margin-left: 50px;
}
.beta-blog{
	height: 330px;
	width: 100%;
	background-color: #fff;
	margin-top: 60px;
	margin-left: 10px;
}
.feature{
	height: 20px;
	width: 360px;
	background-color: #ffffff;
	margin-left: 10px;
}
.outer-block{
		height: 320px;
		width: 100%;
		background-color: #ffffff;

}
.container1{
  height: 280px;
  width: 220px;
  background-color: #fff;
  float: left;
  margin-top: 10px;
  margin: 9px;
}
.image{
  height: 150px;
  width: 100%;
  background-color: #D8D8D8; 


}
.project{
  height: 30px;
  width: 100%;
  background-color: #ffffff;
  text-align: left;
  font-family:sans-serif;
  font-weight: bold; 
  margin-right: 20px;
  }
  
.context{
  height: 60px;
  width: 180px;
  background-color: #fff;
  font-family:sans-serif;
  padding-left: 0px;
  margin: 0 auto;
  opacity: .7;
  
  
}

.search-form form{
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
   
}
.right-block input[type="submit"]{
    text-transform: uppercase;
    background: #007BAF;
    padding: 4px 8px;
    font-size: 11px;
    color: #fff;
    border: 0px solid;
}

.left-block input[type="submit"]{
    text-transform: uppercase;
    background: #ffffff;
    padding: 4px 8px;
    font-size: 10px;
    color: #000;
    border: 0px solid;
}

h1{

 padding-top: 15px;
  font-family: sans-serif;

}
h3{

  font-family: sans-serif;
  opacity: .7;

}
h2{

 padding-top: 65px;
  margin-left: 20px;
  font-family: sans-serif;
  opacity: .7;
  padding-left: 30px;

}
h4{

 padding-top: 15px;
  font-family: sans-serif;
  padding-left: 50px;

}
h5{

 padding-top: 15px;
  font-family: sans-serif;
  padding-left: 0px;

}

.below-blog{
	height: 35px;
	width: 170px;
	background-color:#fff;
	margin-left: 25px;
	float: left;
}
.buy-now{
	height: 33px;
	width: 80px;
	float: left;

}
.more-info{
	height: 33px;
	width: 80px;
}

.new-div{
	margin: 0 auto
}
</style>
</head>
<body>

 



<div class="black">    
            <div class="coco">
        <div class="navbar"><nav>
                             <ul>
    
                                  <li>Layout 1</li>
                                  <li>About</li>
                                  <li>Services</li>
                                  <li>Content</li>
                             </ul>
                            </nav>
        </div>

        </div>
      </div>

<div class="main">


	<div class="sample-blog">
		<div class="spacer">
			<div class="sub-blog"><h1>Sample heading<h1></div>
			<div class="heading">Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur mollit anim id est laborum consectetur adipiscing Sunt in culpa qui.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit Sunt in culpa.</div>
			<div class="content1">
				<div class="right-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="Call to Action!">
                            </form>
                        </div>
                     </div>
			</div>
		</div>
		
	</div>


<div class="beta-blog">
	
	<div class="feature"><h3>Leatest Features<h3></div>



	<div class="outer-block">
			<div class="new-div">
		<div class="container1">

                <div class="image"><h2>800 x 500<h2></div>
                <div class="project"><h4>Feature Leabel<h4></div>
                <div class="context"><h5>Sunt in culpa qui officia ab deser mollit Sunt in officia</h5></div>
                <div class="below-blog">
                	<div class="buy-now">

                		<div class="right-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="Buy now!">
                            </form>
                        </div>
                     </div>
                 </div>


                	<div class="more-info">
                		

                		<div class="left-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="More info">
                            </form>
                        </div>
                     </div>

                	</div>
                </div>
        </div>


<div class="container1">

                <div class="image"><h2>800 x 500<h2></div>
                <div class="project"><h4>Feature Leabel<h4></div>
                <div class="context"><h5>Sunt in culpa qui officia deser mollit Sunt in officia</h5></div>
                <div class="below-blog">
                	<div class="buy-now">

                		<div class="right-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="Buy now!">
                            </form>
                        </div>
                     </div>
                 </div>


                	<div class="more-info">
                		

                		<div class="left-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="More info">
                            </form>
                        </div>
                     </div>

                	</div>
                </div>
        </div>

        <div class="container1">

                <div class="image"><h2>800 x 500<h2></div>
                <div class="project"><h4>Feature Leabel<h4></div>
                <div class="context"><h5>Sunt in culpa qui officia deser mollit Sunt in officia</h5></div>

                <div class="below-blog">
                	<div class="buy-now">

                		<div class="right-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="Buy now!">
                            </form>
                        </div>
                     </div>
                 </div>


                	<div class="more-info">
                		

                		<div class="left-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="More info">
                            </form>
                        </div>
                     </div>

                	</div>
                </div>
        </div>


       <div class="container1">

                <div class="image"><h2>800 x 500<h2></div>
                <div class="project"><h4>Feature Leabel<h4></div>
                <div class="context"><h5>Sunt in culpa qui officia deser mollit Sunt in officia</h5></div>
                <div class="below-blog">
                	<div class="buy-now">

                		<div class="right-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="Buy now!">
                            </form>
                        </div>
                     </div>
                 </div>


                	<div class="more-info">
                		

                		<div class="left-block">
				<div class="search-form">
                            <form action="#">
                                <input type="submit" value="More info">
                            </form>
                        </div>
                     </div>

                	</div>
                </div>
        </div>

</div>





	</div>



</div>



</div>
</body>
</div>

</body>
</html>