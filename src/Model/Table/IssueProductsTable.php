<?php
namespace Issue\Model\Table;

use Cake\ORM\Table;


class IssueProductsTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config):void
    {
        $this->belongsToMany('Issue.IssueVariantOptions', [
            'through'          => 'IssueProductVariantOptions',
            'targetForeignKey' => 'issue_variant_option_id',
            'finder'           => 'forDomain',
        ]);

    }
}
