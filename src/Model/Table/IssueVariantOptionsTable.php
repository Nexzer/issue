<?php
namespace Issue\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

class IssueVariantOptionsTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config): void
    {
        $this->hasMany('IssueVariantOptionLocales', [
            'dependent'        => true,
            'cascadeCallbacks' => true,
        ]);
    }

    /**
     * @param Query $query
     * @param array $options
     *
     * @return Query
     */
    public function findForDomain(Query $query, array $options)
    {

        //Enable this debug to see that the 'repository' is an instance of Cake\Orm\Table when it fails. It should be an instance of $this (IssueVariantOptions)
        //So on /test/1 and /test/2 its an instance of $this (IssueVariantOptions)
        //On /test/3 and /test/4 its an instance of Cake\Orm\Table because it tries to make the repository an instance of the pivot table IssueProductVariantOptionsTable
//        \Cake\Error\Debugger::printVar($query);

        return $query->contain([
            'IssueVariantOptionLocales',
        ]);
    }

}
