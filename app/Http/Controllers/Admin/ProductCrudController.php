<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
    }


    protected function setupListOperation()
    {
        // CRUD::setFromDb();
        $this->crud->addColumn(['name' => 'umkm_id', 'type' => 'select', 'label' => 'UMKM','entity' => 'umkm', 'attribute' => 'name', 'model' => 'App\Models\Umkm']);
        $this->crud->addColumn(['name' => 'name', 'type' => 'text']);
        $this->crud->addColumn(['name' => 'photo', 'type' => 'image','disk' => 'public']);
        $this->crud->addColumn(['name' => 'price', 'type' => 'number']);
        $this->crud->addColumn(['name' => 'unit_type', 'type' => 'text']);

    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'name' => 'required|min:2',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,bmp|max:500',
            'price' => 'required|min:2|numeric',
            'unit_type' => 'required|min:2',
        ]);

        CRUD::field('umkm_id')->label('UMKM Name')->type('select')->entity('umkm')->attribute('name')->model('App\Models\Umkm');
        CRUD::field('name')->label('Product Name')->type('text');
        CRUD::field('price')->type('number')->suffix('IDR')->prefix('Rp')->decimals(2)->dec_point(',')->thousands_sep('.');
        CRUD::field('unit_type')
        ->label('Unit Product')
        ->type('select_from_array')
        ->options([
            'Pcs' => 'Pcs (Potongan)',
            'pkt' => 'packet (Paket)',
            'btl' => 'bottle (Botol)',
            'jar' => 'jar (Toples)',
            'kg' => 'Kg (Kilogram)',
            'g' => 'G (Gram)',
            'l' => 'L (Liter)',
            'm' => 'M (Meter)',
            'cm' => 'cm (Centimeter)',
            'mm' => 'mm (Millimeter)',
            'gal' => 'gallon',
            'doz' => 'dozen (Lusin)',
        ]);

        CRUD::field('photo')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'products',
        ]);

    }

    protected function setupShowOperation()
    {

        $this->setupListOperation();
    }

    protected function setupDeleteOperation()
    {
        CRUD::field('photo')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
