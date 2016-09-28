<?php
/**
 * 
 */
class tree {
	
	public $topnode;
	private $dataSet;
	
	/**
	 * Init
	 * @param [type] $data [description]
	 */
	public function __construct($data) {
		$this->topnode = new node();
		$this->dataSet = $data;
		$this->createTree($this->topnode);
	}
	
	/**
	 * Create tree.
	 * @param  [type] $node [description]
	 * @return [type]       [description]
	 */
	private function createTree($node) {
		foreach($this->dataSet as $key => $value) {
			if($value['id_parent'] == $node->id) {
				$node->addChild(new node($value['id_parent'], $value['id'], $value['name']));
				unset($this->dataSet[$key]);
			}
		}
		foreach($node->children as &$c) {
			$this->createTree($c);
		}
	}
	
	/**
	 * [getNodeById description]
	 * @param  [type] $id   [description]
	 * @param  [type] $node [description]
	 * @return [type]       [description]
	 */
	public function getNodeById($id, $node = null) {
		$node = $node == null ? $this->topnode : $node;
		if($node->id == $id) {
			return $node;
		}
		else {
			foreach($node->children as $c) {
				$res = &$this->getNodeById($id, $c);
				if($res != null) {
					return $res;
				}
			}
		}
	}
	
	/**
	 * Get tree.
	 * @return [type] [description]
	 */
	public function getTree() {
		return $this->topnode;
	}
}
?>
