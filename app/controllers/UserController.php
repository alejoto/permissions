<?php
class UserData{

	public function header() {
		return array( 
			array('email',1)
			)
		;
		
	}
	public function all(){
		return User::all();
	}

	//find resource
	public function show ($id) {
		return User::find($id);
	}

	public function profile () {
		return URL::to('users');
	}
}

class UserController extends \BaseController {

	public function __construct(UserData $d){
		//return $d;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$d=new UserData;

		$data=array(
			'users'		=>$d->all(),
			'header'	=>$d->header(),
			'profile'   =>$d->profile()
			)
		;
		return View::make('user.index',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data=array();
		return View::make('user.create',$data);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$d=new UserData;
		$user=$d->show($id);
		try{
			if ($d->show($id)==null) {
				throw new Exception("error");
			}
		}
		catch (Exception $e){
			return 'resource does not exist anymore';
		}
		
		return View::make(
			'user.show',
			compact(
				'id',
				'user'
				)
			)
		;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data=array();
		return View::make('user.edit',$data);
	}


	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
