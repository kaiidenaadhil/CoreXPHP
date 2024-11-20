  <div class="data-table">
  <div class="table-container">
  <h2> Edit  paper </h2>
<?php foreach ($params["paper"] as $key => $paper) : ?>
  <form method="post" action="<?= ROOT ?>/admin/paper/<?= $paper['paperIdentify'] ?>/modify">
  <div>
    <label for="paperName">Paper Name</label>
    <input type="text" name="paperName" value="<?= $paper["paperName"] ?>">
  </div>
  <div>
    <label for="paperGSM">Paper G S M</label>
    <input type="text" name="paperGSM" value="<?= $paper["paperGSM"] ?>">
  </div>
  <div>
    <label for="paperQuantity">Paper Quantity</label>
    <input type="text" name="paperQuantity" value="<?= $paper["paperQuantity"] ?>">
  </div>
  <div>
    <label for="paperPrice">Paper Price</label>
    <input type="text" name="paperPrice" value="<?= $paper["paperPrice"] ?>">
  </div>
  <div><aside class="row">
    <input type="submit" value="Update" class="save-btn">
 <a href="<?= ROOT ?>/admin/paper" class="cancel-btn">back</a>
   </aside></div>
  </form>
<?php endforeach; ?>
  </div>
  </div>
