<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;


    return new class extends Migration
    {

        public function up(): void
        {
            //
        }


        public function down(): void
        {
            //
            Schema::dropIfExists( 'person_name' );
        }
    };
?>