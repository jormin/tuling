集成了 [图灵](http://www.tuling123.com/) 官方的Api接口。

## 安装

 1. 安装包文件

	``` bash
	$ composer require jormin/tuling
	```

## 说明

 1. 返回结果说明

	接口返回数据已经经过打包处理，为数组格式，包含三个字段:
    
    | 参数  | 类型  | 说明  | 可为空  |
    | ------------ | ------------ | ------------ | ------------ |
    | success | bool | 是否成功 | N |
    | msg | String | 结果说明 | N |
    | data | array | 百度语音接口返回数据，消息字段详细见 [图灵官方文档](http://www.tuling123.com/help/h_cent_webapi.jhtml?nav=doc). | Y |

## 使用

1. 获取自动回复信息
    
    ```php
       $message = '西安天气';
       $userID = '用户ID';
       $location = '陕西省西安市雁塔区';
       $tuLing = new Jormin\TuLing\TuLing($apiKey);
       $tuLing->chat($message, $userID, $location);
    ```
     
    接口字段：
    
    | 参数  | 类型  | 说明  | 可为空  |
    | ------------ | ------------ | ------------ | ------------ |
    | filePath | String | 语音文件本地路径，该字段和url字段二选一，优先使用此项 | Y |
    | url | String | 语音文件URL路径，该字段和filePath字段二选一 | Y |
    | callback | String | 回调地址 | Y |
    | userID | String | 用户唯一标识 | Y |
    | format | String | 语音文件格式，可选值 ['pcm', 'wav', 'opus', 'speex', 'amr']，默认为wav | Y |
    | rate | Integer | 采样率，可选值 [8000, 16000]，默认为16000 | Y |
    | lan | String | 语言，可选值 ['zh', 'ct', 'en']，默认为zh | Y |

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
