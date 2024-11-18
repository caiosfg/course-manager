<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Http\Resources\CourseResource;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * @OA\Get(
     *     path="/api/v1/courses",
     *     tags={"courses"},
     *     summary="Get all courses",
     *     description="Get all courses",
     *     @OA\Response(response=200, description="successful operation", @OA\JsonContent(ref="#/components/schemas/Course"))
     * )
     */
    public function index()
    {
        return CourseResource::collection(Course::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * @OA\Schema(
     *    schema="StoreCourseRequest",
     *    type="object",
     *    required={"name", "category", "active", "start_date", "end_date", "vacancies",  "price"},
     *    @OA\Property(property="name", type="string"),
     *    @OA\Property(property="category", type="string", example="easy"),
     *    @OA\Property(property="active", type="boolean"),
     *    @OA\Property(property="start_date", type="string", example="2021-01-01"),
     *    @OA\Property(property="end_date", type="string", example="2021-01-01"),
     *    @OA\Property(property="vacancies", type="integer"),
     *    @OA\Property(property="price", type="float", example="123.0"),
     * )
     * @OA\Post(
     *   path="/api/v1/courses",
     *   summary="Create a new course",
     *   tags={"courses"},
     *   @OA\RequestBody(@OA\JsonContent(ref="#/components/schemas/Course")),
     *   @OA\Response(response=200, description="Successful Operation")
     * )
     */
    public function store(StoreCourseRequest $request)
    {
        $course = Course::create($request->validated());
        
        return CourseResource::make($course);
    }

    /**
     * Display the specified resource.
     */
    /**
     * @OA\Get(
     *   path="/api/v1/courses/{id}",
     *   summary="Get a specified course",
     *   tags={"courses"},
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *   ),
     *   @OA\Response(response=200, description="Successful Operation")
     * )
     */
    public function show(Course $course)
    {
        return CourseResource::make($course);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * @OA\Schema(
     *    schema="UpdateCourseRequest",
     *    type="object",
     *    required={"name", "category", "active", "start_date", "end_date", "vacancies",  "price"},
     *    @OA\Property(property="name", type="string"),
     *    @OA\Property(property="category", type="string", example="easy"),
     *    @OA\Property(property="active", type="boolean"),
     *    @OA\Property(property="start_date", type="string", example="2021-01-01"),
     *    @OA\Property(property="end_date", type="string", example="2021-01-01"),
     *    @OA\Property(property="vacancies", type="integer"),
     *    @OA\Property(property="price", type="float", example="123.0"),
     * )
     * @OA\Put(
     *   path="/api/v1/courses/{id}",
     *   summary="Update a course",
     *   tags={"courses"},
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *   ),
     *   @OA\RequestBody(@OA\JsonContent(ref="#/components/schemas/Course")),
     *   @OA\Response(response=200, description="Successful Operation"),
     *   @OA\Response(response=400, description="invalid data", @OA\JsonContent())
     * )
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return CourseResource::make($course);
    }

    /**
     * Remove the specified resource from storage.
     */
    /**
     * @OA\Delete(
     *   path="/api/v1/courses/{id}",
     *   summary="Delete a course",
     *   tags={"courses"},
     *   @OA\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *          @OA\Schema(
     *              type="integer"
     *          )
     *   ),
     *   @OA\Response(response=200, description="Successful Operation")
     * )
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return response()->noContent();
    }
}
