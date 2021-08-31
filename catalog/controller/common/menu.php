<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}
		
		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			//if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'category_id' => $category['category_id'],
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			//}
		}

		$data['infomenu'] = [
			[
				'name' => 'Главная',
				'href' => 'index.php?route=common/home'
			],
			[
				'name' => 'О нас',
				'href' => 'index.php?route=information/information&information_id=4'
			],
			[
				'name' => 'Производители',
				'href' => 'index.php?route=product/manufacturer'				
			],
			[
				'name' => 'Доставка',
				'href' => 'index.php?route=information/information&information_id=6'				
			],
			[
				'name' => 'Контакты',
				'href' => 'index.php?route=information/contact'
			]
		];

		return $this->load->view('common/menu', $data);
	}
}
