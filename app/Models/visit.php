<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visit extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'doctor_id', 'patient_id', 'date'
  ];
}
