<?php 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    protected $table="blog";
    protected $primaryKey = 'blog_id';
} 