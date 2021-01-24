<?php

namespace App\Repositories\Services;

use App\Models\Transaction;
use App\Repositories\Contracts\ISourceCSV;
use Carbon\Carbon;

class SourceCSVRepository extends BaseRepository implements ISourceCSV
{

    public function model()
    {
        return Transaction::class;
    }
    
    public function getCSV()
    {
        $csv_file = storage_path() . '/uploads/csv/transactions.csv';

        try {
            $csv = fopen($csv_file, 'r');
            $rows = [];
            $header = [];
            $index = 0;
            while (($line = fgetcsv($csv)) !== FALSE) {
                if ($index == 0) {
                    $header = $line;
                    $index = 1;
                } else {
                    $row = [];
                    for ($i = 0; $i < count($header); $i++) {
                        if(($header[$i] !==  'id') && ($header[$i] !==  'updated_at')) {
                            
                            if($header[$i] ===  'created_at') {
                                $row['created_at_dates']['created_at_human'] = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())->diffForHumans($line[$i]);
                                $row['created_at_dates']['created_at'] = $line[$i];
                            } else {
                                $row[$header[$i]] = $line[$i];
                            }

                        }
                    }
                    array_push($rows, $row);
                }
            }

            return $rows;
            
        } catch(\Exception $e){
            \Log::error($e->getMessage());
        }
    }
}