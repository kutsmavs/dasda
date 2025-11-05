<?php 
 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model; 
 
class MsClient extends Model 
{ 
    use HasFactory; 
 
    protected $table = 'ms_clients'; 
 
    protected $fillable = [ 
        'ms_fullname', 
        'ms_student_number', 
        'ms_course', 
        'ms_email', 
        'ms_contact_number', 
        'ms_gender', 
        'ms_birthday', 
        'ms_additional_info', 
    ]; 
 
    protected $casts = [ 
        'ms_birthday' => 'date', 
    ]; 
}