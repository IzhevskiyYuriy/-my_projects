<?php
class FileModel{
   
   public function getAll()
   {
        $conn = Db::getConnection();//Подключение к БД

        $result = $conn->query('SELECT id, name, datetime, msg
                                                        FROM msgs 
                                                                ORDER BY id DESC');


        $i = 0;
        while($save = $result->fetch()) {
           $mess [$i]['id'] = $save['id'];
           $mess [$i]['name'] = $save['name'];
           $mess [$i]['datetime'] = $save['datetime'];
           $mess [$i]['msg'] = $save['msg'];
           $i++;
        }
        return $mess;
    }


// ДОБАВЛЕНИЯ СООБЩЕНИЙ В БД
    public function savePost($name, $msg)
	{
        $result = null;
        
        $conn = Db::getConnection();
        $rows = $conn->exec ("INSERT INTO msgs(
                                                name, 
                                                msg
                                                )
                                        VALUES(
                                                '$name',
                                                '$msg')
                                                ");
        if ($rows === 1){
            $result = [
                    'name' => $name,
                    'msg' => $msg,
                    'id' =>$conn->lastInsertId()
                    ];
        }
        return $result;
    }
   
}

