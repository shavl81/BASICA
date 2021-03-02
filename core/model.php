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

		if ($type == 'news') {
			$sql = 'SELECT * FROM news ORDER BY '.$arData['ORDERBY'].' '.$arData['ORDER'].' LIMIT 0,'.$arData['LIMIT'];
			$res = mysqli_query($this->link, $sql);
			while ($arRes = mysqli_fetch_assoc($res)) {
				$arResult[] = $arRes;
			}
		}
		if ($type == 'newspost') {
			$sql = 'SELECT * FROM news WHERE id = '.$arData['news_id'];
			$res = mysqli_query($this->link, $sql);
			if ($arRes = mysqli_fetch_assoc($res)) {
				$arResult = $arRes;
			}
		}
		if ($type == 'blog') {
			$sql = 'SELECT * FROM blog ORDER BY '.$arData['ORDERBY'].' '.$arData['ORDER'].' LIMIT 0,'.$arData['LIMIT'];
			$res = mysqli_query($this->link, $sql);
			while ($arRes = mysqli_fetch_assoc($res)) {
				$arResult[] = $arRes;
			}
		}
		if ($type == 'blogpost') {
			$sql = 'SELECT * FROM blog WHERE id = '.$arData['blog_id'];
			$res = mysqli_query($this->link, $sql);
			if ($arRes = mysqli_fetch_assoc($res)) {
				$arResult = $arRes;
			}
		}
		if ($type == 'contacts') {
			$sql = 'SELECT * FROM options';
			$res = mysqli_query($this->link, $sql);
			while ($arRes = mysqli_fetch_assoc($res)){
				$arResult[] = $arRes;
			}
		}
		if ($type == 'about') {
			$sql = 'SELECT * FROM about';
			$res = mysqli_query($this->link, $sql);
			if ($arRes = mysqli_fetch_assoc($res)) {
				$arResult = $arRes;
			}
		}
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

	public function GetAdminMenu() {
		$sql = 'SELECT * FROM adminmenu ORDER BY sort ASC';
		$res = mysqli_query($this->link, $sql);
		while ($arRes = mysqli_fetch_assoc($res)){
			$arAdminMenu[] = $arRes;
		}
		return $arAdminMenu;
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

	public function SetUserEdit($id, $img, $name, $function, $facebook, $git, $twitter) {
		$sql = "UPDATE `employee` SET `img` = '$img', `name` = '$name', `function` = '$function', `facebook` = '$facebook', `git` = '$git', `twitter` = '$twitter' WHERE `employee`.`id` = '$id'";
		$res = mysqli_query($this->link, $sql);
	}

	public function SetNewsEdit($id, $img, $title, $text) {
		$sql = "UPDATE `news` SET `img` = '$img', `title` = '$title', `text` = '$text' WHERE `news`.`id` = '$id'";
		$res = mysqli_query($this->link, $sql);
	}
	public function SetNewsAdd($dat) {
		$news = R::dispense('news');
		$news->img = '';
		$news->title = $dat['title'];
		$news->text = $dat['text'];
		$news->date = date("Y-m-d");
		$news->author = $dat['author'];
		R::store($news);
	}

	public function SetBlogEdit($id, $img, $title, $text) {
		$sql = "UPDATE `blog` SET `img` = '$img', `title` = '$title', `text` = '$text' WHERE `blog`.`id` = '$id'";
		$res = mysqli_query($this->link, $sql);
	}

	public function SetBlogAdd($dat) {
		$blog = R::dispense('blog');
		$blog->img = '';
		$blog->title = $dat['title'];
		$blog->text = $dat['text'];
		$blog->date = date("Y-m-d");
		$blog->author = $dat['author'];
		R::store($blog);
	}

	public function SetBlogDelete($id) {
		$sql = "DELETE FROM `blog` WHERE `id` = '$id'";
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