<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Movie extends Model
{
    protected $table = 'movies';
    protected $fillable = ['name','description'];
    protected $guarded = ['id'];

    
public function store(Request $Request)
{
	$movie = new Movie;
	$movie->create($request->all());
	return redirect('movie');
}
}
/*
public function store(Request $Request)
{
	$movie = new Movie;
	$movie->name = $request->name;
	$movie->description = $request->description;
	$movie->save();
	return redirect('movie');


}*/
