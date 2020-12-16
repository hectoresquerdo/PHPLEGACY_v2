<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationView extends Migration
{

    public function up()
    {
        \DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement($this->dropView());
    }
    private function createView(): string
    {
        return <<<SQL
            create view evaluation as
                select users.id,
                    users.name,
                    exams.id_class,
                    exams.name as "exam_name",
                    exams.mark as "exam_mark",
                    works.name as "work_name",
                    works.mark as "work_mark",
                    exams.mark *0.6 + works.mark * 0.4 AS "Evaluation_grade"
                    from users
                    inner join exams on users.id = exams.id_student
                    inner join works on users.id = works.id_student
            SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL

            DROP VIEW IF EXISTS `evaluation`;
            SQL;
    }
}
