<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\JobsModel;
 
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        
        //echo "Welcome back, ".$session->get('user_name');
        echo view('dashboard');
    }
}