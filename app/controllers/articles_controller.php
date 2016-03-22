<?php 
class ArticlesController extends AppController {

	var $name = 'Articles';

	var $helpers = array('Fck');

	public function beforeFilter() {
	  parent::beforeFilter();
	  $this->Auth->allow('index', 'view');
	}

	function index() {
		$this->Article->recursive = 0;

		$conditions = $this->params['category'] == 'all' ? null : ['category' => $this->params['category']];

		$this->paginate = array('Article' => array(
				'order' => 'Article.id desc',
				'limit' => 200
		));

		$this->set('articles', $this->paginate($conditions));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid article', true));
			$this->redirect(array('action' => 'index'));
		}

		$this->set('article', $this->Article->read(null, $id));
	}

	function tags($tag = null) {
		if (is_null($tag)) {
			$this->Session->setFlash(__('Invalid article', true));
			$this->redirect(array('action' => 'index'));
		}

		$this->paginate = array('Article' => array(
			'order' => 'Article.id desc',
			'limit' => 200
		));

		// TODO : optimization
		$this->set('articles', $this->paginate(array("Article.tags like '%%{$tag}%%'")));

		$this->render("index");
	}

	function admin_index() {
		$this->Article->recursive = 0;
		$this->set('articles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid article', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('article', $this->Article->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Article->create();
			if ($this->Article->save($this->data)) {
				$this->Session->setFlash(__('The article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid article', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Article->save($this->data)) {
				$this->Session->setFlash(__('The article has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Article->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for article', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Article->delete($id)) {
			$this->Session->setFlash(__('Article deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Article was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>