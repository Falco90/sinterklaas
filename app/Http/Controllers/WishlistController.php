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
}
