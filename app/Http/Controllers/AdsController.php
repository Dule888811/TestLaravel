<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    private $adsRepositories;
    public function __construct(AdsRepositoriesInterface $adsRepositories)
    {
        $this->adsRepositories = $adsRepositories;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'max:5000000max:5000000|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100,max_width=1050,max_height=1000'
        ]);
        $this->adsRepositories->store($request);
        return redirect()->route('home');
    }
}
