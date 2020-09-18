<?php
/**
 * @Created by 666.
 * @User: yuankaiguo
 * @Date: 2020/9/18
 * @Time: 11:36
 */

require_once "vendor/autoload.php";

class TestClass {
	public function index() {
		$obj = new WxMerChantKs\Test();
		var_dump($obj->index());
	}
}

(new TestClass())->index();