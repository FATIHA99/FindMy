<?php

namespace app\models;

use app\core\DbModel;


class ClassModel extends DbModel
{
    public int $id;
    public string $label = '';
    public function tableName(): string
    {
        return 'classes';
    }

    public function rules(): array
    {
        return [
            'label' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['label'];
    }


    public function update(int $id)
    {
        return parent::update($id);
    }

    public function selectAll()
    {
        return parent::selectAll();
    }

    public function select(int $id)
    {
        return parent::select($id);
    }

    public function delete(int $id)
    {
        return parent::delete($id);
    }

    public function save()
    {
        return parent::save();
    }
}