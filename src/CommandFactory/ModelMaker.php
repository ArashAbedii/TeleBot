<?php

namespace Src\CommandFactory;

class ModelMaker{
    public static function create($name){
        $loname=strtolower($name);
        $tableName=$loname."s";

        $content="<?php\n\nnamespace App\Models;\n\nuse Illuminate\Database\Eloquent\Model as Model;\n\n\nclass $name extends Model {\n\n}";

        $result=file_put_contents(dirname(dirname(__DIR__)).'/app/Models/'.$name.'.php',$content);

        if($result){
            return "model created successfully\n";
        }else{
            return "model did not created\n";
        }
    }
}