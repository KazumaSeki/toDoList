<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $gureded = ['id'];
    protected $fillable =['task_name', 'task_discription', 'assign_person_name', 'estimate_hour'];
}
