<?php

class CController {

	public function __construct() {

	}

	public function GetData($pagetype, $arParams) {

		$data = new CModel();
		$result = $data->GetData($pagetype, $arParams);

		return $result;
	}

	public function GetMenu() {
		$data = new CModel();
		$result = $data->GetMenu();
		return $result;
	}

	public function GetContact() {
		$data = new CModel();
		$result = $data->GetContact();
		return $result;
	}

	public function GetAllOptions() {
		$data = new CModel();
		$result = $data->GetAllOptions();
		return $result;
	}

	public function SetOptions($option_name, $option_value) {
		$data = new CModel();
		$result = $data->SetOptions($option_name, $option_value);
		return $result;
	}

	public function GetEmployee() {
		$data = new CModel();
		$result = $data->GetEmployee();
		return $result;
	}

	public function GetRecentPost() {
		$data = new CModel();
		$result = $data->GetRecentPost();
		return $result;
	}

	public function GetCategoryPost() {
		$data = new CModel();
		$result = $data->GetCategoryPost();
		return $result;
	}

	public function SetPage($pagetype, $arParams) {

		// if ($pagetype == 'admin') {
		// 	$arResult = $this->GetData($pagetype, $arParams);
		// 	include ('../admin/view/index.php');
		// }
		if ($pagetype == 'admin') {
			// $arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('view/dashboard.php');
		}
		if ($pagetype == 'users') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../admin/view/users.php');
		}
		if ($pagetype == 'useredit') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/useredit.php');
		}

		return $arResult;
	}
}

?>