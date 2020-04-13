<?php

namespace App\Http\Controllers\API;

use App\Comment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Validator;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveComment(Request $request)
    {
        // get user detail
        $token = $request->header('Authorization');
        $user = User::where('api_token', $token)->first();
        // Validations
        $rules = [
            'name' => 'required|min:5',
            'comment' => 'required|min:10',
            'flim_id' => 'required|integer|min:1',
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
                'comment' => $request->comment,
                'user_id' => $user->id,
                'flim_id' => $request->flim_id,
            ];
            $comment = Comment::create($postArray);
            // check if comment create
            if ($comment) {
                return response()->json([
                    'message' => 'successfully added comment',

                ]);
            } else {
                return response()->json([
                    'message' => 'please try again.',
                ]);
            }
        }
    }

}
