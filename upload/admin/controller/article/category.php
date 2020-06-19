<?php
class ControllerArticleCategory extends Controller{
	private $error = array();

	public function index() {
		$this->load->language('article/category');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('article/category');
		$data = array();
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$data['contents'] = $this->model_article_category->getCategories();

		
		$this->response->setOutput($this->load->view('article/category_list', $data));
	}
}