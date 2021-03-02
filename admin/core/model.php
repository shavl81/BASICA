<?php

class CModel {

	public $link;

	public function __construct() {
		$connectData = array (
			'dbserver' => 'localhost',
			'dbuser' => 'root',
			'dbname' => 'basica',
			'dbpass' => 'root',
		);
		$this->link = mysqli_connect($connectData['dbserver'], $connectData['dbuser'], $connectData['dbpass'], $connectData['dbname']);
		if (mysqli_connect_errno()) {
			echo "Подключение не возможно: " . mysqli_connect_error();
		}
	}

	public function GetData($type, $arData) {

		if ($type == 'users') {
			$sql = 'SELECT * FROM employee ORDER BY '.$arData['ORDERBY'].' '.$arData['ORDER'].' LIMIT 0,'.$arData['LIMIT'];
			$res = mysqli_query($this->link, $sql);
			while ($arRes = mysqli_fetch_assoc($res)) {
				$arResult[] = $arRes;
			}
		}
		if ($type == 'useredit') {
			$sql = 'SELECT * FROM employee WHERE id = '.$arData['user_id'];
			$res = mysqli_query($this->link, $sql);
			if ($arRes = mysqli_fetch_assoc($res)) {
				$arResult = $arRes;
			}
		}
		return $arResult;
	}

	public function GetMenu() {
		$sql = 'SELECT * FROM menu ORDER BY sort ASC';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arMenu[] = $arRes;
		}
		return $arMenu;
	}

	public function GetContact() {
		$sql = 'SELECT * FROM options';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arContact[] = $arRes;
		}
		return $arContact;
	}

	public function GetAllOptions() {
		$sql = 'SELECT * FROM options';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arResult[] = $arRes;
		}
		return $arResult;
	}

	public function SetOptions($option_name, $option_value) {
		$option_value = mysqli_real_escape_string($this->link, $option_value);
		$sql = "UPDATE options SET value = '$option_value' WHERE name = '$option_name' ";
		$res = mysqli_query($this->link, $sql);
	}

	public function GetEmployee() {
		$sql = 'SELECT * FROM employee';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arEmployee[] = $arRes;
		}
		return $arEmployee;
	}

	public function GetRecentPost() {
		$sql = 'SELECT * FROM blog ORDER BY date DESC LIMIT 4';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arGetRecentPost[] = $arRes;
		}
		return $arGetRecentPost;
	}

	public function GetCategoryPost() {
		$sql = 'SELECT * FROM category';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$GetCategoryPost[] = $arRes;
		}
		return $GetCategoryPost;
	}

	public function SetData() {

	}
}


 ?>