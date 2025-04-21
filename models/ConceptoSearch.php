<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Concepto;

/**
 * ConceptoSearch represents the model behind the search form of `app\models\Concepto`.
 */
class ConceptoSearch extends Concepto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['con_id', 'con_documento'], 'integer'],
            [['con_descripcion'], 'safe'],
            [['con_monto'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Concepto::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'con_id' => $this->con_id,
            'con_monto' => $this->con_monto,
            'con_documento' => $this->con_documento,
        ]);

        $query->andFilterWhere(['like', 'con_descripcion', $this->con_descripcion]);

        return $dataProvider;
    }
}
