<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateMetasTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('metas', function (Blueprint $table) {
            $table -> increments('id');
            $table
                -> integer('user_id')
                -> unsigned()
            ;
            $table
                -> integer('meta_key_id')
                -> unsigned()
            ;
            $table -> string('value');
            $table -> timestamps();
        });
    }

    public function down()
    {
        $this -> schema -> dropIfExists('metas');
    }
}
