<?php

namespace App\Repositories;

use Touhidurabir\ModelRepository\BaseRepository;
use App\Models\Category;

class CategoryRepository extends BaseRepository {

	/**
     * Constructor to bind model to repo
     *
     * @param  object<App\Models\Category> $category
     * @return void
     */
    public function __construct(Category $category) {

        $this->model = $category;

        $this->modelClass = get_class($category);
    }

}
