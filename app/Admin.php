<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model 
{
    //garded id bech hata 7ad maynajem ybadel yzid Id (par exemple bech mayab3athech fel form id)
    protected $guarded = ['id'];
}