<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseFetchController as Controller;
use App\Models\Patient;

use Carbon\Carbon;

class PatientFetchController extends Controller
{
    /**
     * Set object class of fetched data
     * 
     * @return void
     */
    public function setObjectClass()
    {
        $this->class = new Patient;
    }

    /**
     * Custom filtering of query
     * 
     * @param Illuminate\Support\Facades\DB $query
     * @return Illuminate\Support\Facades\DB $query
     */
    public function filterQuery($query)
    {
        /**
         * Queries
         * 
         */

        if($this->request->filled('search')) {
            $query = $query->where('name', 'LIKE', '%' . $this->request->input('search') . '%');
        }

        return $query;
    }

    /**
     * Custom formatting of data
     * 
     * @param Illuminate\Support\Collection $items
     * @return array $result
     */
    public function formatData($items)
    {
        $result = [];

        foreach($items as $index => $item) {
            $items[$index]->created_date = $items[$index]->created_at->format('Y-m-d H:i');
            $items[$index]->showUrl = route('patients.show', $items[$index]->id);
            $items[$index]->destroyUrl = route('patients.destroy', $items[$index]->id);
            $items[$index]->printUrl = route('patients.print', $items[$index]->id);
        }

        return $items;
    }

    /**
     * Build array data
     * 
     * @param  App\Contracts\AvailablePosition
     * @return array
     */
    protected function formatItem($item)
    {
        return [];
    }

    public function fetchView($id = null) {
        $item = [];

        if ($id) {
            $item = Patient::withTrashed()->findOrFail($id);
        }

        return response()->json([
            'item' => $item,
        ]);
    }
}
