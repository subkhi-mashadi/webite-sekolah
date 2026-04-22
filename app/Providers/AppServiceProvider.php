<?php

namespace App\Providers;

use App\Models\AdminSchool;
use App\Models\Document;
use App\Models\News;
use App\Models\Principal;
use App\Models\SchoolSetting;
use App\Models\Superadmin;
use App\Policies\AdminSchoolPolicy;
use App\Policies\DocumentPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PrincipalPolicy;
use App\Policies\RolePolicy;
use App\Policies\SchoolSettingPolicy;
use App\Policies\SuperadminPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Gate::policy(Superadmin::class, SuperadminPolicy::class);
        Gate::policy(Principal::class, PrincipalPolicy::class);
        Gate::policy(AdminSchool::class, AdminSchoolPolicy::class);
        Gate::policy(News::class, NewsPolicy::class);
        Gate::policy(Document::class, DocumentPolicy::class);
        Gate::policy(SchoolSetting::class, SchoolSettingPolicy::class);
        Gate::policy(Role::class, RolePolicy::class);
    }
}
