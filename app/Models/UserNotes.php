<?php
namespace App\Models;
class UserNotes
{

    public $ids;
    public $requ;


    //public function showAllData(){}

    public function setdelete($id){
         $this->ids = $id;

    }

    public function getdelete()
	{
		return $this->ids;
	}
  

    //public function create(){}

    public function settodo_submit($req){

        $this->requ = $req;
    }

    public function gettodo_submit()
	{
		return $this->req;
	}


  //  public function edit(){}

  //  public function edit_submit(){}



}
