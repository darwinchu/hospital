<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    protected $casts = [
    	
    ];

    public static function store($request, $item = null, $columns = []) {
    	if(!count($columns)) {
    		$columns = [
				'name',
				'location',
				'case',
				'type',
				'responder',
				'responder_contact',
				'responder_recieved',
				'status',
				'alpha',
				'time_of_call',
				'purpose',
				'age',
				'gender',
				'number_1085',
				'area',
				'refby',
				'number_1084',
				'profile',
				'tl',
				'td_1085',
				'cc',
				'tl_1085',
				'td',
				'kmr',
				'md',
				'crew',
				'rr_nurse',
				'rfb_no',
				'76_breakdown',
				'76_tb',
				'76_secured',
				'account',
    		];
    	}

    	$vars = $request->only($columns);

    	if($item) {
    		$item->update($vars);
    	}else {
    		$item = static::create($vars);
    	}

    	return $item;
    }
}
