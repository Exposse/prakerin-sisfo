<?php 
/**
 * Parallax_counter_number Page Controller
 * @category  Controller
 */
class Parallax_counter_numberController extends SecureController{
	function __construct(){
		parent::__construct();
		$this->tablename = "parallax_counter_number";
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
			"judul", 
			"caption", 
			"counter_number1", 
			"counter_number2", 
			"counter_number3", 
			"counter_number4", 
			"cubter_name1", 
			"counter_name2", 
			"counter_name3", 
			"counter_name4", 
			"counter_number5", 
			"counter_number6", 
			"counter_number7", 
			"counter_number8", 
			"counter_name5", 
			"counter_name6", 
			"counter_name7", 
			"counter_name8");
		$pagination = $this->get_pagination(MAX_RECORD_COUNT); // get current pagination e.g array(page_number, page_limit)
		//search table record
		if(!empty($request->search)){
			$text = trim($request->search); 
			$search_condition = "(
				parallax_counter_number.id LIKE ? OR 
				parallax_counter_number.judul LIKE ? OR 
				parallax_counter_number.caption LIKE ? OR 
				parallax_counter_number.counter_number1 LIKE ? OR 
				parallax_counter_number.counter_number2 LIKE ? OR 
				parallax_counter_number.counter_number3 LIKE ? OR 
				parallax_counter_number.counter_number4 LIKE ? OR 
				parallax_counter_number.cubter_name1 LIKE ? OR 
				parallax_counter_number.counter_name2 LIKE ? OR 
				parallax_counter_number.counter_name3 LIKE ? OR 
				parallax_counter_number.counter_name4 LIKE ? OR 
				parallax_counter_number.counter_number5 LIKE ? OR 
				parallax_counter_number.counter_number6 LIKE ? OR 
				parallax_counter_number.counter_number7 LIKE ? OR 
				parallax_counter_number.counter_number8 LIKE ? OR 
				parallax_counter_number.counter_name5 LIKE ? OR 
				parallax_counter_number.counter_name6 LIKE ? OR 
				parallax_counter_number.counter_name7 LIKE ? OR 
				parallax_counter_number.counter_name8 LIKE ?
			)";
			$search_params = array(
				"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
			);
			//setting search conditions
			$db->where($search_condition, $search_params);
			 //template to use when ajax search
			$this->view->search_template = "parallax_counter_number/search.php";
		}
		if(!empty($request->orderby)){
			$orderby = $request->orderby;
			$ordertype = (!empty($request->ordertype) ? $request->ordertype : ORDER_TYPE);
			$db->orderBy($orderby, $ordertype);
		}
		else{
			$db->orderBy("parallax_counter_number.id", ORDER_TYPE);
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
		$page_title = $this->view->page_title = "Parallax Counter Number";
		$this->render_view("parallax_counter_number/list.php", $data); //render the full page
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
			"judul", 
			"caption", 
			"counter_number1", 
			"counter_number2", 
			"counter_number3", 
			"counter_number4", 
			"cubter_name1", 
			"counter_name2", 
			"counter_name3", 
			"counter_name4", 
			"counter_number5", 
			"counter_number6", 
			"counter_number7", 
			"counter_number8", 
			"counter_name5", 
			"counter_name6", 
			"counter_name7", 
			"counter_name8");
		if($value){
			$db->where($rec_id, urldecode($value)); //select record based on field name
		}
		else{
			$db->where("parallax_counter_number.id", $rec_id);; //select record based on primary key
		}
		$record = $db->getOne($tablename, $fields );
		if($record){
			$page_title = $this->view->page_title = "View  Parallax Counter Number";
		}
		else{
			if($db->getLastError()){
				$this->set_page_error();
			}
			else{
				$this->set_page_error("No record found");
			}
		}
		return $this->render_view("parallax_counter_number/view.php", $record);
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
			$fields = $this->fields = array("judul","caption","counter_number1","counter_number2","counter_number3","counter_number4","cubter_name1","counter_name2","counter_name3","counter_name4","counter_number5","counter_number6","counter_number7","counter_number8","counter_name5","counter_name6","counter_name7","counter_name8");
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
			);
			$this->sanitize_array = array(
				'caption' => 'sanitize_string',
				'counter_number1' => 'sanitize_string',
				'counter_number2' => 'sanitize_string',
				'counter_number3' => 'sanitize_string',
				'counter_number4' => 'sanitize_string',
				'cubter_name1' => 'sanitize_string',
				'counter_name2' => 'sanitize_string',
				'counter_name3' => 'sanitize_string',
				'counter_name4' => 'sanitize_string',
				'counter_number5' => 'sanitize_string',
				'counter_number6' => 'sanitize_string',
				'counter_number7' => 'sanitize_string',
				'counter_number8' => 'sanitize_string',
				'counter_name5' => 'sanitize_string',
				'counter_name6' => 'sanitize_string',
				'counter_name7' => 'sanitize_string',
				'counter_name8' => 'sanitize_string',
			);
			$this->filter_vals = true; //set whether to remove empty fields
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$rec_id = $this->rec_id = $db->insert($tablename, $modeldata);
				if($rec_id){
					$this->set_flash_msg("Record added successfully", "success");
					return	$this->redirect("parallax_counter_number");
				}
				else{
					$this->set_page_error();
				}
			}
		}
		$page_title = $this->view->page_title = "Add New Parallax Counter Number";
		$this->render_view("parallax_counter_number/add.php");
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
		$fields = $this->fields = array("id","judul","caption","counter_number1","counter_number2","counter_number3","counter_number4","cubter_name1","counter_name2","counter_name3","counter_name4","counter_number5","counter_number6","counter_number7","counter_number8","counter_name5","counter_name6","counter_name7","counter_name8");
		if($formdata){
			$postdata = $this->format_request_data($formdata);
			$this->rules_array = array(
			);
			$this->sanitize_array = array(
				'caption' => 'sanitize_string',
				'counter_number1' => 'sanitize_string',
				'counter_number2' => 'sanitize_string',
				'counter_number3' => 'sanitize_string',
				'counter_number4' => 'sanitize_string',
				'cubter_name1' => 'sanitize_string',
				'counter_name2' => 'sanitize_string',
				'counter_name3' => 'sanitize_string',
				'counter_name4' => 'sanitize_string',
				'counter_number5' => 'sanitize_string',
				'counter_number6' => 'sanitize_string',
				'counter_number7' => 'sanitize_string',
				'counter_number8' => 'sanitize_string',
				'counter_name5' => 'sanitize_string',
				'counter_name6' => 'sanitize_string',
				'counter_name7' => 'sanitize_string',
				'counter_name8' => 'sanitize_string',
			);
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("parallax_counter_number.id", $rec_id);;
				$bool = $db->update($tablename, $modeldata);
				$numRows = $db->getRowCount(); //number of affected rows. 0 = no record field updated
				if($bool && $numRows){
					$this->set_flash_msg("Record updated successfully", "success");
					return $this->redirect("parallax_counter_number");
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
						return	$this->redirect("parallax_counter_number");
					}
				}
			}
		}
		$db->where("parallax_counter_number.id", $rec_id);;
		$data = $db->getOne($tablename, $fields);
		$page_title = $this->view->page_title = "Edit  Parallax Counter Number";
		if(!$data){
			$this->set_page_error();
		}
		return $this->render_view("parallax_counter_number/edit.php", $data);
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
		$fields = $this->fields = array("id","judul","caption","counter_number1","counter_number2","counter_number3","counter_number4","cubter_name1","counter_name2","counter_name3","counter_name4","counter_number5","counter_number6","counter_number7","counter_number8","counter_name5","counter_name6","counter_name7","counter_name8");
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
				'caption' => 'sanitize_string',
				'counter_number1' => 'sanitize_string',
				'counter_number2' => 'sanitize_string',
				'counter_number3' => 'sanitize_string',
				'counter_number4' => 'sanitize_string',
				'cubter_name1' => 'sanitize_string',
				'counter_name2' => 'sanitize_string',
				'counter_name3' => 'sanitize_string',
				'counter_name4' => 'sanitize_string',
				'counter_number5' => 'sanitize_string',
				'counter_number6' => 'sanitize_string',
				'counter_number7' => 'sanitize_string',
				'counter_number8' => 'sanitize_string',
				'counter_name5' => 'sanitize_string',
				'counter_name6' => 'sanitize_string',
				'counter_name7' => 'sanitize_string',
				'counter_name8' => 'sanitize_string',
			);
			$this->filter_rules = true; //filter validation rules by excluding fields not in the formdata
			$modeldata = $this->modeldata = $this->validate_form($postdata);
			if($this->validated()){
				$db->where("parallax_counter_number.id", $rec_id);;
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
		$db->where("parallax_counter_number.id", $arr_rec_id, "in");
		$bool = $db->delete($tablename);
		if($bool){
			$this->set_flash_msg("Record deleted successfully", "success");
		}
		elseif($db->getLastError()){
			$page_error = $db->getLastError();
			$this->set_flash_msg($page_error, "danger");
		}
		return	$this->redirect("parallax_counter_number");
	}
}
