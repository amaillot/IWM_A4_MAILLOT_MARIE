<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();

        /*        dump($items);*/
            return view('item.index', compact('items', 'selections'));
    }

    /**
     * Filtre
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($filtre)
    {

        $itemsFiltre = Item::find($filtre);

        dump($itemsFiltre);

        return view('item.index', compact('itemsFiltre'));

    }

    /**
     * Get Ajax
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        $env = $request->request->get('env');

        $id = $request->request->get('id');

        $nouvelItem = Item::find($id);

        return response()->json(['success'=> compact('nouvelItem')]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        return view('item.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('Image')) {
            $char = 'abcdefghijklmnopqrstuvwxyz0123456789';
            $newfilename = str_shuffle($char).'.jpg';

            $request->file('Image')->move(public_path("/images"), $newfilename);

            $item = (new Item())->fill($request->all());
            $path = 'images/' . $newfilename;
            $item->Image = $path;
            $item->save();

            return redirect()->route('items.index', $item->id);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
