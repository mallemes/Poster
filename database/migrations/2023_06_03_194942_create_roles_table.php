<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'moderator'],
            ['name' => 'admin'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            $table->foreignIdFor(Role::class, 'role_id')->default(1)->constrained('roles');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
        Schema::dropIfExists('roles');
    }
};
