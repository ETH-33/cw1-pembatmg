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
          <a href="dashboard.php" ><i class="gg-push-chevron-down"></i>
            <h5>Manage Post</h5>
          </a>
        </li>
        <li>
          <a href="add-user.php" ><i class="gg-user-add"></i>
            <h5>Add User</h5>
          </a>
        </li>
        <li>
          <a href="manage-user.php" class="active" ><i class="gg-user-list"></i>
            <h5>Mange User</h5>
          </a>
        </li>
        <li>
          <a href="add-category.php" ><i class="gg-file-add"></i>
            <h5>Add Category</h5>
          </a>
        </li>
        <li>
          <a href="manage-category.php" ><i class="gg-list"></i>
            <h5>Manage Categories</h5>
          </a>
        </li>
      </ul>
    </aside>
    <main>
      <h2>Manage Users</h2>
      <table>
        <thead>
        <tr>
          <th>Name</th>
          <th>Username</th>
          <th>Edit</th>
          <th>Delete</th>
          <th>Admin</th>
        </tr>
      </thead>
          <tbody>
            <tr>
              <td>Mero Nero</td>
              <td>Nero</td>
              <td><a href="edit-user.php" class="btn sm">Edit</a></td>
              <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
              <td>Yes</td>
            </tr>
            <tr>
              <td>Mero Tero</td>
              <td>Tero</td>
              <td><a href="edit-user.php" class="btn sm">Edit</a></td>
              <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
              <td>No</td>
            </tr>
            <tr>
              <td>Mero Yesko</td>
              <td>Yesko</td>
              <td><a href="edit-user.php" class="btn sm">Edit</a></td>
              <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
              <td>No</td>
            </tr>
           
          </tbody>
      </table>
    </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>