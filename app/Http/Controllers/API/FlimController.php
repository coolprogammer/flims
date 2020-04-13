<?php

namespace App\Http\Controllers\API;

use App\Flim;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class FlimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get flims with coments
        $flims = Flim::with('comments')->get();
        // return json response
        return response()->json([
            'flims' => $flims,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveFlim(Request $request)
    {
        // Validations
        $rules = [
            'name' => 'required|min:5',
            'description' => 'required|min:10',
            'country' => 'required|string',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            // Validation failed
            return response()->json([
                'message' => $validator->messages(),
            ]);
        } else {
            $postArray = [
                'name' => $request->name,
                'description' => $request->description,
                'realease_date' => $request->realease_date,
                'rating' => $request->rating,
                'ticket_price' => $request->ticket_price,
                'country' => $request->country,
                'genre' => $request->genre,
                'photo' => $request->photo,
            ];
            // create the flim record
            $flim = Flim::create($postArray);
            // check if comment create
            if ($flim) {
                return response()->json([
                    'message' => 'successfully created.',
                ]);
            } else {
                return response()->json([
                    'message' => 'please try again.',
                ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showFlim(Request $request)
    {
        // Validations
        $rules = [
            'flim_id' => 'required|integer|min:1',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            // Validation failed
            return response()->json([
                'message' => $validator->messages(),
            ]);
        } else {
            // get flims with coments
            $flim = Flim::where('id', $request->flim_id)->with('comments')->get();
            // return json response
            return response()->json([
                'flim' => $flim,
            ]);

            // check if comment create
            if ($flim) {
                return response()->json([
                    'message' => 'successfully created.',
                ]);
            } else {
                return response()->json([
                    'message' => 'please try again.',
                ]);
            }
        }

    }

}
