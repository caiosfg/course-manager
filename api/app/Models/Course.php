<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    /**
     * @OA\Schema(
     *     @OA\Xml(name="CourseResource"),
     *    @OA\Property(
     *          property="name",
     *          type="string",
     *          example="English"
     *    ),
     *    @OA\Property(
     *          property="category",
     *          type="string",
     *          example="EASY"
     *    ),
     *    @OA\Property(
     *          property="active",
     *          type="boolean",
     *          example="true"
     *    ),
     *    @OA\Property(
     *          property="start_date",
     *          type="datetime",
     *          example="2018-05-08"
     *    ),
     *    @OA\Property(
     *          property="end_date",
     *          type="datetime",
     *          example="2018-05-08"
     *    ),
     *    @OA\Property(
     *          property="vacancies",
     *          type="integer",
     *          example="1"
     *    ),
     *    @OA\Property(
     *          property="price",
     *          type="float",
     *          example="123.0"
     *    ),
     * )
     */
class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'active',
        'start_date',
        'end_date',
        'vacancies',
        'price'
    ];
}
