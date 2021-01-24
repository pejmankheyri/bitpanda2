<?php

namespace App\Repositories\Services;

use App\Models\Transaction;
use App\Repositories\Contracts\ISourceSQL;

class SourceSQLRepository extends BaseRepository implements ISourceSQL
{

    public function model()
    {
        return Transaction::class;
    }

    public function getDB()
    {
        return $this->all();
    }
}