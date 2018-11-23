<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;

class WishlistController extends Controller
{
    public function index() {
        $wishlists = Wishlist::where('user_id', auth()->id())->get();
        return view('wishlists.index', compact('wishlists'));
    }

    public function create(request $request) {
        $wishlist = new Wishlist;
        $wishlist->title = $request->text;
        $wishlist->user_id = auth()->id();
        $wishlist->save();
        return 'done';
    }

    public function delete(request $request) {

        Wishlist::where('id', $request->id)->delete();
        return $request->all();
    }

    public function update(request $request) {

        $wishlist = Wishlist::find($request->id);
        $wishlist->title = $request->value;
        $wishlist->save();
        return $request->all();
    }

    public function edit(Wishlist $wishlist) {
        return view('wishlists.edit')->withWishlist($wishlist);
    }
}
