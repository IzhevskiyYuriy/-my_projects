<?php
class IndexController implements IController {
    public function indexAction() 
    {
        $fc = FrontController::getInstance();

        $model = new FileModel();

        $messages = $model->getAll('../views/index.php');

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(!empty($_POST['name'])and !empty($_POST['msg'])){
                            $model->savePost($_POST['name'], $_POST['msg']);
                            header('Location:' .'/');
                    }else {
                            echo $errMsg = "<strong><font color='#FF0000'>"."Заполните все поля формы!"."</font></strong>";
                    }

            }

    $fc->render('index', ['messagesList' => (array)$messages]);
    
    }
   
   /*
   public function ajaxAction (){
        $data = null;
        $fc = FrontController::getInstance();// Инициализация FrontController
        
        
        $model = new FileModel();//Инициализация модели
        if ($_SERVER["REQUEST_METHOD"]=="POST"){//if (isset($_POST['submit']))
            if(!empty($_POST['name'])and !empty($_POST['msg'])){
           $data =  $model->savePost($_POST['name'], $_POST['msg']);
            }else {
                
                echo $errMsg = "<strong><font color='#FF0000'>"."Заполните все поля формы!"."</font></strong>";
            }
           
        }
       $this ->indexAction($model->getAll());
        $fc->render('ajax', ['data' => $data]);
   }*/
}