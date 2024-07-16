<?php 
/**
 * Ucapan_selamat Page Controller
 * @category  Controller
 */
class Ucapan_selamatController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "ucapan_selamat";
	}
	/**
     * List page records
     * @param $fieldname (filter record by a field) 
     * @param $fieldvalue (filter field value)
     * @return BaseView
     */
	function index($fieldname = null , $fieldvalue = null){
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$fields = array("id", 
			"photo1", 
			"photo2", 
			"photo3", 
			"photo4", 
			"photo5", 
			"photo6", 
			"photo7", 
			"photo8", 
			"nama1", 
			"nama2", 
			"nama3", 
			"nama4", 
			"nama5", 
			"nama6", 
			"nama7", 
			"nama8", 
			"gelar1", 
			"gelar2", 
			"gelar3", 
			"gelar4", 
			"gelar5", 
			"gelar6", 
			"gelar7", 
			"gelar8", 
			"ucapan1", 
			"ucapan2", 
			"ucapan3", 
			"ucapan4", 
			"ucapan5", 
			"ucapan6", 
			"ucapan7", 
			"ucapan8");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				ucapan_selamat.id LIKE ? OR 
				ucapan_selamat.photo1 LIKE ? OR 
				ucapan_selamat.photo2 LIKE ? OR 
				ucapan_selamat.photo3 LIKE ? OR 
				ucapan_selamat.photo4 LIKE ? OR 
				ucapan_selamat.photo5 LIKE ? OR 
				ucapan_selamat.photo6 LIKE ? OR 
				ucapan_selamat.photo7 LIKE ? OR 
				ucapan_selamat.photo8 LIKE ? OR 
				ucapan_selamat.nama1 LIKE ? OR 
				ucapan_selamat.nama2 LIKE ? OR 
				ucapan_selamat.nama3 LIKE ? OR 
				ucapan_selamat.nama4 LIKE ? OR 
				ucapan_selamat.nama5 LIKE ? OR 
				ucapan_selamat.nama6 LIKE ? OR 
				ucapan_selamat.nama7 LIKE ? OR 
				ucapan_selamat.nama8 LIKE ? OR 
				ucapan_selamat.gelar1 LIKE ? OR 
				ucapan_selamat.gelar2 LIKE ? OR 
				ucapan_selamat.gelar3 LIKE ? OR 
				ucapan_selamat.gelar4 LIKE ? OR 
				ucapan_selamat.gelar5 LIKE ? OR 
				ucapan_selamat.gelar6 LIKE ? OR 
				ucapan_selamat.gelar7 LIKE ? OR 
				ucapan_selamat.gelar8 LIKE ? OR 
				ucapan_selamat.ucapan1 LIKE ? OR 
				ucapan_selamat.ucapan2 LIKE ? OR 
				ucapan_selamat.ucapan3 LIKE ? OR 
				ucapan_selamat.ucapan4 LIKE ? OR 
				ucapan_selamat.ucapan5 LIKE ? OR 
				ucapan_selamat.ucapan6 LIKE ? OR 
				ucapan_selamat.ucapan7 LIKE ? OR 
				ucapan_selamat.ucapan8 LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "ucapan_selamat/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("ucapan_selamat.id", ORDER_TYPE);
		}
		if($fieldname){
			$db->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$tc = $db->withTotalCount();
		$records = $db->get($tablename, $pagination, $fields);
		$records_count = count($records);
		$total_records = intval($tc->totalCount);
		$page_limit = $pagination[1];
		$total_pages = ceil($total_records / $page_limit);
		$data = new stdClass;
		$data->records = $records;
		$data->record_count = $records_count;
		$data->total_records = $total_records;
		$data->total_page = $total_pages;
		if($db->getLastError()){
			$this->set_page_error();
		}
		$page_title = $this->view->page_title = "Ucapan Selamat";
		$this->render_view("ucapan_selamat/list.php", $data); //render the full page
	}
	/**
     * View record detail 
	 * @param $rec_id (select record by table primary key) 
     * @param $value value (select record by value of field name(rec_id))
     * @return BaseView
     */
	function view($rec_id = null, $value = null){
		$request = $this->request;
		$db = $this->GetModel();
		$rec_id = $this->rec_id = urldecode($rec_id);
		$tablename = $this->tablename;
		$fields = array("id", 
			"photo1", 
			"photo2", 
			"photo3", 
			"photo4", 
			"photo5", 
			"photo6", 
			"photo7", 
			"photo8", 
			"nama1", 
			"nama2", 
			"nama3", 
			"nama4", 
			"nama5", 
			"nama6", 
			"nama7", 
			"nama8", 
			"gelar1", 
			"gelar2", 
			"gelar3", 
			"gelar4", 
			"gelar5", 
			"gelar6", 
			"gelar7", 
			"gelar8", 
			"ucapan1", 
			"ucapan2", 
			"ucapan3", 
			"ucapan4", 
			"ucapan5", 
			"ucapan6", 
			"ucapan7", 
			"ucapan8");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("ucapan_selamat.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Ucapan Selamat";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("ucapan_selamat/view.php", $record);
	}
	/**
     * Insert new record to the database table
	 * @param $formdata array() from $_POST
     * @return BaseView
     */
	function add($formdata = null){
		if($formdata){
			$db = $this->GetModel();
			$tablename = $this->tablename;
			$request = $this->request;
			//fillable fields
			$fields = $this->fields = array("photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","nama1","nama2","nama3","nama4","nama5","nama6","nama7","nama8","gelar1","gelar2","gelar3","gelar4","gelar5","gelar6","gelar7","gelar8","ucapan1","ucapan2","ucapan3","ucapan4","ucapan5","ucapan6","ucapan7","ucapan8");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
			);
			$this->sanitize_array = array(
				'nama1' => 'sanitize_string',
				'nama2' => 'sanitize_string',
				'nama3' => 'sanitize_string',
				'nama4' => 'sanitize_string',
				'nama5' => 'sanitize_string',
				'nama6' => 'sanitize_string',
				'nama7' => 'sanitize_string',
				'nama8' => 'sanitize_string',
				'gelar1' => 'sanitize_string',
				'gelar2' => 'sanitize_string',
				'gelar3' => 'sanitize_string',
				'gelar4' => 'sanitize_string',
				'gelar5' => 'sanitize_string',
				'gelar6' => 'sanitize_string',
				'gelar7' => 'sanitize_string',
				'gelar8' => 'sanitize_string',
				'ucapan1' => 'sanitize_string',
				'ucapan2' => 'sanitize_string',
				'ucapan3' => 'sanitize_string',
				'ucapan4' => 'sanitize_string',
				'ucapan5' => 'sanitize_string',
				'ucapan6' => 'sanitize_string',
				'ucapan7' => 'sanitize_string',
				'ucapan8' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("ucapan_selamat");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Ucapan Selamat";
		$this->render_view("ucapan_selamat/add.php");
	}
	/**
     * Update table record with formdata
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function edit($rec_id = null, $formdata = null){
		$request = $this->request;
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		 //editable fields
		$fields = $this->fields = array("id","photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","nama1","nama2","nama3","nama4","nama5","nama6","nama7","nama8","gelar1","gelar2","gelar3","gelar4","gelar5","gelar6","gelar7","gelar8","ucapan1","ucapan2","ucapan3","ucapan4","ucapan5","ucapan6","ucapan7","ucapan8");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
			);
			$this->sanitize_array = array(
				'nama1' => 'sanitize_string',
				'nama2' => 'sanitize_string',
				'nama3' => 'sanitize_string',
				'nama4' => 'sanitize_string',
				'nama5' => 'sanitize_string',
				'nama6' => 'sanitize_string',
				'nama7' => 'sanitize_string',
				'nama8' => 'sanitize_string',
				'gelar1' => 'sanitize_string',
				'gelar2' => 'sanitize_string',
				'gelar3' => 'sanitize_string',
				'gelar4' => 'sanitize_string',
				'gelar5' => 'sanitize_string',
				'gelar6' => 'sanitize_string',
				'gelar7' => 'sanitize_string',
				'gelar8' => 'sanitize_string',
				'ucapan1' => 'sanitize_string',
				'ucapan2' => 'sanitize_string',
				'ucapan3' => 'sanitize_string',
				'ucapan4' => 'sanitize_string',
				'ucapan5' => 'sanitize_string',
				'ucapan6' => 'sanitize_string',
				'ucapan7' => 'sanitize_string',
				'ucapan8' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("ucapan_selamat.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("ucapan_selamat");
				}
				else{
					if($db->getLastError()){
						$this->set_page_error();
					}
					elseif(!$numRows){
						//not an error, but no record was updated
						$page_error = "No record updated";
						$this->set_page_error($page_error);
						$this->set_flash_msg($page_error, "warning");
						return	$this->redirect("ucapan_selamat");
					}
				}
			}
		}
		$db->where("ucapan_selamat.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Ucapan Selamat";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("ucapan_selamat/edit.php", $data);
	}
	/**
     * Update single field
	 * @param $rec_id (select record by table primary key)
	 * @param $formdata array() from $_POST
     * @return array
     */
	function editfield($rec_id = null, $formdata = null){
		$db = $this->GetModel();
		$this->rec_id = $rec_id;
		$tablename = $this->tablename;
		//editable fields
		$fields = $this->fields = array("id","photo1","photo2","photo3","photo4","photo5","photo6","photo7","photo8","nama1","nama2","nama3","nama4","nama5","nama6","nama7","nama8","gelar1","gelar2","gelar3","gelar4","gelar5","gelar6","gelar7","gelar8","ucapan1","ucapan2","ucapan3","ucapan4","ucapan5","ucapan6","ucapan7","ucapan8");
		$page_error = null;
		if($formdata){
			$postdata = array();
			$fieldname = $formdata['name'];
			$fieldvalue = $formdata['value'];
			$postdata[$fieldname] = $fieldvalue;
			$postdata = $this->format_request_data($postdata);
			$this->rules_array = array(
			);
			$this->sanitize_array = array(
				'nama1' => 'sanitize_string',
				'nama2' => 'sanitize_string',
				'nama3' => 'sanitize_string',
				'nama4' => 'sanitize_string',
				'nama5' => 'sanitize_string',
				'nama6' => 'sanitize_string',
				'nama7' => 'sanitize_string',
				'nama8' => 'sanitize_string',
				'gelar1' => 'sanitize_string',
				'gelar2' => 'sanitize_string',
				'gelar3' => 'sanitize_string',
				'gelar4' => 'sanitize_string',
				'gelar5' => 'sanitize_string',
				'gelar6' => 'sanitize_string',
				'gelar7' => 'sanitize_string',
				'gelar8' => 'sanitize_string',
				'ucapan1' => 'sanitize_string',
				'ucapan2' => 'sanitize_string',
				'ucapan3' => 'sanitize_string',
				'ucapan4' => 'sanitize_string',
				'ucapan5' => 'sanitize_string',
				'ucapan6' => 'sanitize_string',
				'ucapan7' => 'sanitize_string',
				'ucapan8' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("ucapan_selamat.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount();
				if($bool && $numRows){
					return render_json(
						array(
							'num_rows' =>$numRows,
							'rec_id' =>$rec_id,
						)
					);
				}
				else{
					if($db->getLastError()){
						$page_error = $db->getLastError();
					}
					elseif(!$numRows){
						$page_error = "No record updated";
					}
					render_error($page_error);
				}
			}
			else{
				render_error($this->view->page_error);
			}
		}
		return null;
	}
	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
     * @return BaseView
     */
	function delete($rec_id = null){
		Csrf::cross_check();
		$request = $this->request;
		$db = $this->GetModel();
		$tablename = $this->tablename;
		$this->rec_id = $rec_id;
		//form multiple delete, split record id separated by comma into array
		$arr_rec_id = array_map('trim', explode(",", $rec_id));
		$db->where("ucapan_selamat.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("ucapan_selamat");
	}
}
