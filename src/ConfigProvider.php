<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\config;

use houdunwang\framework\build\Provider;

class ConfigProvider extends Provider {

	//延迟加载
	public $defer = false;

	public function register() {
		$this->app->single( 'Config', function ( $app ) {
			return new Config( $app );
		} );
	}
}