<?php
class ModelArticleCategory extends Model {
	// public function addCategory($data) {
	// 	$category_id = "acdefghik";
	// 	return $category_id;
	// }

	// public function editCategory($category_id, $data) {
		
	// }

	// public function deleteCategory($category_id) {
		
	// }

	// public function getCategory($category_id) {
	// 	$query = $this->db->query("SELECT distinct * FROM " . DB_PREFIX . "article_category where id=".$category_id);
	// 	return $query->row;
	// }

	public function getCategories($data = array()) {
		$sql = "SELECT * FROM " . DB_PREFIX . "article_category";

		
		$query = $this->db->query($sql);

		return $query->rows;
	}
}