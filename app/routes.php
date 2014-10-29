<?php
$r_p=new RoutePaths; 
$routes=$r_p->routes();
$links=$r_p->anchors();
Route::get('/',function() use ($r_p,$links) {

	return View::make(
		'01admin.index',
		compact('links')
		)
	;

});

foreach ($routes as $l) {
	Route::resource($l,ucfirst(rtrim($l, "s")).'Controller');
}

Route::resource('webservices.profiles','WebserviceProfileController');


