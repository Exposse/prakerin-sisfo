<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * login_role_option_list Model Action
     * @return array
     */
	function login_role_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT admin AS value,admin AS label FROM list_admin ORDER BY admin ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * login_user_name_value_exist Model Action
     * @return array
     */
	function login_user_name_value_exist($val){
		$db = $this->GetModel();
		$db->where("user_name", $val);
		$exist = $db->has("login");
		return $exist;
	}

	/**
     * login_email_value_exist Model Action
     * @return array
     */
	function login_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("login");
		return $exist;
	}

	/**
     * surat_masuk_lampiran_option_list Model Action
     * @return array
     */
	function surat_masuk_lampiran_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT lampiran AS value,lampiran AS label FROM list_surat ORDER BY lampiran ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * surat_masuk_sifat_surat_option_list Model Action
     * @return array
     */
	function surat_masuk_sifat_surat_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT sifat_surat AS value,sifat_surat AS label FROM list_surat ORDER BY sifat_surat ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * surat_masuk_surat_dari_option_list Model Action
     * @return array
     */
	function surat_masuk_surat_dari_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT surat_dari AS value,surat_dari AS label FROM list_surat ORDER BY surat_dari ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * surat_masuk_disampaikan_kpd_option_list Model Action
     * @return array
     */
	function surat_masuk_disampaikan_kpd_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT disampaikan_kpd AS value,disampaikan_kpd AS label FROM list_surat ORDER BY disampaikan_kpd ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * surat_masuk_disposisi_option_list Model Action
     * @return array
     */
	function surat_masuk_disposisi_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT  DISTINCT disposisi AS value,disposisi AS label FROM list_surat ORDER BY disposisi ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

}
