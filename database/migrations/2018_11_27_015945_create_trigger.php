<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER barang_masuks AFTER INSERT ON `barang_masters` FOR EACH ROW BEGIN
                INSERT INTO `test`(`new_id`, `type`, `value`, `created_at`) VALUES (NEW.id, NEW.type, 3, NOW());
                END

        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
