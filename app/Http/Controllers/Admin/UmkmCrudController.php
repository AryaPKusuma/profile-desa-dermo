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
        CRUD::setEntityNameStrings('umkm', 'umkm');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
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
                'Lainnya' => 'Lainnya',
            ]);

        CRUD::field('logo')
            ->type('upload')
            ->withFiles([
                'disk' => 'public',
                'path' => 'umkm',
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
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
