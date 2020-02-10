<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalogo".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $description
 */
class Catalogo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalogo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'description' => 'Description',
        ];
    }
}
