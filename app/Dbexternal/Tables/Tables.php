<?php 

namespace App\Dbexternal\Tables;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

Class Tables{
    
    public static function users(){
       return Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome_usuario')->unique();
            $table->boolean('status_usuario');
            $table->string('cargo_usuario');
            $table->string('imagem_usuario')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public static function pessoas(){
        return Schema::create('pessoas', function (Blueprint $table){
            $table->id('id');
            $table->string('nome_completo');
            $table->string('num_bi')->unique();
            $table->date('data_nascimento');
            $table->enum('genero',['Masculino','Femenino']);
            $table->timestamps();
        });
    }
    public static function professores(){
        return Schema::create('professores', function (Blueprint $table){
            $table->id('professor_id');
            $table->string('formacao');
            $table->timestamps();
        });
    }
    public static function alunos(){
        return Schema::create('alunos', function (Blueprint $table){
            $table->id('aluno_id');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('naturalidade');
            $table->timestamps();
        });
    }
    public static function encarregados(){
        return Schema::create('encarregados', function (Blueprint $table){
            $table->id('encarregado_id');
            $table->string('grau_parentesco');
            $table->timestamps();
        });

    }
    public static function candidatos(){
        return Schema::create('candidatos', function (Blueprint $table){
            $table->id('candidato_id');
            $table->string('nome_candidato');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->date('data_nascimento');
            $table->enum('genero',['Masculino','Femenino']);
            $table->string('naturalidade');
            $table->string('num_bi')->unique();
            $table->integer('tel_candidato')->unique();
            $table->string('status_candidato');
            $table->timestamps();
        });
    }
    public static function admitidos(){
        return Schema::create('admitidos', function(Blueprint $table){
            $table->id('admitido_id');
            $table->foreignId('candidato_id');
            $table->timestamps();         
        });
    }
    public static function telefones(){
        return Schema::create('telefones', function (Blueprint $table){
            $table->id('telefone_id');
            $table->integer('num_telef')->unique();
            //$table->foreignId('pessoa_id');
            $table->timestamps();
        });
    }
    public static function enderecos(){
        return Schema::create('enderecos', function (Blueprint $table) {
            $table->id("endereco_id");
            $table->string('municipio');
            $table->string('bairro');
            $table->string('zona');
            $table->string('num_casa')->default('S/N');
            $table->timestamps();
         });
    }
    public static function salas(){
        return Schema::create('salas', function (Blueprint $table) {
            $table->id('sala_id');
            $table->string('sala')->unique();
            $table->boolean('tipo_sala');
            $table->timestamps();
        });
    }
    public static function assiduidades(){
        return Schema::create('assiduidades', function (Blueprint $table) {
            $table->id('assiduidade_id');
            $table->string('falta_aluno');
            $table->enum('status_falta',['Justificada','N-Justificada']);
            $table->longText('descricao_falta');
            $table->enum('tipo_falta',['Vermelha','Azul']);
            //$table->foreignId('aluno_id');
            $table->timestamps();
        });
    }
    public static function cursos(){
        return Schema::create('cursos', function (Blueprint $table) {
            $table->id('curso_id');
            $table->string('nome_curso')->unique();
            $table->string('siglas_curso')->unique();
            //$table->foreignId('area_formacao_id');
            $table->timestamps();
        });
    }
    public static function areas_formacoes(){
        return Schema::create('areas_formacoes',function (Blueprint $table) {
            $table->id('area_formacao_id');
            $table->string('nome_area')->unique();
            $table->timestamps();
        });
    }
    public static function turnos(){
        return Schema::create('turnos', function (Blueprint $table) {
            $table->id('turno_id');
            $table->enum('nome_turno',['Manhã','Tarde','Noite']);
            $table->timestamps();
        });
    }
    public static function fichas_biograficas(){
        return Schema::create('ficha_biografica', function (Blueprint $table) {
            $table->id('ficha_biografica_id');
            $table->string('descricao')->nullable();
            //$table->foreignId('aluno_id');
            $table->timestamps();
        });
    }
    public static function escolas_proveniencias(){
        return Schema::create('escolas_proveniencias', function (Blueprint $table) {
            $table->id('proveniencia_id');
            $table->string('nome_escola');
            $table->enum('turno',['Manhã','Tarde','Noite']);
            $table->string('num_processo');
            $table->integer('num_aluno');
            $table->string('ultimo_anoLectivo');
            $table->string('certificado');
            $table->double('media');
            $table->timestamps();
        });
    }
    public static function turmas(){
        return Schema::create('turmas', function (Blueprint $table) {
            $table->id('turma_id');
            $table->string('nome_turma')->unique();
            $table->integer('num_vagas');
            //$table->foreignId('turno_id');
            //$table->foreignId('classe_id');
            //$table->foreignId('curso_id');
            $table->timestamps();
        });
    }
    public static function tempos(){
        return Schema::create('tempos', function (Blueprint $table) {
            $table->id('tempo_id');
            $table->integer('tempo');
            $table->timestamps();
        });
    }
    public static function dias(){
        return Schema::create('dias', function (Blueprint $table) {
            $table->id('dia_id');
            $table->string('nome_dia')->unique();
            $table->timestamps();
        });
    }
    public static function horas(){
        return Schema::create('horas', function (Blueprint $table) {
            $table->id('hora_id');
            $table->time('hora')->unique();
            //$table->foreignId('tempo_id');
            //$table->foreignId('turno_id');
            $table->timestamps();
        });
    }
    public static function horarios(){
        return Schema::create('horarios', function (Blueprint $table) {
            $table->id('horario_id');
            //$table->foreignId('ano_lectivo_id');
            //$table->foreignId('turma_id');
            $table->timestamps();
        });
    }
    public static function anos_lectivos(){
        return Schema::create('anos_lectivos', function (Blueprint $table) {
            $table->id('ano_lectivo_id');
            $table->string('ano_lectivo')->unique();
            $table->boolean('status');
            $table->integer('num_alunos_turmas');
            $table->integer('num_salas');
            $table->string('data_fim')->unique()->nullable();
            $table->timestamps();
        });
    }
    public static function notas(){
        return Schema::create('notas', function (Blueprint $table) {
            $table->id('nota_id');
            $table->double('nota_aluno');
            $table->string('tipo_prova');
            $table->longText('descricao');
            $table->enum('tipo',['Avaliação Continua','Prova dos Professores','Provas Trimestras','Provas Globais','Recurso','Exame Recurso','Exame','Exame Especial']);
            //$table->foreignId('aluno_id');
            //$table->foreignId('disciplina_id');
            $table->timestamps();
        });
    }
    public static function disciplinas(){
        return Schema::create('disciplinas', function (Blueprint $table) {
            $table->id('disciplina_id');
            $table->string('nome_disciplina')->unique();
            $table->string('componente');
            $table->integer('tempo_prova');
            $table->timestamps();
        });
    }
    public static function classes(){
        return Schema::create('classes', function (Blueprint $table) {
            $table->id('classes_id');
            $table->string('classe')->unique();
            $table->timestamps();
        });
    }

    
}