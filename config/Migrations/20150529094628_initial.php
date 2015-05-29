<?php
use Phinx\Migration\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('roles');
        $table
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();
        $this->execute('insert into roles(name) values ("Admin")');
        $this->execute('insert into roles(name) values ("User")');

        $table = $this->table('users');
        $table
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('123456');
        $this->execute(sprintf('insert into users(username, password, role_id) values ("Admin", "%s", 1)', $password));
    }

    public function down()
    {
        $this->dropTable('roles');
        $this->dropTable('users');
    }
}
