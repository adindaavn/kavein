<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index() 
    {
        $data['menu'] = Menu::get();
        return view('menu.index')->with($data);
    }

    public function beverages() 
    {
        $data['menu'] = Menu::get();
        return view('menu.beverages')->with($data);
    }

    public function dessert() 
    {
        $data['menu'] = Menu::get();
        return view('menu.dessert')->with($data);
    }

    public function store(StoreMenuRequest $request)
    {
        $image = $request->file('image');
        $filename = date('Y-m-d') .  $image->getClientOriginalName();
        $path = 'menu-image/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($image));

        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'image' => $filename,
        ];

        Menu::create($data);
        return redirect('menu')->with('success', 'Menu added!');
    }

    public function update(UpdateMenuRequest $request, $id)
    {
        if ($request->file('image')) {
            if ($request->old_image) {
                Storage::disk('public')->delete('menu-image/' . $request->old_image);
            }

            $image = $request->file('image');
            $filename = date('Y-m-d') .  $image->getClientOriginalName();
            $path = 'menu-image/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($image));

            $data['image'] = $filename;
        }


        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
        ];

        Menu::find($id)->update($data);
        return redirect('menu')->with('success', 'Menu updated!');
    }

    public function destroy(Menu $menu, $id)
    {
        if ($menu->image) {
            Storage::disk('public')->delete('menu-image/' . $menu->image);
        }

        $menu->where('id', $id)->delete();
        return redirect('menu')->with('success', 'Menu deleted!');
    }
}