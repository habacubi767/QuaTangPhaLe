<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "branch".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $owner
 * @property string $tel
 * @property string $fax
 * @property string $email
 * @property string $website
 * @property string $hotline
 * @property integer $is_master
 * @property integer $parent_id
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['is_master', 'parent_id'], 'integer'],
            [['name', 'address'], 'string', 'max' => 250],
            [['owner'], 'string', 'max' => 100],
            [['tel', 'fax', 'hotline'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 80],
            [['website'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'owner' => 'Owner',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'email' => 'Email',
            'website' => 'Website',
            'hotline' => 'Hotline',
            'is_master' => 'Is Master',
            'parent_id' => 'Parent ID',
        ];
    }
}
