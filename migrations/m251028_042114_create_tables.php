<?php

use yii\db\cubrid\Schema;
use yii\db\Migration;

class m251028_042114_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tbl_user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'salt' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'profile' => $this->string()->notNull()
        ]);

        $this->createTable('tbl_post', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'status' => $this->string(20)->notNull(), // ['draft', 'published', 'expired_period']
            'tags' => $this->text()
        ]);

        $this->createTable('tbl_comment', [
            'id' => $this->primaryKey(),
            'author' => $this->integer()->notNull(),
            'email' => $this->string()->notNull(),
            'url' => $this->string(),
            'content' => $this->text(),
            'is_approed' => $this->boolean()->notNull() // status
        ]);

        $this->createTable('tbl_tag', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'frequency' => $this->string()->notNull()
        ]);

        $this->createTable('tbl_lookup', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'code' => $this->string()->notNull(),
            'type' => $this->string()->notNull(),
            'position' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m251028_042114_create_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m251028_042114_create_tables cannot be reverted.\n";

        return false;
    }
    */
}
