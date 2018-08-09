<?php


use Illuminate\Database\Schema\Blueprint;
use Sanmark\IlluminatedPhinx\Migration\Migration;

class CreateUserSecretResetRequestsTable extends Migration
{
    public function up()
    {
        $this -> schema -> create('user_secret_reset_requests', function (Blueprint $t) {
            $t -> increments('id');
            $t
                -> integer('user_id')
                -> unsigned()
            ;
            $t -> string('token');
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
        $this -> schema -> dropIfExists('user_secret_reset_requests');
    }
}
