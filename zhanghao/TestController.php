<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;

class TestController extends Controller
{	
	//public $layout = false; //使用render加载模板时，可以通过layout指定加载模板
	
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {	
		//请求处理
		/*$request = Yii::$app->request;

		$getData = $request->get();

		var_dump($getData);die;

		$name = 'zhangsan';
		$age = '15';*/

		//数据库操作
		//查询
		/*$data = Yii::$app->db->createCommand('SELECT * FROM test')
		    ->queryAll();
		//var_dump($data);die;
		//添加
		$res = Yii::$app->db->createCommand()->insert('test', [
		    'test_name' => 'wangwu',
		    'test_age' => 30,
		])->execute();
		//修改
		$res = Yii::$app->db->createCommand()->update('test', ['test_age' => '44'], 'test_id = 1')->execute();*/
		//删除
		$res = Yii::$app->db->createCommand()->delete('test', 'test_id = 1')->execute();

		var_dump($res);die;

		//模板传值
		$renderData = [
				'name'=>$name,
				'age'=>$age
		];

       	return $this->render('index',$renderData);
    }
}
