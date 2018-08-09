<?php

use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('users', function (Blueprint $t) {
            $t -> increments('id');
            $t
                -> string('key')
                -> nullable(false)
                -> unique('key', 'key')
            ;
            $t
                -> string('secret')
                -> nullable(false)
            ;
            $t -> softDeletes();
            $t -> timestamps();
        });
    }

    public function down()
    {
        $this -> schema -> dropIfExists('users');
    }
}
