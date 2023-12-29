<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Insert Post</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>

	<body>
		<!-- Start Navbar -->
		<nav id='menu'>
			<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
			<ul>
			  <li><a href=''>Home</a></li>
			  <li><a class='dropdown-arrow' href=''>Posts</a>
				<ul class='sub-menus'>
				  <li><a href=''>Posts List</a></li>
				  <li><a href=''>Add Car</a></li>
				</ul>
			  </li>
			  <li><a class='dropdown-arrow' href='testimonials.php'>Users</a>
				<ul class='sub-menus'>
				  <li><a href=''>Users List</a></li>
				</ul>
			  </li>
			  <li><a href='#'>Contact Us</a></li>
			</ul>
		  </nav>
		  <!-- End Navbar -->

		<div class="container">
			<?php
			
			include("oop.php");
			$db=new Blog();
			$db->_get();
			if(isset($_POST['submit'])){
				$error=[];
				if(isset($_POST['title'])&& empty($_POST['title'])){
					$error['title']="enter the title";
				}
				else{
					$title=$_POST['title'];
				}
				if(isset($_POST['content'])&& empty($_POST['content'])){
					$error['content']="enter the content";
				}
				else{
					$content=$_POST['content'];
				}
				if(isset($_POST['featured'])){
					$featured=$_POST['featured'];
				}
				else{
					$featured="null";
				}
				if(isset($_POST['published'])){
					$published=$_POST['published'];
				}
				else{
					$published=0;
				}
				if(isset($_POST['visits'])&& empty($_POST['visits'])){
					$error['visits']="enter the visits";
				}
				else{
					$visits=$_POST['visits'];
				}
				if(isset($_POST['date'])){
					$date=$_POST['date'];
				}
				else{
					$date="not defind";
				}
				$image=$_FILES['image']['name'];
				$temp=$_FILES['image']['tmp_name'];
				if(count($error)<=0){
					move_uploaded_file($temp,'C:\\xampp\\htdocs\\blogs\\admin\\images\\'.$image);
				    $db->insert("posts","title,content,featured,published,visits,date,image","'$title','$content','$featured','$published','$visits','$date','$image'");	
				}
			}
			?>
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
				<h3 class="my-4">Insert Post</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="title" placeholder="Enter Post Title">
				<p style="color: red;"><?php if(isset($error['title']))echo $error['title']?></p>
				</div>
				</div>
                
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea class="form-control form-control-lg" id="content4" name="content" placeholder="Enter Content"></textarea>
					<p style="color: red;"><?php if(isset($error['content']))echo $error['content']?></p>

				</div>
				</div>
                
                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="featured" class="col-md-5 col-form-label">Featured</label>
					<div class="col-md-7"><input type="radio"  id="featured" name="featured" value="yes">yes
					&nbsp;&nbsp;
					<input type="radio" id="featured" name="featured" value="no">no</div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="published" class="col-md-5 col-form-label">Published</label>
					<div class="col-md-7"><input type="checkbox" id="published" name="published" value="1"></div>
					<hr class="my-4" />
				</div>
				<div class="form-group mb-3 row"><label for="visits" class="col-md-5 col-form-label">Visits</label>
					<div class="col-md-7"><input id="Visits" name="visits">
					<p style="color: red;"><?php if(isset($error['visits']))echo $error['visits']?></p>
</div>
				</div>
				
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="date" class="col-md-5 col-form-label">Date</label>
					<div class="col-md-7"><input type="date" id="date" name="date">
					</div>
				</div>

				
				<hr class="my-4" />

				<div>
				<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" name="submit" type="submit">Insert</button></div>
               </div>
			</form>
		</div>
	</body>

</html>

