<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;
    public $product;
    public $title;
    public $price;
    public $stock;
    public $image;
    public $categories;
    public $category;
    public $code;
    public $description;

    protected $rules = [
        'title' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'category' => 'required',
        'code' => 'required',

    ];

    public function mount()
    {
        $this->title = $this->product->title;
        $this->price = $this->product->price;
        $this->stock = $this->product->stock;
        $this->description = $this->product->description;
        $this->code = $this->product->code;
        $this->category = $this->product->category->pluck('id');
    }

    public function editProduct()
    {
        $this->validate();

        if ($this->image) {

            if ($this->product->image) {

                Storage::delete('products/' . $this->product->image);
            }

            $file = $this->image;

            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $location = 'products/' . $imageName;
            $img = Image::make($file);

            $img->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->sharpen(6)->save($location);

            $this->product->update([
                'title' => $this->title,
                'price' => $this->price,
                'stock' => $this->stock,
                'code' => $this->code,
                'slug' => Str::slug($this->title),
                'description' => $this->description,
                'image' => $imageName,
            ]);
        } else {
            $this->product->update([
                'title' => $this->title,
                'price' => $this->price,
                'stock' => $this->stock,
                'code' => $this->code,
                'slug' => Str::slug($this->title),
                'description' => $this->description,
            ]);
        }

        $this->product->category()->sync($this->category);

        $this->emit('updatedProduct');

        session()->flash('success', 'Product Details Updated Successfully 😃!');
    }

    public function render()
    {
        return view('livewire.admin.edit-product');
    }
}
