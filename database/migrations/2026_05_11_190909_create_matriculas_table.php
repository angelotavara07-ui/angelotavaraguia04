<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('id_matricula');
            $table->foreignId('id_alumno')->constrained('alumnos', 'id')->cascadeOnDelete();
            $table->foreignId('id_curso')->constrained('cursos', 'id')->onDelete('cascade');
            $table->foreignId('id_profesor')->nullable()->constrained('profesors', 'id')->onDelete('set null');
            $table->foreignId('id_horario')->nullable()->constrained('horarios', 'id_horario')->onDelete('set null');
            $table->string('semestre');
            $table->date('fecha_matricula');
            $table->decimal('nota_final', 5, 2)->nullable();
            $table->enum('estado_matricula', ['aprobado', 'reprobado', 'cursando'])->default('cursando');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};