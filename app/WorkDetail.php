<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkDetail extends Model
{
  protected $fillable = ['date','image','state'];
    //
    public function work(){
       return $this->hasOne('App\Work');
     }

     public function scopeid($query, $id){
if ($id)
  // code...
return $query->where('id', 'LIKE', "%$id%");

     }
      public function scopedate($query, $date){
     if ($date)
       // code...
     return $query->where('date', 'LIKE', "%$date%");

          }
          public function scopestate($query, $state){
          if ($state)
            // code...
          return $query->where('state', 'LIKE', "%$state%");

               }
}
