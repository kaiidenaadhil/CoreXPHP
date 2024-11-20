  <div class="data-table">
    <div class="data-info">
      <h3>Add a paper</h3> <a href="<?= ROOT ?>/admin/paper" class="gradient-btn">Back</a>
    </div>
    <div class="table-container">
      <form method="post">
        <div>
          <label for="paperName">Paper Name</label>
          <input type="text" name="paperName">
        </div>
        <div>
          <label for="paperGSM">Paper G S M</label>
          <input type="text" name="paperGSM">
        </div>
        <div>
          <label for="paperQuantity">Paper Quantity</label>
          <input type="text" name="paperQuantity">
        </div>
        <div>
          <label for="paperPrice">Paper Price</label>
          <input type="text" name="paperPrice">
        </div>
        <div>
          <aside class="row">
            <input type="submit" value="Save" class="save-btn" style="width:100%;margin:1rem;">
            <a href="<?= ROOT ?>/admin/paper/" class="cancel-btn">Cancel</a>
          </aside>
        </div>
      </form>
    </div>
  </div>
