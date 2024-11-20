<?php
class paperController extends Controller
{
    public function paperIndex()
    {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $paperModel = $this->model('paperModel');
        	$searchColumns = array (
  0 => 'paperId',
  1 => 'paperName',
  2 => 'paperGSM',
  3 => 'paperQuantity',
  4 => 'paperPrice',
  5 => 'paperUpdated',
  6 => 'paperIdentify',
);
        $totalRecords = $paperModel->countAll($search, $searchColumns);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $pagination = new Paginator($totalRecords, $page, 10);
        $data = $paperModel->displayAllSearch($search, $searchColumns, $pagination->getOffset(), $pagination->getLimit());
        $params['paper'] = $data;
        if ($totalRecords > $pagination->getLimit()) {
            $params['pagination'] =  $pagination->render();
        } else {
            $params['pagination'] = '';
        }
        $this->adminView('paper/paperAll', $params);
    }

    public function paperDisplay(Request $request, $paperIdentify)
    {
        $paperModel = $this->model('paperModel');
        $params['paper'] =  $paperModel->displaySingle($paperIdentify);
        $this->adminView('paper/paperSingle', $params);
    }

    public function paperDestroy(Request $request, $paperIdentify)
    {
        $paperModel = $this->model('paperModel');
        $paperModel->erase($paperIdentify);
            // success delete and redirect
header("Location:  " . ROOT . "/admin/paper/");
            $_SESSION['success_message'] = "Delete successful!";
            exit;
    }

    public function paperbuild()
    {
        $this->adminView('paper/paperNew');
    }

    public function paperRecord(Request $request)
    {
        $paperModel = $this->model('paperModel');
        $data = $request->getBody();
        $data['paperUpdated'] = date('Y-m-d H:i:s');
        $data['paperIdentify'] = generateUniqueId(16);
        	$rules = array (
  'paperName' => 'required',
  'paperGSM' => 'required',
  'paperQuantity' => 'required',
  'paperPrice' => 'required',
  'paperUpdated' => '',
  'paperIdentify' => 'required',
);
        $validator = new Validator();
        $validator->validate($rules);
        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors as $error) {
                echo $error . "</br>";
            }
        } else {
            $paperModel->record($data);
            // success adding and redirect
header("Location:  " . ROOT . "/admin/paper/");
            $_SESSION['success_message'] = "Added successful!";
            exit;
        }
    }

    public function paperModify(Request $request,$paperIdentify)
    {
        $paperModel = $this->model('paperModel');
        $params['paperIdentify'] = $paperIdentify;
        $params['paper'] =  $paperModel->displaySingle($paperIdentify);
        $this->adminView('paper/paperEdit', $params);
    }

    public function paperEdit(Request $request, $paperIdentify)
    {
        $paperModel = $this->model('paperModel');
        $data = $request->getBody();
        	$rules = array (
  'paperName' => 'required',
  'paperGSM' => 'required',
  'paperQuantity' => 'required',
  'paperPrice' => 'required',
  'paperUpdated' => '',
  'paperIdentify' => 'required',
);
        $validator = new Validator();

        if ($validator->fails($rules)) {
            $errors = $validator->errors();
            foreach ($errors as $error) {
                echo $error . "</br>";
            }
        } else {
            $paperModel->modify($data, $paperIdentify);
            // success updated and redirect
header("Location:  " . ROOT . "/admin/paper/");
            $_SESSION['success_message'] = "Update successful!";
            exit;
        }
    }
}
