<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class import_by_sea extends Model
{
    protected $guarded=[];

    public function getetdAttribute($date)
    {
      return new Carbon($date);
    }
    public function getetaportAttribute($date)
    {
      return new Carbon($date);
    }
    public function getetaaiiaAttribute($date)
    {
      return new Carbon($date);
    }
    public function setetdAttribute($date)
    {
      $this->attributes['etd']=Carbon::createFromFormat('Y-m-d',$date);
    }
    public function setetaportAttribute($date)
    {
      $this->attributes['eta_port']=Carbon::createFromFormat('Y-m-d',$date);
    }
    public function setetaaiiaAttribute($date)
    {
      $this->attributes['eta_aiia']=Carbon::createFromFormat('Y-m-d',$date);
    }
}
