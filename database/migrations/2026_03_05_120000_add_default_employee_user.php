<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create a default employee account in hr_users
        DB::table('hr_users')->insert([
            'username'   => 'employee',
            'password'   => bcrypt('employee'),
            'role'       => 'employee',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('hr_users')
            ->where('username', 'employee')
            ->where('role', 'employee')
            ->delete();
    }
};

