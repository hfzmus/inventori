<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public $products, $name, $part_number, $starting, $received, $shipped, $on_hand, $min_stock;

    public $updateProduct = false;

    public function render()
    {
        $this->products = ModelsProduct::all();
        return view('livewire.product');
    }

    protected $rules = [
        'name'        => 'required',
        'part_number' => 'required',
        'starting'    => 'required',
        'received'    => 'required',
        'shipped'     => 'required',
        'on_hand'     => 'required',
        'min_stock'   => 'required',
    ];

    public function resetFields()
    {
        $this->name        = '';
        $this->part_number = '';
        $this->starting    = '';
        $this->received    = '';
        $this->shipped     = '';
        $this->on_hand     = '';
        $this->min_stock   = '';
    }

    public function store()
    {
        // Validate Form Request
        $this->validate();
        try {
            // Create Product
            ModelsProduct::create([
                'name'        => $this->name,
                'part_number' => $this->part_number,
                'starting'    => $this->starting,
                'received'    => $this->received,
                'shipped'     => $this->shipped,
                'on_hand'     => $this->on_hand,
                'min_stock'   => $this->min_stock,
            ]);

            // Set Flash Message
            session()->flash('success', 'Product Created Successfully!!');
            // Reset Form Fields After Creating Product
            $this->resetFields();
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error', 'Something goes wrong while creating product!!');
            // Reset Form Fields After Creating Product
            $this->resetFields();
        }
    }
}
