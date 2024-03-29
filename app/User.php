<?php

namespace App;

use App\Models\Campus;
use App\Models\Course;
use App\Models\Position;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $appends = ['position', 'campus', 'course'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status', 'position_id', 'campus_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function getPositionAttribute()
    {
        return Position::find($this->position_id);
    }

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }

    public function getCampusAttribute()
    {
        return Campus::find($this->campus_id);
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id');
    }

    public function getCourseAttribute()
    {
        $user_courses = DB::table('user_course')->where('user_id', '=', $this->id)->get();
        $courses = array();
        foreach ($user_courses as $user_course) {
            $course = DB::table('course')->where('id', '=', $user_course->course_id)->first();
            array_push($courses, $course);
        }
        return $courses;
    }

}
