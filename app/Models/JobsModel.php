<?php

namespace App\Models;

use CodeIgniter\Model;

class JobsModel extends Model
{
    protected $table = 'jobs';
	protected $allowedFields = ['title', 'slug', 'description', 'min-qualification', 'body', 'vacancy', 'sdate', 'ldate', 'application-fee'];
	
public function getJobs($slug = false)
{
    if ($slug === false)
    {
        return $this->findAll();
    }

    return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
}
	
}

