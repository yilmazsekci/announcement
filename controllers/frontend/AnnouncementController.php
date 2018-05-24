<?php

namespace kouosl\announcement\controllers\frontend;

use Yii;
use kouosl\board\models\Board;
use kouosl\user\models\User;

use kouosl\board\models\BoardSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * BoardController implements the CRUD actions for Board model.
 */
class AnnouncementController extends Controller
{
    

    /**
     * Lists all Board models.
     * @return mixed
     */
    public function actionIndex()
    {
        $boards = Board::find()->asArray()->all();
        $priority = array();
        $users = array();

        foreach ($boards as $key => $row)
        {
            $priority[$key] = $row['priority'];
        } 
        array_multisort($priority, SORT_ASC, $boards);
        foreach ($boards as $key => $row)
        {
            $users[$key] = $this->findModel($row['author'])['username'];
        }
        return $this->render('index',[ 'model' => $boards,'users' => $users]);
    }


    /**
     * Finds the Board model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Board the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
