<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Favorites;

class FavoritesController extends Controller
{
  public function showFavorites()
    {
        $userId=Auth::id();
        $FavoritesProducts = DB::table('favorites')
            ->join('products', 'favorites.id_products', '=', 'products.id')
            ->where('favorites.id_users', $userId)
            ->select('products.*')
            ->get();
        return view('layouts.FavoritesPage', compact('FavoritesProducts'));
    }

  public function addFavorites($id)
  {
      $userId=Auth::id();

      $existingFavorite = DB::table('favorites')
          ->where('id_users', $userId)
          ->where('id_products', $id)
          ->first();

      if ($existingFavorite) {
          return response()->json(['message' => 'Товар уже добавлен в избранное']);
    }

      DB::table('favorites')->insert(['id_users' => $userId, 'id_products' => $id]);
      return response()->json(['message' => 'Товар успешно добавлен в избранное']);
  }
}
