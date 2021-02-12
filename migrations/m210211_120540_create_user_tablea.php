<?php

use yii\db\Migration;

/**
 * Class m210211_120540_create_user_tablea
 */
class m210211_120540_create_user_tablea extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->defaultValue(null),
            'email' => $this->string(),
            'password' => $this->string(),
            'isAdmin' => $this->integer()->defaultValue(0),
            'image' => $this->string()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
