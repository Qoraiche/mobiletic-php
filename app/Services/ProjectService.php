<?php

namespace App\Services;

use App\Models\Project;
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

    /**
     * @return mixed
     */
    public function getProjectsOrderByTotalAnomalies()
    {
        // Project::orderByTotalBugs();
        return Project::orderByAnomaliesCount()->get();
    }
}
