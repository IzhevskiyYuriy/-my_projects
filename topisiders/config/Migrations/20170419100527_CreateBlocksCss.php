<?php
use Migrations\AbstractMigration;

class CreateBlocksCss extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('blocks_css');
        $table->addColumn('block', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('link', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('teaser', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
