<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'title' => 'First Post',
                'slug' => 'first-post',
                'body' => 'This is my first post.',
                'published' => 1,
                'created' => '2020-01-01 00:00:00',
                'modified' => '2020-01-01 00:00:00',
            ],
            [
                'user_id' => 1,
                'title' => 'Second Post',
                'slug' => 'second-post',
                'body' => 'This is my second post.',
                'published' => 1,
                'created' => '2020-01-01 00:00:00',
                'modified' => '2020-01-01 00:00:00',
            ],
            [
                'user_id' => 2,
                'title' => 'Third Post',
                'slug' => 'third-post',
                'body' => 'This is my third post.',
                'published' => 1,
                'created' => '2020-01-01 00:00:00',
                'modified' => '2020-01-01 00:00:00',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
