<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncRespuestasTable extends Migration {

	public function up()
	{
		Schema::create('enc_respuestas', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_Localizacion')->unsigned();
			$table->integer('id_encuesta')->unsigned();
			$table->string('token', 50)->nullable();
			$table->date('fecha')->nullable();
            $table->string('v01', 5)->nullable();
            $table->string('v02', 5)->nullable();
            $table->string('v03', 5)->nullable();
            $table->string('v04', 5)->nullable();
            $table->string('v05', 5)->nullable();
            $table->string('v06', 5)->nullable();
            $table->string('v07', 5)->nullable();
            $table->string('v08', 5)->nullable();
            $table->string('v09', 5)->nullable();
            $table->string('v10', 5)->nullable();
            $table->string('v11', 5)->nullable();
            $table->string('v12', 5)->nullable();
            $table->string('v13', 5)->nullable();
            $table->string('v14', 5)->nullable();
            $table->string('v15', 5)->nullable();
            $table->string('v16', 5)->nullable();
            $table->string('v17', 5)->nullable();
            $table->string('v18', 5)->nullable();
            $table->string('v19', 5)->nullable();
            $table->string('v20', 5)->nullable();
            $table->string('v21', 5)->nullable();
            $table->string('v22', 5)->nullable();
            $table->string('v23', 5)->nullable();
            $table->string('v24', 5)->nullable();
            $table->string('v25', 5)->nullable();
            $table->string('v26', 5)->nullable();
            $table->string('v27', 5)->nullable();
            $table->string('v28', 5)->nullable();
            $table->string('v29', 5)->nullable();
            $table->string('v30', 5)->nullable();
            $table->string('v31', 5)->nullable();
            $table->string('v32', 5)->nullable();
            $table->string('v33', 5)->nullable();
            $table->string('v34', 5)->nullable();
            $table->string('v35', 5)->nullable();
            $table->string('v36', 5)->nullable();
            $table->string('v37', 5)->nullable();
            $table->string('v38', 5)->nullable();
            $table->string('v39', 5)->nullable();
            $table->string('v40', 5)->nullable();
            $table->string('v41', 5)->nullable();
            $table->string('v42', 5)->nullable();
            $table->string('v43', 5)->nullable();
            $table->string('v44', 5)->nullable();
            $table->string('v45', 5)->nullable();
            $table->string('v46', 5)->nullable();
            $table->string('v47', 5)->nullable();
            $table->string('v48', 5)->nullable();
            $table->string('v49', 5)->nullable();
            $table->string('v50', 5)->nullable();
            $table->string('v51', 5)->nullable();
            $table->string('v52', 5)->nullable();
            $table->string('v53', 5)->nullable();
            $table->string('v54', 5)->nullable();
            $table->string('v55', 5)->nullable();
            $table->string('v56', 5)->nullable();
            $table->string('v57', 5)->nullable();
            $table->string('v58', 5)->nullable();
            $table->string('v59', 5)->nullable();
            $table->string('v60', 5)->nullable();
            $table->string('v61', 5)->nullable();
            $table->string('v62', 5)->nullable();
            $table->string('v63', 5)->nullable();
            $table->string('v64', 5)->nullable();
            $table->string('v65', 5)->nullable();
            $table->string('v66', 5)->nullable();
            $table->string('v67', 5)->nullable();
            $table->string('v68', 5)->nullable();
            $table->string('v69', 5)->nullable();
            $table->string('v70', 5)->nullable();
            $table->string('v71', 5)->nullable();
            $table->string('v72', 5)->nullable();
            $table->string('v73', 5)->nullable();
            $table->string('v74', 5)->nullable();
            $table->string('v75', 5)->nullable();
            $table->string('v76', 5)->nullable();
            $table->string('v77', 5)->nullable();
            $table->string('v78', 5)->nullable();
            $table->string('v79', 5)->nullable();
            $table->string('v80', 5)->nullable();
            $table->string('v81', 5)->nullable();
            $table->string('v82', 5)->nullable();
            $table->string('v83', 5)->nullable();
            $table->string('v84', 5)->nullable();
            $table->string('v85', 5)->nullable();
            $table->string('v86', 5)->nullable();
            $table->string('v87', 5)->nullable();
            $table->string('v88', 5)->nullable();
            $table->string('v89', 5)->nullable();
            $table->string('v90', 5)->nullable();
            $table->string('t01', 250)->nullable();
            $table->string('t02', 250)->nullable();
            $table->string('t03', 250)->nullable();
            $table->string('t04', 250)->nullable();
            $table->string('t05', 250)->nullable();
            $table->string('t06', 250)->nullable();
            $table->string('t07', 250)->nullable();
            $table->string('t08', 250)->nullable();
            $table->string('t09', 250)->nullable();
            $table->string('t10', 250)->nullable();
            $table->string('t11', 250)->nullable();
            $table->string('t12', 250)->nullable();
            $table->string('t13', 250)->nullable();
            $table->string('t14', 250)->nullable();
            $table->string('t15', 250)->nullable();
            $table->string('t16', 250)->nullable();
            $table->string('t17', 250)->nullable();
            $table->string('t18', 250)->nullable();
            $table->string('t19', 250)->nullable();
            $table->string('t20', 250)->nullable();
            $table->string('t21', 250)->nullable();
            $table->string('t22', 250)->nullable();
            $table->string('t23', 250)->nullable();
            $table->string('t24', 250)->nullable();
            $table->string('t25', 250)->nullable();
            $table->string('t26', 250)->nullable();
            $table->string('t27', 250)->nullable();
            $table->string('t28', 250)->nullable();
            $table->string('t29', 250)->nullable();
            $table->string('t30', 250)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('enc_respuestas');
	}
}