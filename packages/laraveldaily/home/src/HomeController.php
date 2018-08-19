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
      	// $detail = DB::table('feeds')->where('id',1299)->get();
      	// $detail = DB::table('feeds')->where('id',777)->get();768
      	$rows = DB::table('feeds')->orderBy('category','asc')->get();
      	$categories = DB::table('feeds')->groupBy('category')->select('category')->get();
		
		$rss = new \DOMDocument();
		$url = str_replace(' ', '', $detail[0]->url);
		// $rss->load('http://wordpress.org/news/feed/');
		// $rss->load('https://www.guru.com/rss/jobs/c/programming-dev/');
		// $rss = file_get_contents($url);
		// $rss = simplexml_load_file($url);
		// dd($rss);
		$rss->load($url);
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $key => $node) {
			if ($key > 9) {
				break;
			}
			$item = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->length ? html_entity_decode($node->getElementsByTagName('description')->item(0)->nodeValue) : '',
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
				);
			array_push($feed, $item);
		}
		// dd($feed);
		// $limit = 5;

		// for($x=0;$x<$limit;$x++) {
		// 	$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		// 	$link = $feed[$x]['link'];
		// 	$description = $feed[$x]['desc'];
		// 	$date = date('l F d, Y', strtotime($feed[$x]['date']));
		// 	echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		// 	echo '<small><em>Posted on '.$date.'</em></small></p>';
		// 	echo '<p>'.$description.'</p>';
		// }
    	return view('home::detail', compact('feed', 'id'));
    }

    public function load($id, $limit) {
    	$detail = DB::table('feeds')->where('id', $id)->get();

    	$rss = new \DOMDocument();
		$url = str_replace(' ', '', $detail[0]->url);
		$rss->load($url);
		$feed = array();
		foreach ($rss->getElementsByTagName('item') as $key => $node) {
			if ($key > $limit + 4) {
				break;
			}
			if ($key < $limit) {
				continue;
			}
			$item = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->length ? html_entity_decode($node->getElementsByTagName('description')->item(0)->nodeValue) : '',
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
				);
			array_push($feed, $item);
		}
		return json_encode($feed);
    }
}
