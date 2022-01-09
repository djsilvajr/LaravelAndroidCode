<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('dados_int');
            $table->float('dados_float', 8, 2);
            $table->decimal('dados_decimal', $precision = 8, $scale = 2);
            $table->string('dados_string', 100);
            $table->char('dados_char', 100);
            $table->longText('dados_longtext');
            $table->json('dados_json');
            $table->boolean('dados_bolean');
            $table->binary('dados_blob');
            $table->dateTime('dados_datetime', $precision = 0);
            $table->date('dados_date');
            $table->enum('dados_enum', ['tipo 1', 'tipo 2', 'tipo 3', 'tipo 4', 'tipo 5']);
            $table->ipAddress('dados_ip');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
