<?php
include 'partials/header.php';
?>


<section class="dashboard">
  <div class="container dashboard-container">
    <button id="show-sidebar-btn" class="sidebar-toggle"><i class="gg-arrow-right"></i></button>
    <button id="hide-sidebar-btn" class="sidebar-toggle"><i class="gg-arrow-long-left"></i></button>
    <aside>
      <ul>
        <li>
          <a href="add-post.php" ><i class="gg-file-add"></i>
            <h5>Add Post</h5>
          </a>
        </li>
        <li>
          <a href="index.php"  class="active" ><i class="gg-push-chevron-down"></i>
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
          <a href="manage-user.php"><i class="gg-user-list"></i>
            <h5>Mange User</h5>
          </a>
        </li>
        <li>
          <a href="add-category.php" ><i class="gg-file-add"></i>
            <h5>Add Category</h5>
          </a>
        </li>
        <li>
          <a href="manage-category.php"  ><i class="gg-list"></i>
            <h5>Manage Categories</h5>
          </a>
        </li>
        <?php endif ?>
      </ul>
    </aside>
    <main>
      <h2>Manage User</h2>
      <table>
        <thead>
        <tr>
          <th>Title</th>
          <th>Category</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
          <tbody>
            <tr>
              <td>The Himalayas by : Pemba tshiring sherpa</td>
              <td>Trekking</td>
              <td><a href="edit-post.php" class="btn sm">Edit</a></td>
              <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
             
            </tr>
            <tr>
              <td>The Himalayas by : Pemba tshiring sherpa</td>
              <td>Trekking</td>
              <td><a href="edit-post.php" class="btn sm">Edit</a></td>
              <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
              
            </tr>
            <tr>
              <td>The Himalayas by : Pemba tshiring sherpa</td>
              <td>Trekking</td>
              <td><a href="edit-post.php" class="btn sm">Edit</a></td>
              <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
              
            </tr>
            <tr>
              <td>The Himalayas by : Pemba tshiring sherpa</td>
              <td>Trekking</td>
              <td><a href="edit-post.php" class="btn sm">Edit</a></td>
              <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
             
            </tr>
          </tbody>
      </table>
    </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>
