<?php

namespace app\models;

use app\components\AppActiveRecord;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $name
 * @property string $label
 * @property string $value
 * @property integer $create_at
 * @property integer $update_at
 */
class Config extends AppActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'label', 'value'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['label'], 'string', 'max' => 50],
            [['value'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => '配置字段',
            'label' => '配置字段名',
            'value' => '配置值',
            'create_at' => '创建时间',
            'update_at' => '最后修改',
        ];
    }
}