<?php
namespace Issue\Controller;

use Cake\Controller\Controller;

class IssuesController extends Controller
{

    public function test1()
    {
        $this->loadModel('Issue.IssueProducts');
        $product = $this->IssueProducts->find()->contain([
            'IssueVariantOptions',
        ])->first();

        //This works. The product now contains the IssueVariantOptions and that contains IssueVariantOptionLocales
        \Cake\Error\Debugger::printVar($product);
        die();
    }

    public function test2()
    {
        //This also works fine
        $this->loadModel('Issue.IssueVariantOptions');
        $variantOption = $this->IssueVariantOptions->find('forDomain')->first();;
        \Cake\Error\Debugger::printVar($variantOption);
        die();
    }

    public function test3()
    {
        //This fails when attempting to save
        $this->loadModel('Issue.IssueProducts');
        $product = $this->IssueProducts->find()->contain([
            'IssueVariantOptions',
        ])->first();
        $this->IssueProducts->patchEntity($product, [
            'issue_variant_options' => [
                [
                    'name' => 'test',
                ],
            ],
        ]);
        $this->IssueProducts->save($product);
    }

    public function test4()
    {
        //This also fails when attempting to save
        $this->loadModel('Issue.IssueProducts');
        $product = $this->IssueProducts->newEntity([
            'name'                  => 'test',
            'issue_variant_options' => [
                [
                    'name' => 'test',
                ],
            ],
        ]);
        $this->IssueProducts->save($product);
    }
}
