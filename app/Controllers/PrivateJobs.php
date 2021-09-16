<?php

namespace App\Controllers;
use App\Models\PrivateJobsModel;
use CodeIgniter\Controller;

class PrivateJObs extends Controller
{
    public function index(){
        $model = new PrivateJobsModel();
    
        $data = [
            'jobs'  => $model->getjobs(),
            'title' => 'Browse private jobs | Are you an employer? Post jobs for free',
            'description' => 'GOvt India Jobs is a premiere website to get the latest updates about jobs exams and vacancy. We also post current affiars, GK and Computer Science',
            'url' => 'https://www.govtindjobs.com/',
            'img' => ''
        ];
    
        echo view('templates/private/header', $data);
        echo view('templates/private/left-sidebar',$data);
        echo view('private/jobs/overview', $data);
        echo view('templates/private/right-sidebar',$data);
        echo view('templates/private/footer', $data);
    }

public function view($slug = NULL){
    $model = new PrivateJobsModel();

    $data['jobs'] = $model->getJobs($slug);
    

    if (empty($data['jobs']))
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the job item: '. $slug);
    }

    $data['title'] = $data['jobs']['title'];
    $data['description'] = $data['jobs']['description'];
    $data['slug'] = $data['jobs']['slug'];


    echo view('templates/private/header2', $data);
    echo view('templates/private/left-sidebar',$data);
    echo view('private/jobs/view', $data);
    echo view('templates/private/right-sidebar',$data);
    echo view('templates/private/footer', $data);
      
}
public function create(){
    $model = new PrivateJobsModel();

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

        echo view('private/jobs/success');

    }
    else
    {
        echo view('templates/private/header1', ['title' => 'Post your private job']);
        echo view('templates/private/left-sidebar');
        echo view('private/jobs/create');
        echo view('templates/private/right-sidebar');
        echo view('templates/private/footer');
    }
}
}