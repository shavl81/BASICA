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

	public function GetAdminMenu() {
		$data = new CModel();
		$result = $data->GetAdminMenu();
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

	public function SetUserEdit($id, $img, $name, $function, $facebook, $git, $twitter) {
		$data = new CModel();
		$result = $data->SetUserEdit($id, $img, $name, $function, $facebook, $git, $twitter);
		return $result;
	}
	public function SetUserAdd($dat) {
		$data = new CModel();
		$result = $data->SetUserAdd($dat);
		return $result;
	}

	public function GetRecentNews() {
		$data = new CModel();
		$result = $data->GetRecentNews();
		return $result;
	}

	public function SetNewsEdit($id, $img, $title, $text) {
		$data = new CModel();
		$result = $data->SetNewsEdit($id, $img, $title, $text);
		return $result;
	}
	public function SetNewsAdd($dat) {
		$data = new CModel();
		$result = $data->SetNewsAdd($dat);
		return $result;
	}


	public function SetBlogEdit($id, $img, $title, $text) {
		$data = new CModel();
		$result = $data->SetBlogEdit($id, $img, $title, $text);
		return $result;
	}

	public function SetBlogAdd($dat) {
		$data = new CModel();
		$result = $data->SetBlogAdd($dat);
		return $result;
	}

	public function SetBlogDelete($id) {
		$data = new CModel();
		$result = $data->SetBlogDelete($id);
		return $result;
	}

	public function GetEmployee() {
		$data = new CModel();
		$result = $data->GetEmployee();
		return $result;
	}

	public function GetCountEmployee() {
		$data = new CModel();
		$result = $data->GetCountEmployee();
		return $result;
	}

	public function GetRecentPost() {
		$data = new CModel();
		$result = $data->GetRecentPost();
		return $result;
	}

	public function GetCountPost() {
		$data = new CModel();
		$result = $data->GetCountPost();
		return $result;
	}

	public function GetCountNews() {
		$data = new CModel();
		$result = $data->GetCountNews();
		return $result;
	}

	public function GetCategoryPost() {
		$data = new CModel();
		$result = $data->GetCategoryPost();
		return $result;
	}

	public function SetPage($pagetype, $arParams) {
		if ($pagetype == 'news') {
			$arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('../view/news.php');
		}
		if ($pagetype == 'newspost') {
			$arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('../view/newspost.php');
		}
		if ($pagetype == 'main') {
			// $arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('view/main.php');
		}
		if ($pagetype == 'contacts') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/contacts.php');
		}
		if ($pagetype == 'about') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/about.php');
		}
		if ($pagetype == 'blog') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/blog.php');
		}
		if ($pagetype == 'blogpost') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/blogpost.php');
		}
		// if ($pagetype == 'admin') {
		// 	$arResult = $this->GetData($pagetype, $arParams);
		// 	include ('../admin/view/index.php');
		// }
		if ($pagetype == 'dashboard') {
			// $arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('../view/dashboard.php');
		}
		if ($pagetype == 'menu') {
			// $arResult = $this->GetData($pagetype, $arParams);
			// pr($arResult);
			include ('../view/menu.php');
		}
		if ($pagetype == 'users') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/users.php');
		}
		if ($pagetype == 'useredit') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/useredit.php');
		}
		if ($pagetype == 'settings') {
			$arResult = $this->GetData($pagetype, $arParams);
			include ('../view/settings.php');
		}
		// if ($pagetype == 'useredit') {
		// 	$arResult = $this->GetData($pagetype, $arParams);
		// 	include ('../view/useredit.php');
		// }

		return $arResult;
	}
}

?>