<?php

use App\Enums\User\UserGenders;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(User::FIRST_NAME);
            $table->string(User::LAST_NAME);
            $table->string(User::EMAIL)->unique();
            $table->timestamp(User::EMAIL_VERIFIED_AT)->nullable();
            $table->string(User::PASSWORD);
            $table->string(User::PHONE)->unique()->nullable();
            $table->text(User::ADDRESS)->nullable();
            $table->string(User::CITY)->nullable();
            $table->char(User::GENDER,'3');
            $table->string('apitoken')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
