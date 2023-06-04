<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Group;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->foreignIdFor(User::class, 'user_id')->constrained('users')->cascadeOnDelete();
            $table->string('file')->nullable();
            $table->foreignIdFor(Group::class, 'group_id')->nullable()
            ->constrained('groups');
            $table->boolean('is_published');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
