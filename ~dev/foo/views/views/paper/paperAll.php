<div class="search-container">
<form class="search-form" action="<?= ROOT ?>/admin/paper/" method="get">
<input type="text" name="search" placeholder="Search">
<button type="submit" class="gradient-btn">Search</button>
</form>
</div>
<div class="data-info">
<?php if (isset($_SESSION['success_message'])): ?>
<p><?= $_SESSION['success_message'] ?></p>
<?php unset($_SESSION['success_message']); ?>
<?php endif; ?>
</div>
<div class="data-info">
<h3>Paper List</h3> <a href="<?= ROOT ?>/admin/paper/build" class="gradient-btn">add New paper</a>
</div>
<div class="data-table">
<div class="table-container">
<?php if (count($params['paper']) > 0): ?>
<table>
<thead>
<tr>
<th>#</th>
<th>Paper Name</th>
<th>Paper G S M</th>
<th>Paper Quantity</th>
<th>Paper Price</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($params['paper'] as $key => $paper): ?>
<tr>
<td><?= $key + 1 ?></td>
<td><?= $paper['paperName'] ?></td>
<td><?= $paper['paperGSM'] ?></td>
<td><?= $paper['paperQuantity'] ?></td>
<td><?= $paper['paperPrice'] ?></td>
<td>
<a href="<?= ROOT ?>/admin/paper/<?= $paper['paperIdentify'] ?>">Show</a>
<a href="<?= ROOT ?>/admin/paper/<?= $paper['paperIdentify'] ?>/modify">Edit</a>
<a href="<?= ROOT ?>/admin/paper/<?= $paper['paperIdentify'] ?>/destroy">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<div class="pagination-container">
<?= $params["pagination"] ?>
</div>
<?php else: ?>
<p>No Record to Display.</p>
<a href="<?= ROOT ?>/admin/paper/build">Add a Record.</a>
<?php endif; ?>
</div>
