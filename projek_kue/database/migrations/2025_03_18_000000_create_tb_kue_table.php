<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKueTable extends Migration
{
    public function up()
    {
        \Log::info('Running migration: CreateTbKueTable');
        Schema::create('tb_kue', function (Blueprint $table) {
            $table->id('id_kue');
            $table->string('nama_kue');
            $table->text('deskripsi_kue');
            $table->decimal('harga_kue', 10, 2);
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_kue');
    }
}
