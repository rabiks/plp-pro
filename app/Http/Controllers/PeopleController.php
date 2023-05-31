<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::all();
        return response()->json($people, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = People::find($id);
        if ($person) {
            return response()->json($person, 200);
        } else {
            return response()->json(['message' => 'Person not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = People::find($id);
        if ($person) {
            $person->phone = $request->input('phone');
            $person->save();

            return response()->json($person, 200);
        } else {
            return response()->json(['message' => 'Person not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = People::find($id);
        if ($person) {
            $person->delete();
            return response()->json(['message' => 'Person deleted'], 204);
        } else {
            return response()->json(['message' => 'Person not found'], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new People;
        $person->name = $request->input('name');
        $person->email = $request->input('email');
        $person->phone = $request->input('phone');
        // Uzupełnij resztę właściwości

        $person->save();

        return response()->json($person, 201);
    }
}
