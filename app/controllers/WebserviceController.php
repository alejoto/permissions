<?php
class WebservicesData{
	public function all () {
		return Webservice::all();
	}
}

class WebserviceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /webservice
	 *
	 * @return Response
	 */
	public function index()
	{
		$d=new WebservicesData;
		$data=array(
			'webservices'=>$d->all()
			)
		;
		return View::make('webservices.index',$data);


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /webservice/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$data=array();
		return View::make('webservices.create',$data);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /webservice
	 *
	 * @return Response
	 */
	public function store()
	{
		$n=new Webservice;
		$n->name=Input::get('name');
		$n->url=Input::get('url');
		$n->description=Input::get('description');
		$n->save();
		return 'success';
	}

	/**
	 * Display the specified resource.
	 * GET /webservice/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data=array();
		return View::make('webservices.show',$data);

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /webservice/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data=array();
		return View::make('webservices.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /webservice/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /webservice/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}