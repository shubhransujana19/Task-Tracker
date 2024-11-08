<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public static function getAllJobs(): array {
        $jobs = [
            [ 'id' => '1','title' => 'Programmer', 'salary' => '50k'],
            [ 'id' => '2','title' => 'Teacher', 'salary' => '50k'],
            [ 'id' => '3','title' => 'Manager', 'salary' => '50k']
        ];
        return $jobs;        
    }

    public static function find(int $id):array {
       $job = Arr::first(static::getAllJobs(), fn($job) => $job['id'] == $id );

       if (! $job) {
            abort(404);
       }
        return $job;
    }
}
