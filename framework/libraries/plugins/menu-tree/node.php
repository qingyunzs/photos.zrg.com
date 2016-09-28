<?php
/**
 * 节点类
 */
class node {
	
	public $name;
	public $id;
	public $parent;
	public $children;
	
	/**
	 * Initialize
	 * @param [type] $parent [description]
	 * @param [type] $id     [description]
	 * @param [type] $name   [description]
	 */
	public function __construct($parent, $id, $name) {
		$this->parent = $parent;
		$this->id = $id;
		$this->name = $name;
		$this->children = array();
	}
	
	/**
	 * Add child node.
	 * @param [type] $node [description]
	 */
	public function addChild($node) {
		$this->children[] = $node;
	}
	
	/**
	 * Delete child node.
	 * @param  [type] $i [description]
	 * @return [type]    [description]
	 */
	public function deleteChild($i) {
		if(exists($this->children[$i])) {
			unset($this->children[$i]);
		}
	}
}
?>