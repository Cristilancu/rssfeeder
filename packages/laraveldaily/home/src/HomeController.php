<?php

namespace Laraveldaily\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function index() {

      	if (!Schema::hasTable('feeds')) {
        	Schema::create('feeds', function ($table) {
        	  $table->increments('id');
        	  $table->string('source', 255);
        	  $table->string('url', 255);
        	  $table->string('category', 255);
        	  $table->timestamps();
        	});
      	}

      	$rows = DB::table('feeds')->orderBy('category','asc')->get();
      	$categories = DB::table('feeds')->groupBy('category')->select('category')->get();
    	return view('home::home', compact('categories', 'rows'));
    }

    public function detail($id) {
    	dd($id);
    	return view('home::detail');
    }
}
