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
      	$detail = DB::table('feeds')->where('id', $id)->get();
      	$rows = DB::table('feeds')->orderBy('category','asc')->get();
      	$categories = DB::table('feeds')->groupBy('category')->select('category')->get();
		
		$rss = new \DOMDocument();
		$rss->load('http://wordpress.org/news/feed/');
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $node) {
			$item = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
				);
			array_push($feed, $item);
		}
		$limit = 5;

		for($x=0;$x<$limit;$x++) {
			$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
			$link = $feed[$x]['link'];
			$description = $feed[$x]['desc'];
			$date = date('l F d, Y', strtotime($feed[$x]['date']));
			echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
			echo '<small><em>Posted on '.$date.'</em></small></p>';
			echo '<p>'.$description.'</p>';
		}
    	return view('home::detail', compact('detail'));
    }
}
