<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticlesTagsFixture
 */
class ArticlesTagsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'article_id' => 1,
                'tag_id' => 1,
                'created' => '2024-04-19 12:13:01',
                'modified' => '2024-04-19 12:13:01',
            ],
        ];
        parent::init();
    }
}
