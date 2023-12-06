
<?php
error_reporting(0);
   $active           = array_fill(1, 6, '');
   $active[$current] = "class=active";
    ?>
<div class="menu_main">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
          <button type="button" > <i class="fa fa-bars"></i></button>
        </div>
      </div>
      
      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
      
        <ul class="nav navbar-nav">
        
        <li ><a href="index.php"  <?php echo $active[1] ?>><i class="fa fa-home"></i> Home</a></li>
		
		<li  ><a href="products.php"  <?php echo $active[2] ?>><i class="fa fa-bars"></i> Services</a></li>
		<li  ><a href="about.php"  <?php echo $active[6] ?>><i class="fa fa-user"></i> ABOUT US</a></li>        
      
       
        <li > <a href="plan.php"  <?php echo $active[3] ?>><i class="fa fa-table"></i> Plan</a></li> 
		<li ><a href="career.php"  <?php echo $active[4] ?>><i class="fa fa-graduation-cap"></i> CAREER</a></li>
        <!--<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-comment"></i> Blog</a>
        <ul class="dropdown-menu three" role="menu">
          <li> <a href="blog.html">With Large Image</a> </li>
          <li> <a href="blog-2.html">With Small Image</a> </li>
          <li> <a href="blog-post.html">Single Post</a> </li>
        </ul>
        </li>-->
		<li  ><a href="contact.php"  <?php echo $active[5] ?>><i class="fa fa-phone"></i> Contact</a></li>
        </ul>
        
      
            
      </div>
      </div>
     </div>
     
	</div>