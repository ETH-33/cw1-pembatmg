<?php
include '../partials/header.php';
?>

<section class="form-section">
  <div class="container form-container">
    <h2>Add Post</h2>
    <div class="alert-message error">
      <p>This is an error message</p>
    </div>
  <form action="" enctype="multipart/form-data">
    <input type="text" placeholder="Title">
    <select>
      <option value="1">Trekking</option>
      <option value="1">Travel</option>
      <option value="1">Culture</option>
      <option value="1">Food</option>
      <option value="1">Lifestyle</option>
      <option value="1">History</option>
    </select>
    <textarea rows="10" placeholder="Body"></textarea>
    <div class="form-control inline">
      <input type="checkbox" id="is-featured" checked>
      <label for="is-featured">Featured</label>
    </div>
    <div class="form-control">
      <label for="thumbnail">Add Thumbnail</label>
      <input type="file" id="thumbnail">
    </div>
    <button type="submit" class="btn">Add post</button>
  </form>
  </div>
</section>

<?php
include '../partials/footer.php';
?>