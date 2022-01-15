<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    // protected $guarded = []; kalo guarded tuh field2 apa aja yang gak boleh. tapi daripada pake guard mending pake fillable karna kita tau apa aja yang boleh diisi
    protected $fillable = ['task'];
}
