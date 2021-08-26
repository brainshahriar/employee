<?php namespace App\Controllers;
use App\Models\StudentModel;


class StudentController extends BaseController
{
	public function index()
	{
        $students = new StudentModel();
        $data['students']=$students->findAll();
		return view('students/index.php',$data);
	}
    public function create ()
    {
        return view ('students/create');
    }
    public function store()
    {
        $students = new StudentModel();
        $data = [
           'Name'=>$this->request->getPost('Name'),
           'email'=>$this->request-> getPost('email'),
           'phone'=>$this-> request-> getPost('phone'),
           'course'=>$this-> request-> getPost('course')
        ];
        $students->save($data);
        return redirect('students')->with('status','Student Inserted Successfully') ;
    }
    public function edit( $Id = null)
    {
        $students = new StudentModel();
        $data['students']=$students->find($Id);
        return view('students/edit',$data);
    }
    public function update($Id = null)
    {
        $students = new StudentModel();
        $data = [
            'Name'=>$this->request->getPost('Name'),
            'email'=>$this->request-> getPost('email'),
            'phone'=>$this-> request-> getPost('phone'),
            'course'=>$this-> request-> getPost('course')
        ];
        $students->update($Id,$data);
        return redirect()->to(base_url('students'))->with('status','Student Updated Successfully');

    }
    public function delete($Id = null)
    {
        $students =new StudentModel();
        $students->delete($Id);
        return redirect()->back()->with('status','student Deleted Successfully !!!');
    }
}