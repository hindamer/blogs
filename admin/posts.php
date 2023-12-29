<!DOCTYPE html>
<html lang="en">

<head>
  <title>Posts</title>
  <link rel="stylesheet" href="css/posts.css">
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

  <div id="wrapper">
    <h1>Posts</h1>

    <table id="keywords" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th><span>Title</span></th>
          <th><span>Published</span></th>
          <th><span>Date</span></th>
          <th><span>Featured</span></th>
          <th><span>Visits</span></th>
          <th><span>Delete</span></th>
          <th><span>Update</span></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("oop.php");
        $db = new Blog();
        $db->_get();
        $data = $db->select("*", "posts");
        $row = $data->fetchAll(PDO::FETCH_ASSOC);
        if(isset($_POST['delete'])){
          $id=$_POST['id'];
          $db->delete("posts","id='$id'");
        }
        foreach ($row as $post) { ?>
          <tr>
            <td class="lalign"><?php echo $post['title']?></td>
            <td><?php echo $post['published']?></td>
            <td><?php echo $post['date']?></td>
            <td><?php echo $post['featured']?></td>
            <td><?php echo $post['visits']?></td>
            <td>
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <input type="hidden" name="id" value="<?php echo $post['id']?>">
            <input type="submit" name="delete" value="delete">
            </form>
            </td>
            <td>
            <form method="post" action="updatePosts.php">
            <input type="hidden" name="id" value="<?php echo $post['id']?>">
            <input type="submit" name="update" value="update">
            </form>
            </td>
          </tr>
        <?php  }
        ?>

      </tbody>
    </table>
  </div>
</body>

</html>