<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\ApplicantAnswer;

class GuestQualificationController extends Controller
{
    public function index()
    {
        $positions = Position::all();
        return view('qualification.index', compact('positions'));
    }

    public function create($id)
    {
        $position = Position::where('id','=',$id)->first();
        return view('qualification.create', compact('position'));
    }

    public function storeAnswer(Request $request, $id)
    {
        $latest = Registration::select('id')->latest()->first();

        $applicant_answers = [];

        foreach ($request->qualification as $item => $key) {
            $applicant_answers[] = ([
                'registration_id' => $latest->id,
                'position_id' => $id,
                'qualification' => $request->qualification[$item],
                'points' => $request->points[$item],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        ApplicantAnswer::insert($applicant_answers);

        return dd('saved');
    }
}
