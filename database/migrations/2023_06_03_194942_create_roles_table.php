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
            $table->string('name')->unique();
            $table->timestamps();
        });


        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'moderator'],
            ['name' => 'admin'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
