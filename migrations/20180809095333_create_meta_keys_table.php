<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateMetaKeysTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('meta_keys', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('key');
            $table -> timestamps();
        });
    }

    public function down()
    {
        $this -> schema -> dropIfExists('meta_keys');
    }
}
