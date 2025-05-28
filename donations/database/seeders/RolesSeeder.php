<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $roles = [
                [
                    'name' => 'super_admin',
                    'slug' => 's_admin',
                    'description' => 'Super Administrator with full access',
                ],
                [
                    'name' => 'institution_admin',
                    'slug' => 'i_admin',
                    'description' => 'Administrator for institutions/NPOs with specific access',
                ],
                [
                    'name' => 'fundraiser',
                    'slug' => 'fundraiser',
                    'description' => 'User who can create and manage fundraising campaigns',
                ],
                [
                    'name' => 'volunteer',
                    'slug' => 'volunteer',
                    'description' => 'User who can volunteer for campaigns and events',
                ],
                [
                    'name' => 'donor',
                    'slug' => 'donor',
                    'description' => 'User who can donate to campaigns',
                ]
                ];
            foreach ($roles as $role) {
                Role::updateorCreate([
                    'name' => $role['name'],
                    'slug' => $role['slug'],
                ], [
                    'description' => $role['description'],
                ]);
            }
    }
}
