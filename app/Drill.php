<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    // DBで間違っても変更させたくないカラム(ユーザーID、管理者権限など) にはロックをかけておくことができる
    //ロックの掛け方にはfillableかguardedの二種類がある。
    // どちらしか指定できない。

    protected $fillable = ['title', 'category_name', 'problem0', 'problem1', 'problem2', 'problem3', 'problem4', 'problem5', 'problem6', 'problem7', 'problem8', 'problem9'];

    
}
