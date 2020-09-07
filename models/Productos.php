<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id
 * @property string $productos
 * @property int $descripcion
 * @property int $id_proovedor
 * @property int $valor
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productos', 'descripcion', 'id_proovedor', 'valor'], 'required'],
            [['descripcion', 'id_proovedor', 'valor'], 'integer'],
            [['productos'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'productos' => Yii::t('app', 'Productos'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'id_proovedor' => Yii::t('app', 'Id Proovedor'),
            'valor' => Yii::t('app', 'Valor'),
        ];
    }
}
