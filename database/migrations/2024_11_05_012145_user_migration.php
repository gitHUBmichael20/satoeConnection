<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $tabelUser = 'tabelUser';
    public function up(): void
    {
        //
        Schema::create($this->tabelUser,function(Blueprint $table) {
            $table->integer('id_user', true, true);
            $table->string('username', 20)->nullable(false);
            $table->string('password', 20)->nullable(false);
            $table->integer('nisn')->nullable(false);
            $table->integer('nis')->nullable(false);
            $table->string('nama')->nullable(false);
            $table->string('tanggal_lahir')->nullable(false);
            $table->integer('no_telepon')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('alamat')->nullable(false);
            $table->string('status_akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists($this->tabelUser);
    }
};
