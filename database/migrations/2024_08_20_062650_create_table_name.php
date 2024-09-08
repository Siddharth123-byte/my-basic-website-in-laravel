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
    Schema::create('table_name', function (Blueprint $table) {
        $table->id();
        $table->string('Employe_name');
        $table->string('Emp_DOB');
        $table->string('Emp_fathername');
        $table->string('Emp_Address');
        $table->timestamps();  // This adds 'created_at' and 'updated_at' columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_name');
    }
};
