  <div class="data-table">
  <div class="table-container">
  <h2> Display paper </h2>
<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Paper Id</th>
      <th>Paper Name</th>
      <th>Paper G S M</th>
      <th>Paper Quantity</th>
      <th>Paper Price</th>
      <th>Paper Updated</th>
      <th>Paper Identify</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($params['paper'] as $key => $paper): ?>
    <tr>
      <td><?= $key + 1 ?></td>
<td><?= $paper['paperId'] ?></td>
<td><?= $paper['paperName'] ?></td>
<td><?= $paper['paperGSM'] ?></td>
<td><?= $paper['paperQuantity'] ?></td>
<td><?= $paper['paperPrice'] ?></td>
<td><?= $paper['paperUpdated'] ?></td>
<td><?= $paper['paperIdentify'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</tbody>
</table>
 <div><aside class="row"><a href="<?= ROOT ?>/admin/paper" class="cancel-btn">back</a></aside> </div>
</div>
</div>
