<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateAppsTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('apps', function (Blueprint $t) {
            $t -> increments('id');
            $t -> string('key')
                -> unique();
            $t -> string('secret');
            $t -> timestamps();
        });
    }

    public function down()
    {
        $this -> schema -> dropIfExists('apps');
    }
}
