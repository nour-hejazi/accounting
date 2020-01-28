<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

    public function index()
    {
        $title = trans('titles.items_index');
        $items = Item::orderBy('created_at', 'desc')->get();

        return view('admin.items.index', compact('title', 'items'));
    }

    public function create()
    {
        $title = trans('titles.items_create');

        return view('admin.items.create', compact('title'));
    }

    public function store(Request $request)
    {

        $data = $this->validate($request, [
            'name' => 'required',
            'type' => '',
            'code' => 'unique:items',
            'description' => '',
            'capital' => '',
            'sale_price' => '',
        ]);

        Item::create($data);
        session()->flash('success', trans('session.item_record_stored'));

        return redirect(adminUrl('items'));
    }


    public function show(Item $item)
    {
        $title = trans('titles.items_show');

        return view('admin.items.show', compact('title', 'item'));
    }

    public function edit(Item $item)
    {
        $title = trans('titles.items_edit');

        return view('admin.items.edit', compact('title', 'item'));
    }

    public function update(Request $request, Item $item)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'type' => '',
            'code' => 'unique:items,code,' . $item->id,
            'description' => '',
            'capital' => '',
            'sale_price' => '',
        ]);

        Item::where('id', $item->id)->update($data);
        session()->flash('success', trans('session.item_record_updated'));

        return redirect(adminUrl('items/' . $item->id));
    }

    public function destroy(Item $item)
    {
        Item::find($item->id)->delete();
        session()->flash('success', trans('session.items_record_deleted'));

        return redirect(adminUrl('items'));
    }
}
