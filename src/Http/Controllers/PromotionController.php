<?php

namespace AvoRed\Promotion\Http\Controllers;

use AvoRed\Promotion\DataGrid\Promotion;
use AvoRed\Promotion\Http\Requests\PromotionRequest;
use Illuminate\Http\Request;
use AvoRed\Promotion\Models\Database\Promotion as PromotionModel;
use App\Http\Controllers\Controller;


class PromotionController extends Controller
{
    public function index() {

        $dataGrid = new Promotion(PromotionModel::query());
        return view('avored-promotion::promotion.index')->with('dataGrid', $dataGrid->dataGrid);
    }

    public function create() {

        return view('avored-promotion::promotion.create');
    }

    public function store(PromotionRequest $request) {

        PromotionModel::create($request->all());

        return redirect()->route('admin.promotion.index');
    }
}
