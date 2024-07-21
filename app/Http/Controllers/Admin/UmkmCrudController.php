<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UmkmRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class UmkmCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class UmkmCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Umkm::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/umkm');
        CRUD::setEntityNameStrings('umkm', 'Shop');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'slug', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'category', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'logo', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'halal-sertification', 'type' => 'boolean']);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'name' => 'required|min:2',
            'slug' => 'required|unique:articles,slug,',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:500',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:500',
            'description' => 'required|min:10',
            'category' => 'required|min:2',
            'address' => 'required|min:10',
            'phone' => 'required|min:10|max:13',
            'googlemap' => 'required|min:2',
        ]);

        CRUD::field('name');
        CRUD::field('slug');
        CRUD::field('category')
            ->type('select_from_array')
            ->options([
                'Makanan' => 'Makanan',
                'Minuman' => 'Minuman',
                'Jasa Layanan' => 'Jasa Layanan',
                'Wisata' => 'Wisata',
                'Kuliner' => 'Kuliner',
                'Penginapan' => 'Penginapan',
                'Percetakan' => 'Percetakan',
                'Barang Bekas' => 'Barang Bekas',
                'Lainnya' => 'Lainnya',
            ]);

        CRUD::field('logo')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'logo',
        ]);

        CRUD::field('image')
        ->type('upload')
        ->withFiles([
            'disk' => 'public',
            'path' => 'umkm',
        ]);

        CRUD::field('description')->type('text');
        CRUD::field('address')->type('text');
        CRUD::field('phone')->type('text');
        CRUD::field('googlemap')->type('text');
        CRUD::field('halal-sertification')->type('checkbox');
    }


    protected function setupShowOperation()
    {
        $this->crud->addColumn(['name' => 'name', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'category', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'slug', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'logo', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'image', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'description', 'type' => 'textarea']);
        $this->crud->addColumn(['name' => 'address', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'phone', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'googlemap', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'halal-sertification', 'type' => 'boolean']);
    }

    protected function setupDeleteOperation()
    {
        CRUD::field('image')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
        ]);

        CRUD::field('logo')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
