<?php

namespace App\Repositories\Services;

use App\Models\Transaction;
use App\Repositories\Contracts\ISourceSQL;

class SourceSQLRepository extends BaseRepository implements ISourceSQL
{

    /**
     * method for define model.
     * 
     * @return model class
     */
    public function model()
    {
        return Transaction::class;
    }

    /**
     * method for getting transactions from database.
     * 
     * @return model object
     */
    public function getDB()
    {
        return $this->all();
    }
}