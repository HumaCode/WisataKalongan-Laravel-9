<?php



namespace App\Http\Controllers;



use App\Models\Destinasi;

use App\Models\Order;

use Carbon\Carbon;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Intervention\Image\Facades\Image;





class TiketController extends Controller

{

    public function index(Request $request)

    {

        $data = [

            "title" => "Tiket Wisata"

        ];

        return view("user.tiket", $data);
    }
}
