<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use App\Models\Course;
use App\Http\Resources\v1\Course as CourseResources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class CourseController extends Controller
{


    public function index()
    {
        $courses = Course::paginate(3);
        return CourseResources::collection($courses);


    }


    public function single(Request $request)
    {

        //throw new CourseIsPrivateException();
        $course = Course::findorFail($request->id);
        return new CourseResources($course);
    }

    public function store(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'title' => 'required|max:255',
                'body' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json([
                'data' =>
                    $validator->errors()
            ], 422);
        }


        return $request->all();
    }


}
