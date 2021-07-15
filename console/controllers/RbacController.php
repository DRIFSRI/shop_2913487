<?php
namespace console\controllers;
use phpDocumentor\Reflection\Types\String_;
use Yii;
use yii\console\Controller;
class RbacController extends Controller
{
    public $roles=[
        'admin','moderator','operator','redactor','storekeeper','user',
        'banned'];
    public $childs=[
        'admin'=>['moderator'],
        'moderator'=>['operator','redactor','storekeeper'],
        'operator'=>['user'],
        'redactor'=>['user'],
        'storekeeper'=>['user'],
    ];
    /*
     * $permissions_db = [
     *      ...
     *      db_name=>[
     *          permission=>[
     *              ...
     *              permission_name=>[permission_parent, ...],
     *              ...
     *          ],
     *      ],
     *      ...
     *  ]
     *
     */
    //ограничения к доступу и изменению бд
    public $permissions_db =[
        'User'=>[
            'index'=>['parents'=>['admin']],
            'ban'=>['parents'=>['banned'],],
            'unban'=>['parents'=>['banned'],],
            'view'=>['parents'=>['admin'],],
            'create'=>['parents'=>['user'],],
        ],
        'Product'=>[
            'index'=>['parents'=>['storekeeper']],
            'create'=>['parents'=>['storekeeper'],],
            'update'=>['parents'=>['storekeeper'],],
            'delete'=>['parents'=>['storekeeper'],],
            'view'=>['parents'=>['storekeeper'],],
            'avoid'=>['parents'=>['storekeeper'],],
            'published'=>['parents'=>['storekeeper'],],
            'show_history'=>['parents'=>['storekeeper'],],
        ],
        'Order'=>[
            'index'=>['parents'=>['operator']],
            'create'=>['parents'=>['operator'],],
            'view'=>['parents'=>['operator'],],
            'update'=>['parents'=>['moderator']],
//            'delete'=>['parents'=>['NOONE']],
            'updateOwn'=>['parents'=>['operator'],],
            'updateStatus'=>['parents'=>['operator'],],
        ],
        'Basket'=>[
            'index'=>['parents'=>['operator']],
            'create'=>['parents'=>['admin'],],
            'update'=>['parents'=>['operator'],],
            'show_history'=>['parents'=>['operator']],
        ],
        'Parameter'=>[
            'index'=>['parents'=>['redactor']],
            'create'=>['parents'=>['redactor'],],
            'update'=>['parents'=>['redactor']],
            'updateOwn'=>['parents'=>['user'],],
        ],
        'Category'=>[
            'index'=>['parents'=>['redactor']],
            'create'=>['parents'=>['redactor'],],
            'update'=>['parents'=>['redactor'],],
            'void'=>['parents'=>['redactor'],],
            'view'=>['parents'=>['redactor'],],
        ],
        'Rbac'=>[
            'index'=>['parents'=>['admin']],
            'create'=>['parents'=>['admin'],],
            'update'=>['parents'=>['admin'],],
//            'delete'=>['parents'=>[''],],
            'view'=>['parents'=>['admin'],],
        ]
    ];
    //Example
    public $rbacPermition=[
        [
            'name'=>'',
            'description'=>'',
            'type'=>'',
            'rule'=>'',
        ]
    ];

    /*
     *
     * ROLE:ADMIN,MODERATOR,USER,COPYPASTER,X
     *
     *
     */
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        //Добавление ролей
        foreach ($this->roles as $roleName)
        {
            $author = $auth->createRole($roleName);
            $auth->add($author);
        }
        //Добавление разрешений для ролей для бд
        foreach ($this->permissions_db as $db_name=>$permissions){
            foreach ($permissions as $permissionName => $options)
                foreach ($options['parents'] as $parentName){
                    $createPerm = $auth->createPermission($permissionName.$db_name);
                    $createPerm->description =$permissionName.' a '.$db_name;
                    $auth->add($createPerm);
                    $auth->addChild($auth->getRole($parentName),$createPerm);
                }
        }
        //Создание ципочки ролей
        foreach ($this->childs as $parent=>$childsName){
            foreach ($childsName as $child){
                $auth->addChild($auth->getRole($parent),$auth->getRole($child));
            }
        }
//        $updateOwnPost = $auth->createPermission('updateOwnPost');
//        $updateOwnPost->desription = 'Update own post';
//        $updateOwnPost->ruleName = $rule->name;
//        $auth->add($updateOwnPost);

        // "updateOwnPost" будет использоваться из "updatePost"
//        $auth->addChild($updateOwnPost, $updatePost);
        // разрешаем "автору" обновлять его посты
//        $auth->addChild($author, $updateOwnPost);
    }
    //Удаление всех Permition and Role
    public function actionRemoveAll(){
        Yii::$app->authManager->removeAll();
    }
    //Принимает имя роли
    public function actionGetPermisssionsRole($RoleName){

        var_dump(Yii::$app->authManager->getPermissionsByRole($RoleName));
    }
}