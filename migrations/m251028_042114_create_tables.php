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
            'profile' => $this->string()->notNull(),
            'auth_key' => $this->string()->notNull(),
            'is_author' => $this->boolean()->notNull()->defaultValue(false)
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
            'author_id' => $this->integer()->notNull(),
            'post_id' => $this->integer()->notNull(),
            'url' => $this->string(),
            'content' => $this->text(),
            'is_approed' => $this->boolean()->notNull(), // status
            'FOREIGN KEY (author_id) REFERENCES tbl_user (id)', // $this->addForeignKey not work in sqlite
            'FOREIGN KEY (post_id) REFERENCES tbl_post (id)'
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

        $this->createIndex('idx-comment-author_id', 'tbl_comment', 'author_id');
        $this->createIndex('idx-comment-post_id', 'tbl_comment', 'post_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tbl_post');
        $this->dropTable('tbl_comment');
        $this->dropTable('tbl_user');
        $this->dropTable('tbl_tag');
        $this->dropTable('tbl_lookup');
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
