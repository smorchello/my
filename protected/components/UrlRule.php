<?php
class UrlRule extends CBaseUrlRule {
	public function createUrl($manager, $route, $params, $ampersand) {
		return false; // не применяем данное правило
	}
	public function parseUrl($manager, $request, $pathInfo, $rawPathInfo) {
		// print_r ( $request );
		$model = Page::model ()->find ( array (
				'select' => 'id',
				'condition' => 'url=:url',
				'params' => array (
						':url' => $request->requestUri 
				) 
		) );
		if ($model != null)
			return "page/index/id/" . $model->id;
		return false; // не применяем данное правило
	}
}