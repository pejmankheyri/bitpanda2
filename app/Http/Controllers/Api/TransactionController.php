<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionListResource;
use App\Repositories\Contracts\ISourceCSV;
use App\Repositories\Contracts\ISourceSQL;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    protected $sourceCSVs;
    protected $sourceSQLs;

    public function __construct(
        ISourceCSV $sourceCSVs, 
        ISourceSQL $sourceSQLs
    )
    {
        $this->sourceCSVs = $sourceCSVs;
        $this->sourceSQLs = $sourceSQLs;
    }
    
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        // get the source
        $source_extension = $request->input('source');

        if($source_extension === 'csv' || $source_extension === 'db') {

            if($source_extension === 'csv') {
                $output = $this->sourceCSVs->getCSV();
                return $output;
            }

            if ($source_extension === 'db') {
                $output = $this->sourceSQLs->getDB();
                return TransactionListResource::collection($output);
            }

        } else {
            return response()->json(['message' => 'The supported sources are csv & db'], 422);
        }

    }
}
