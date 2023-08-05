<?php
include 'partials/header.php';
// fetch categories from database
$query = "SELECT * FROM categories ORDER BY title DESC";
$categories = mysqli_query($connection,$query);

?>


<section class="dashboard">
<!-- <-- shows if add category was successfull --> 
  <?php if(isset($_SESSION['add-category-success'])) : ?>  
     <div class="alert-message success container">
        <p>
          <?= $_SESSION['add-category-success'];
           unset($_SESSION['add-category-success']); ?>
        </p>
     </div>
     <!-- <-- shows if add category was not successfull --> 
  <?php elseif(isset($_SESSION['add-category'])) : ?>  
     <div class="alert-message error container">
        <p>
          <?= $_SESSION['add-category'];
           unset($_SESSION['add-category']); ?>
        </p>
     </div>
  <?php endif ?>

  <div class="container dashboard-container">
    <button id="show-sidebar-btn" class="sidebar-toggle"><i class="gg-arrow-right"></i></button>
    <button id="hide-sidebar-btn" class="sidebar-toggle"><i class="gg-arrow-long-left"></i></button>
    <aside>
      <ul>
        <li>
          <a href="add-post.html" ><i class="gg-file-add"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <li>
          <a href="index.php" ><i class="gg-push-chevron-down"></i>
            <h5>Manage Post</h5>
          </a>
        </li>
         <?php if(isset($_SESSION['user_is_admin'])) : ?>
        <li>
          <a href="add-user.php" ><i class="gg-user-add"></i>
            <h5>Add User</h5>
          </a>
        </li>
        <li>
          <a href="manage-user.php" ><i class="gg-user-list"></i>
            <h5>Mange User</h5>
          </a>
        </li>
        <li>
          <a href="add-category.php" ><i class="gg-file-add"></i>
            <h5>Add Category</h5>
          </a>
        </li>
        <li>
          <a href="manage-category.php" class="active" ><i class="gg-list"></i>
            <h5>Manage Categories</h5>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </aside>
    <main>
      <h2>Manage Categories</h2>
      <?php if(mysqli_num_rows($categories)> 0) :  ?>
      <table>
        <thead>
        <tr>
          <th>Title</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
          <tbody>
            <?php while($category = mysqli_fetch_assoc($categories)) : ?>
            <tr>
              <td><?= $category['title'] ?></td>
              <td><a href="<?= ROOT_URL ?>admin/edit-category.php
              ?id=<?= $category['id']?>" class="btn sm">Edit</a></td>
              <td><a href="<?= ROOT_URL ?>admin/delete-category.php
              ?id=<?= $category['id']?>" class="btn sm danger">Delete</a></td>
            </tr>
            <?php endwhile ?>
          </tbody>
      </table>
      <?php else :?>
        <div class="alert__message error">
          <?= "No categories found" ?>
        </div>
        <?php endif ?>
    </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>