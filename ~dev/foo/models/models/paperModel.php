<?php
class paperModel extends Model
{

	public function record($data = [])
	{
		$this->insert("paper", $data);
	}

	public function countAll($search, $searchColumns)
	{
		return $this->searchCount("paper", $search, $searchColumns);
	}

	public function displayAll($offset = null, $limit = null)
	{
           		$columns = array (
  0 => 'paperId',
  1 => 'paperName',
  2 => 'paperGSM',
  3 => 'paperQuantity',
  4 => 'paperPrice',
  5 => 'paperUpdated',
  6 => 'paperIdentify',
);
		return $this->paginate("paper", $columns, [], $offset, $limit);
	}

	public function displayAllSearch($search, $searchColumns, $offset = null, $limit = null)
	{
	$columns = array (
  0 => 'paperId',
  1 => 'paperName',
  2 => 'paperGSM',
  3 => 'paperQuantity',
  4 => 'paperPrice',
  5 => 'paperUpdated',
  6 => 'paperIdentify',
);
		return $this->search("paper", $columns, [], $search, $searchColumns, $offset, $limit);
	}

	public function displaySingle($id)
	{
		$columns = array (
  0 => 'paperId',
  1 => 'paperName',
  2 => 'paperGSM',
  3 => 'paperQuantity',
  4 => 'paperPrice',
  5 => 'paperUpdated',
  6 => 'paperIdentify',
);
		return $this->select("paper", $columns, ["paperIdentify" => $id]);
	}

	public function modify($data, $id)
	{
		return $this->updateWhere("paper", $data, ["paperIdentify" => $id]);
	}

	public function erase($id)
	{
		return $this->deleteWhere("paper", ["paperIdentify" => $id]);
	}
}
