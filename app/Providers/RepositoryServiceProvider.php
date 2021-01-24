<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\{
    ISourceCSV,
    ISourceSQL
};
use App\Repositories\Services\{
    SourceCSVRepository,
    SourceSQLRepository
};
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ISourceCSV::class, SourceCSVRepository::class);
        $this->app->bind(ISourceSQL::class, SourceSQLRepository::class);
    }
}
