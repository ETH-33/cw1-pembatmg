<?php
include 'partials/header.php';

// fetch users from database but not the current/loged in users
$current_admin_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id=$current_admin_id";
$users = mysqli_query($connection, $query );

?>



<section class="dashboard">
  <!--  shows if add user was successfull -->
<?php if(isset($_SESSION['add-user-success'])) : ?>  
    <div class="alert-message success container">
       <p>
         <?= $_SESSION['add-user-success'];
          unset($_SESSION['add-user-success']); ?>
       </p>
    </div>
    <!-- shows if edit user was successfull -->
<?php elseif(isset($_SESSION['edit-user-success'])) : ?>   
    <div class="alert-message success container">
       <p>
         <?= $_SESSION['edit-user-success'];
          unset($_SESSION['edit-user-success']); ?>
       </p>
    </div>
    <!-- shows if edit user was UNsuccessfull -->
<?php elseif(isset($_SESSION['edit-user'])) : ?>   
    <div class="alert-message error container">
       <p>
         <?= $_SESSION['edit-user'];
          unset($_SESSION['edit-user']); ?>
       </p>
    </div>
    <!-- shows if delete user was successfull -->
<?php elseif(isset($_SESSION['delete-user-success'])) : ?>   
    <div class="alert-message success container">
       <p>
         <?= $_SESSION['delete-user-success'];
          unset($_SESSION['delete-user-success']); ?>
       </p>
    </div>
    <!-- shows if delete user was UNsuccessfull -->
<?php elseif(isset($_SESSION['delete-user'])) : ?>   
    <div class="alert-message error container">
       <p>
         <?= $_SESSION['delete-user'];
          unset($_SESSION['delete-user']); ?>
       </p>
    </div>
    <?php endif ?>

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
        <?php endif ?>
      </ul>
    </aside>
    <main>
      <h2>Manage Users</h2>
      <?php if(mysqli_num_rows($users) > 0): ?>
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
            <?php while($user = mysqli_fetch_assoc($users)) : ?>
            <tr>
              <td><?= "{$user['firstname']} {$user['lastname']}" ?></td>
              <td><?= $user['username'] ?></td>
              <td><a href="<?= ROOT_URL ?>admin/edit-user.php?id=<?= $user['id']?>" class="btn sm">Edit</a></td>
              <td><a href="<?= ROOT_URL ?>admin/delete-user.php?id=<?= $user['id']?>" class="btn sm danger">Delete</a></td>
              <td><?= $user['is_admin'] ? 'yes' : 'No' ?> </td>
            </tr>
            <?php endwhile ?>
          </tbody>
      </table>
      <?php else : ?>
        <div class="alert__message error"><?= "No users found" ?></div>
        <?php endif ?>
    </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>