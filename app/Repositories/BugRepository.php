<?php

namespace App\Repositories;

use Touhidurabir\ModelRepository\BaseRepository;
use App\Models\Bug;

class BugRepository extends BaseRepository {

	/**
     * Constructor to bind model to repo
     *
     * @param  object<App\Models\Bug> $bug
     * @return void
     */
    public function __construct(Bug $bug) {

        $this->model = $bug;

        $this->modelClass = get_class($bug);
    }

}
