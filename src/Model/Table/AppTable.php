<?php
namespace App\Model\Table;

use Cake\Database\Expression\QueryExpression;
use Cake\ORM\Table;

class AppTable extends Table {
    public function initialize(array $config)
    {
//		$this->addBehavior('Timestamp');
    }

    /**
     * Before save callback.
     *
     * @param $event
     * @param $entity
     * @param $options
     */
    public function beforeSave($event, $entity, $options)
    {
//    	$model_name = $this->_alias;
//    	if ($entity->isNew() && $this->_schema->column('position')) {
//
//			$expression = new QueryExpression('position = position + 1');
//    		$this->updateAll([$expression], ['position > ' => -1]);
//    	}

    }
    public function afterSave($event, $entity, $options)
    {
//    	$model_name = $this->_alias;
//    	if ($entity->isNew() && $this->_schema->column('position')) {
//
//			$expression = new QueryExpression('position = position + 1');
//    		$this->updateAll([$expression], ['position > ' => -1]);
//    	}

    }

    /**
     * Process array with errors to string
     *
     * @param array $errors
     * @return string
     */

}