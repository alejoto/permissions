<?php

class WebserviceProfileData {
	public function find ($webservice_id) {
		return Webservice::find($webservice_id);
	}
}

class WebserviceProfileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /webserviceprofile
	 *
	 * @return Response
	 */
	public function index($webservice_id)
	{
		$d=new WebserviceProfileData;
		$data=array(
			'webservice'=>$d->find($webservice_id),
			'webservice_id'=>$webservice_id
			)
		;
		//return $webservice_id;
		return View::make('WebservicesProfiles.index'
			,$data
			);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /webserviceprofile/create
	 *
	 * @return Response
	 */
	public function create($webservice_id)
	{
		$d=new WebserviceProfileData;
		$data=array(
			'webservice_id'=>$webservice_id,
			'webservice'=>$d->find($webservice_id)
			)
		;
		return View::make('WebservicesProfiles.create',$data);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /webserviceprofile
	 *
	 * @return Response
	 */
	public function store($webservice_id)
	{
		$n=new Profile;
		$n->name=Input::get('name');
		$n->description=Input::get('description');
		$n->webservice_id=$webservice_id;
		$n->save();
		return Redirect::to('webservices/'.$webservice_id.'/profiles');
	}

	/**
	 * Display the specified resource.
	 * GET /webserviceprofile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($webservice_id,$id)
	{
		$data=array();
		return View::make('WebservicesProfiles.show',$data);

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /webserviceprofile/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($webservice_id,$id)
	{
		$data=array();
		return View::make('WebservicesProfiles.edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /webserviceprofile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($webservice_id,$id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /webserviceprofile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($webservice_id,$id)
	{
		//
	}

}