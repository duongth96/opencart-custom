<?php
class ControllerCommonHome extends Controller {
	public function index() {
		// $this->document->setTitle($this->config->get('config_meta_title'));
		// $this->document->setDescription($this->config->get('config_meta_description'));
		// $this->document->setKeywords($this->config->get('config_meta_keyword'));

		// if (isset($this->request->get['route'])) {
		// 	$this->document->addLink($this->config->get('config_url'), 'canonical');
		// }
        $data = [];
		// $data['column_left'] = $this->load->controller('common/column_left');
		// $data['column_right'] = $this->load->controller('common/column_right');
		// $data['content_top'] = $this->load->controller('common/content_top');
		// $data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$images = array(
			'jane' => DIR_IMAGE."jane.jpg"
			// 'avatar_girl2'        => $location_info['name'],
			// 'avatar_smoke'     => nl2br($location_info['address']),
			// 'bandmember'     => $location_info['geocode'],
			// 'girl_hat'   => $location_info['telephone'],
			// 'jeans'         => $location_info['fax'],
			// 'man_hat'       => $image,
			// 'runway'        => nl2br($location_info['open']),
			// 'team1'     => $location_info['comment'],
			// 'team4'     => $location_info['comment'],
			// 'workshop'     => $location_info['comment']
		);
		$data["images"] = $images;

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
