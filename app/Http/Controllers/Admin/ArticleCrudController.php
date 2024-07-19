<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ArticleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/article');
        CRUD::setEntityNameStrings('article', 'articles');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'slug', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'image', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'published_at', 'type' => 'date']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'name' => 'required|min:3|max:255',
            'slug' => 'required|unique:articles,slug,regex:/^[^\s]*$/,',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:500',
            'content' => 'required',
            'published_at' => 'required|date',
        ]);

        CRUD::field('name');
        CRUD::field('slug');
        CRUD::field('image')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads',
        ]);
        CRUD::field('published_at')->type('date');
        CRUD::field('content')->type('summernote');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupDeleteOperation()
    {
        CRUD::field('image')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
        ]);
    }

    protected function setupShowOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'slug', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'image', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'content', 'type' => 'summernote']);
        $this->crud->addColumn(['name' => 'published_at', 'type' => 'date']);
    }
}
