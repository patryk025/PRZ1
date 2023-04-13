<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.store']);
        Permission::create(['name' => 'users.destroy']);
        Permission::create(['name' => 'users.change_role']);

        Permission::create(['name' => 'log-viewer']);

        Permission::create(['name' => 'courses.index']);
        Permission::create(['name' => 'courses.create']);
        Permission::create(['name' => 'courses.update']);
        Permission::create(['name' => 'courses.restore']);
        Permission::create(['name' => 'courses.delete']);

        Permission::create(['name' => 'timetable.index']);
        Permission::create(['name' => 'timetable.create']);
        Permission::create(['name' => 'timetable.update']);
        Permission::create(['name' => 'timetable.restore']);
        Permission::create(['name' => 'timetable.delete']);

        $adminRole = Role::findByName(config('auth.roles.admin'));
        $adminRole->givePermissionTo('users.index');
        $adminRole->givePermissionTo('users.store');
        $adminRole->givePermissionTo('users.destroy');
        $adminRole->givePermissionTo('users.change_role');

        $adminRole->givePermissionTo('log-viewer');

        $adminRole->givePermissionTo('courses.index');
        $adminRole->givePermissionTo('courses.create');
        $adminRole->givePermissionTo('courses.update');
        $adminRole->givePermissionTo('courses.restore');
        $adminRole->givePermissionTo('courses.delete');

        $adminRole->givePermissionTo('timetable.index');
        $adminRole->givePermissionTo('timetable.create');
        $adminRole->givePermissionTo('timetable.update');
        $adminRole->givePermissionTo('timetable.restore');
        $adminRole->givePermissionTo('timetable.delete');

        $teacherRole = Role::findByName(config('auth.roles.teacher'));
        $teacherRole->givePermissionTo('courses.index');
        $teacherRole->givePermissionTo('courses.create');
        $teacherRole->givePermissionTo('courses.update');
        $teacherRole->givePermissionTo('courses.restore');
        $teacherRole->givePermissionTo('courses.delete');

        $teacherRole->givePermissionTo('timetable.index');
        $teacherRole->givePermissionTo('timetable.create');
        $teacherRole->givePermissionTo('timetable.update');
        $teacherRole->givePermissionTo('timetable.restore');
        $teacherRole->givePermissionTo('timetable.delete');

        $studentRole = Role::findByName(config('auth.roles.student'));
        $studentRole->givePermissionTo('courses.index');

        $studentRole->givePermissionTo('timetable.index');
    }
}
