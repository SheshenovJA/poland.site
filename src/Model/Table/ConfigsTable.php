<?php
namespace App\Model\Table;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Table;

class ConfigsTable extends AppTable
{
    public function initialize(array $config)
    {
        $this->setTable('configs');

    }

    public function getConfig($section = null)
    {
        $result = [];
        $configs = $this->findBySection($section);
        foreach ($configs as $config) {
            $result[$config->value] = $config->id;
        }
        return $result;

    }
    public function getConfigs()
    {
        $result = [];
        $configs_db = $this->find('all');
        foreach ($configs_db as $config) {
            $result[$config->section] = $config->value;
        }

        return $result;
    }


}