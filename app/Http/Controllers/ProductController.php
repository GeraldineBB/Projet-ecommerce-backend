<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Category;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * URL : /products
     *
     * Méthode permettant la récupération de toutes les tâches
     * au format JSON
     *
     * @return void
     */
    public function list()
    {
        // On récupère toutes les entrées de la table 'product'
        // SELECT * FROM products;
        // SELECT * FROM products;

        // https://laravel.com/docs/6.x/eloquent#retrieving-models
        $productsList = Product::all();


        // en utilisant lumen notre API s'attend à avoir une réponse
        // pour avoir une réponse on utilise la fonction response
        // la réponse est vide : il faut lui indiquer ce qu'on veut mettre à l'intérieur
        // on appelle la méthode json : cette requete vide tu vas la transformer en format json, et tu vas dire dans ta réponse que c'est du json
        return response()->json($productsList);
    }
}
