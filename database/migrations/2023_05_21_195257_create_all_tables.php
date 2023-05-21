<?php

use App\Dbexternal\Tables\Tables;
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
        Tables::professores();Tables::alunos();Tables::encarregados();Tables::candidatos();
        Tables::admitidos();Tables::pessoas();Tables::telefones();Tables::enderecos();Tables::salas();
        Tables::assiduidades();Tables::cursos();Tables::areas_formacoes();Tables::turnos();Tables::fichas_biograficas();
        Tables::escolas_proveniencias();Tables::turmas();Tables::tempos();Tables::dias();Tables::horas();Tables::horarios();
        Tables::anos_lectivos();Tables::notas();Tables::disciplinas();Tables::classes();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_tables');
    }
};
