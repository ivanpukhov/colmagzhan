<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$json = Storage::disk('local')->get('/json/news.json');
		$news = json_decode($json, true);

		foreach ($news as $news) {
			News::query()->updateOrCreate([
				'title' => $news['title'],
				'href' => $news['href'],
				'text' => $news['text'],
				'date' => $news['date']
			]);
		}
	}
}
