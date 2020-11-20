<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropriedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propriedades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedInteger('provincia_id');
            $table->unsignedInteger('distrito_id');
            $table->unsignedInteger('cidade_id');
            $table->unsignedInteger('intencao_id');
            $table->unsignedInteger('user_id');
            $table->string('designacao')->nullable();
            $table->string('bairo')->nullable();
            $table->string('avenida')->nullable();
            $table->string('rua')->nullable();
            $table->string('capa');
            $table->string('fotos');
            $table->integer('nrcasa')->nullable();
            $table->integer('wc');
            $table->integer('quarto');
            $table->integer('quarteirao');
            $table->integer('andar')->nullable();
            $table->string('proprietario')->nullable();;
            $table->string('broker')->nullable();;
            $table->string('consinha')->nullable();
            $table->string('jardin')->nullable();
            $table->string('psicinas')->nullable();
            $table->string('escritorio')->nullable();
            $table->string('garagen')->nullable();
            $table->string('cerca_electrica')->nullable();
            $table->string('Seguranca')->nullable();
            $table->string('gerador')->nullable();
            $table->mediumText('descricao');
            $table->double('preco');
            $table->double('area');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->date('construcao')->nullable();;
            $table->date('disponibilidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propriedades');
    }
}
