<?php

namespace App\Controllers;
use App\Models\JobsModel;
use CodeIgniter\Controller;

class Home extends Controller
{
public function index(){
    $model = new JobsModel();

    $data = [
        'jobs'  => $model->getjobs(),
        'title' => 'Latest Govt. & Private India Jobs | Exams | Preparation',
        'description' => 'Govt India Jobs is a premiere website to get the latest updates about govt and private jobs exams and vacancy. Employers can also post their jobs and recruitment.', 
        'url' => 'https://www.govtindjobs.com/',
        'img' => ''
    ];

    echo view('templates/header', $data);
    echo view('templates/left-sidebar',$data);
    echo view('jobs/overview', $data);
    echo view('templates/right-sidebar',$data);
    echo view('templates/footer', $data);
}
public function view($slug = NULL){
    $model = new JobsModel();

    $data['jobs'] = $model->getJobs($slug);
    

    if (empty($data['jobs']))
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the job item: '. $slug);
    }

    $data['title'] = $data['jobs']['title'];
    $data['description'] = $data['jobs']['description'];
    $data['slug'] = $data['jobs']['slug'];


    echo view('templates/header2', $data);
    echo view('templates/left-sidebar',$data);
    echo view('jobs/view', $data);
    echo view('templates/right-sidebar',$data);
    echo view('templates/footer', $data);
      
}
public function create(){
    $model = new JobsModel();

    if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'description' => 'required',
            'min-qualification' => 'required',
            'body'  => 'required',
            'vacancy' => 'required',
            'sdate' => 'required',
            'ldate' => 'required',
			'application-fee' => 'required'
        ]))
    {
        $model->save([
            'title' => $this->request->getPost('title'),
            'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
            'description' => $this->request->getPost('description'),
            'min-qualification' => $this->request->getPost('min-qualification'),
            'body'  => $this->request->getPost('body'),
            'vacancy' => $this->request->getPost('vacancy'),
            'sdate' => $this->request->getPost('sdate'),
            'ldate' => $this->request->getPost('ldate'), 
			'application-fee' => $this->request->getPost('application-fee')     
        ]);

        echo view('jobs/success');

    }
    else
    {
        echo view('templates/header1', ['title' => 'Create a new job post']);
        echo view('templates/left-sidebar');
        echo view('jobs/create');
        echo view('templates/right-sidebar');
        echo view('templates/footer');
    }
}


}