<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService
{
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    /**
     * ProjectService constructor.
     * @param ProjectRepository $projectRepository
     */
    public function __construct(ProjectRepository $projectRepository
    )
    {
        $this->projectRepository = $projectRepository;
    }

    public function getProjectsList()
    {

    }
}
