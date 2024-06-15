<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Policies\ActivityPolicy;
use App\Policies\ExceptionPolicy;
use App\Policies\RolePolicy;
use BezhanSalleh\FilamentExceptions\Models\Exception;
use Filament\Actions\Modal\Actions\Action;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Activitylog\Contracts\Activity;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Activity::class => ActivityPolicy::class,
        Exception::class => ExceptionPolicy::class,
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
