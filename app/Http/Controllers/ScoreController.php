<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ScoreController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::select('id', 'name', 'class', 'score')->orderBy('name')->paginate(10);

        return Inertia::render('Score/index', [
            'scores' => $scores
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $score
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: add selesai tapi belum ada verifikasi dll
        Score::create([
            'name' => $request->name,
            'score' => [
                'MTK' => $request->score['math'],
                'Bhs. Indonesia' => $request->score['indo'],
                'Bhs. Inggris' => $request->score['eng'],
                'Kompetensi' => $request->score['komp'],
            ],
            'class' => $request->class
        ]);

        return Redirect::route('scores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
