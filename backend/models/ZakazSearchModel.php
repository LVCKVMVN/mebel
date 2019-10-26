<?php

namespace backend\models;

use backend\models\ZakazModel;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ZakazSearchModel represents the model behind the search form of `backend\models\ZakazModel`.
 */
class ZakazSearchModel extends ZakazModel
{
    /**
     * @inheritdoc
     */
    public $zakazchikName;

    public function rules()
    {
        return [
            [['id', 'zakazchik_id', 'dizainer_id', 'tovar_id', 'dost_id', 'predoplata', 'polnya_stoimost'], 'integer'],
            [['data_dost'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ZakazModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'zakazchik_id' => $this->zakazchik_id,
            'dizainer_id' => $this->dizainer_id,
            'tovar_id' => $this->tovar_id,
            'dost_id' => $this->dost_id,
            'predoplata' => $this->predoplata,
            'polnya_stoimost' => $this->polnya_stoimost,
            'data_dost' => $this->data_dost,
        ]);

        return $dataProvider;
    }
}
