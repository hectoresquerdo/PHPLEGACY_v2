<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NotificationsView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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
            CREATE VIEW notifications AS
            SELECT
                    users.id,
                    users.name,
                    users.notifications,
                    exams.id_class,
                    exams.name AS "exam_name",
                    exams.mark AS "exam_mark",
                    works.name AS "work_name",
                    works.mark AS "work_mark"
                FROM
                    users
                INNER JOIN exams ON users.id = exams.id_student
                INNER JOIN works ON users.id = works.id_student
                WHERE users.notifications = 'YES'
                GROUP BY
                    exams.id_class
                ORDER BY
                    users.id
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

            DROP VIEW IF EXISTS `notifications`;
            SQL;
    }
}
