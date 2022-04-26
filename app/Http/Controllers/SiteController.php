<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;

class siteController extends Controller
{
    public function index() {

//        return Catalog::all();


        return view('index', [
            'restaurants' => Restaurant::all()
        ]);
    }

    public function shops() {
        return view('shops', [
            'shops' => Shop::all()
        ]);
    }

    public function catalogPage($id) {

        $shop = Shop::query()
            ->where('id', $id)
            ->with('product')->first();


        $populars = Product::query()
            ->where('shop_id', $shop->id)
            ->where('category', 'Популярное')
            ->get();

        $sales = Product::query()
            ->where('shop_id', $shop->id)
            ->where('category', 'Скидка')
            ->get();


        return view('page', [
            'shop' => $shop,
            'populars' => $populars,
            'sales' => $sales,
            'shops' => Shop::all()
        ]);

    }

    public function restaurantPage($id) {

        $restaurant = Restaurant::query()
            ->where('id', $id)
            ->with('menu')->first();

        $populars = Menu::query()
            ->where('restaurant_id', $restaurant->id)
            ->where('category', 'Популярное')
            ->get();

        $sales = Menu::query()
            ->where('restaurant_id', $restaurant->id)
            ->where('category', 'Скидка')
            ->get();

        return view('pages', [
            'restaurant' => $restaurant,
            'populars' => $populars,
            'sales' => $sales,
            'restaurants' => Restaurant::all()
        ]);

    }
    public function login() {
        return view('login');
    }

    public function post_login(Request $request) {
        $request->validate([
           'phone' => ['required', 'digits:11'],
           'password' => 'required'
        ]);

        if (Auth::attempt($request->only(['phone', 'password'])))
            return redirect()->route('index');

        return back()->withErrors([
            'phone' => 'Неверный логин или пароль'
        ]);

    }

    public function register() {
        return view('register');
    }

    public function post_register(Request $request) {
        $request->validate([
           'name' => ['required', 'alpha'],
           'phone' => ['required', 'unique:users', 'digits:11'],
           'password' => 'required'
        ]);

        User::query()->create([
                'password' => Hash::make($request->get('password'))
            ] + $request->only([
            'name',
            'phone',
            'password'
        ]));

        return redirect()->route('login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('index');
    }

    public function basket() {
        return view('basket');
    }
}
