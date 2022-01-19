<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $nums_range = range(1, 99);
        shuffle($nums_range);
        $bingo_range = array_splice($nums_range, 0, 24);
        return $bingo_range;
    }
}
