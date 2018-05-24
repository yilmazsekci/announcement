<?php

use yii\db\Migration;

/**
 * Class m180519_132119_board
 */
class m180519_132119_announcement extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('announcement', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'tags' => $this->text()->notNull(),
            'priority' =>"ENUM('Acil','Normal')",
            'date' => $this->dateTime(),
            'author' => $this->integer(11)->defaultValue(1),
        ], $tableOptions);

       

    }

    public function down()
    {
        $this->dropTable('announcement');
    }
}
