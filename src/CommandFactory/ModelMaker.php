<?php

namespace Src\CommandFactory;

class ModelMaker{
    public static function create($name){
        $loname=strtolower($name);
        $tableName=$loname."s";

        $content="<?php\n\nnamespace App\Models;\n\nuse Database\Model;\n\nclass $name extends Model {\n\n\tprotected \$table='$tableName';\n\n\tpublic function get$name(\$id){\n\t\treturn \$this->select(\"select * from \$this->table where id='\$id'\");\n\t}\n}";

        $result=file_put_contents(dirname(dirname(__DIR__)).'/app/Models/'.$name.'.php',$content);

        if($result){
            return "model created successfully\n";
        }else{
            return "model did not created\n";
        }
    }
}