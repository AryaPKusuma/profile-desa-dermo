<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductFeatureRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductFeatureCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductFeatureCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ProductFeature::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product-feature');
        CRUD::setEntityNameStrings('product feature', 'product features');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'umkm_id', 'type' => 'select', 'label' => 'UMKM','entity' => 'umkm', 'attribute' => 'name', 'model' => 'App\Models\Umkm']);
        $this->crud->addColumn(['name' => 'header', 'label' => 'Judul', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'content', 'label' => 'Deskripsi', 'type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'header' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        CRUD::field('umkm_id')->label('UMKM Name')->type('select')->entity('umkm')->attribute('name')->model('App\Models\Umkm');
        CRUD::field('header')->label('Header (judul singkat tentang keunggulan yang dimiliki)')->type('text');
        CRUD::field('content')->label('Content (deskripsikan kenunggulan)')->type('text');
    }


    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
