<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class create_table_import_by_air extends Model
{
  //protected $fillable = ['name','origin','etd','eta_port','eta_aiia',];
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
