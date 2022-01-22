<?php

namespace App\Repositories;

use Touhidurabir\ModelRepository\BaseRepository;
use App\Models\Project;

class ProjectRepository extends BaseRepository {

	/**
     * Constructor to bind model to repo
     *
     * @param  object<App\Models\Project> $project
     * @return void
     */
    public function __construct(Project $project) {

        $this->model = $project;

        $this->modelClass = get_class($project);
    }

}
