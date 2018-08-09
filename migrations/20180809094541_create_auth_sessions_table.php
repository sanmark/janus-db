<?php

use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateAuthSessionsTable extends Migration
{
    public function up()
    {
        $this-> schema -> create('auth_sessions', function (Blueprint $t) {
            $t -> increments('id');
            $t -> string('key');
            $t
                -> integer('user_id')
                -> unsigned()
            ;
            $t -> timestamps();

            $t
                -> foreign('user_id')
                -> references('id')
                -> on('users')
                -> onDelete('cascade')
                -> onUpdate('cascade')
            ;
        });
    }

    public function down()
    {
        $this -> schema -> table('auth_sessions', function (Blueprint $t) {
            $t -> dropForeign([
                'user_id' ,
            ]);
        });

        $this -> schema -> dropIfExists('auth_sessions');
    }
}
