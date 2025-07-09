<?php

namespace App\Services;

use Illuminate\Http\Request;

class TaskQuery{
    protected $params = [
        'categoryId' => ['eq'],
        'done' => ['eq'],
    ];

    protected $columnMap = [
        'categoryId' => 'category_id',
        'done' => 'done',
    ];

    protected $operatorMap = [
        'eq' => '=',
    ];

    public function transform(Request $request){
        $eloQuery = [];

        foreach ($this->params as $key => $operators) {
            $query = $request->query($key);

            if (!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$key] ?? $key;


            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
                }
            }

        }
        return $eloQuery;
    }
}
