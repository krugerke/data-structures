<?php
$resources = get_resources();


//$context = stream_context_get_default();

//stream_wrapper_unregister('file');

//stream_wrapper_register('filesystem', $context);

$resources = get_resources();

interface WrapperInterface

{

    /**

     * resource context

     *

     * @var resource

     */

    //public $context;



    /**

     * constructor

     *

     */

    public function __construct();



    /**

     *

     *

     * @return bool

     */

    public function dir_closedir();



    /**

     * Enter description here...

     *

     * @param string $path

     * @param int $options

     * @return bool

     */

    public function dir_opendir($path , $options);



    /**

     * Enter description here...

     *

     * @return string

     */

    public function dir_readdir();



    /**

     * Enter description here...

     *

     * @return bool

     */

    public function dir_rewinddir();



    /**

     * Enter description here...

     *

     * @param string $path

     * @param int $mode

     * @param int $options

     * @return bool

     */

    public function mkdir($path , $mode , $options);



    /**

     * Enter description here...

     *

     * @param string $path_from

     * @param string $path_to

     * @return bool

     */

    public function rename($path_from , $path_to);



    /**

     * Enter description here...

     *

     * @param string $path

     * @param int $options

     * @return bool

     */

    public function rmdir($path , $options);



    /**

     * Enter description here...

     *

     * @param int $cast_as

     * @return resource

     */

    public function stream_cast($cast_as);



    /**

     * Enter description here...

     *

     */

    public function stream_close();



    /**

     * Enter description here...

     *

     * @return bool

     */

    public function stream_eof();



    /**

     * Enter description here...

     *

     * @return bool

     */

    public function stream_flush();



    /**

     * Enter description here...

     *

     * @param mode $operation

     * @return bool

     */

    public function stream_lock($operation);



    /**

     * Enter description here...

     *

     * @param string $path

     * @param string $mode

     * @param int $options

     * @param string &$opened_path

     * @return bool

     */

    public function stream_open($path , $mode , $options , &$opened_path);



    /**

     * Enter description here...

     *

     * @param int $count

     * @return string

     */

    public function stream_read($count);



    /**

     * Enter description here...

     *

     * @param int $offset

     * @param int $whence = SEEK_SET

     * @return bool

     */

    public function stream_seek($offset , $whence = SEEK_SET);



    /**

     * Enter description here...

     *

     * @param int $option

     * @param int $arg1

     * @param int $arg2

     * @return bool

     */

    public function stream_set_option($option , $arg1 , $arg2);



    /**

     * Enter description here...

     *

     * @return array

     */

    public function stream_stat();



    /**

     * Enter description here...

     *

     * @return int

     */

    public function stream_tell();



    /**

     * Enter description here...

     *

     * @param string $data

     * @return int

     */

    public function stream_write($data);



    /**

     * Enter description here...

     *

     * @param string $path

     * @return bool

     */

    public function unlink($path);



    /**

     * Enter description here...

     *

     * @param string $path

     * @param int $flags

     * @return array

     */

    public function url_stat($path , $flags);

}

class stream implements WrapperInterface
{

    public $context;

    public function __construct()
    {
        $here = 'asdfs';


        //$context = stream_context_get_options($this->context);
    }

    public function __invoke($name)
    {
        $name = $name;
    }

    public function dir_closedir()
    {
        // TODO: Implement dir_closedir() method.
    }

    public function dir_opendir($path, $options)
    {
        // TODO: Implement dir_opendir() method.
    }

    public function dir_readdir()
    {
        // TODO: Implement dir_readdir() method.
    }

    public function dir_rewinddir()
    {
        // TODO: Implement dir_rewinddir() method.
    }

    public function mkdir($path, $mode, $options)
    {
        // TODO: Implement mkdir() method.
    }

    public function rename($path_from, $path_to)
    {
        // TODO: Implement rename() method.
    }

    public function rmdir($path, $options)
    {
        // TODO: Implement rmdir() method.
    }

    public function stream_cast($cast_as)
    {
        // TODO: Implement stream_cast() method.
    }

    public function stream_close()
    {
        // TODO: Implement stream_close() method.
    }

    public function stream_eof()
    {
        // TODO: Implement stream_eof() method.
    }

    public function stream_flush()
    {
        // TODO: Implement stream_flush() method.
    }

    public function stream_lock($operation)
    {
        // TODO: Implement stream_lock() method.
    }

    public function stream_open($path, $mode, $options, &$opened_path)
    {
        // TODO: Implement stream_open() method.
    }

    public function stream_read($count)
    {
        // TODO: Implement stream_read() method.
    }

    public function stream_seek($offset, $whence = SEEK_SET)
    {
        // TODO: Implement stream_seek() method.
    }

    public function stream_set_option($option, $arg1, $arg2)
    {
        // TODO: Implement stream_set_option() method.
    }

    public function stream_stat()
    {
        // TODO: Implement stream_stat() method.
    }

    public function stream_tell()
    {
        // TODO: Implement stream_tell() method.
    }

    public function stream_write($data)
    {
        // TODO: Implement stream_write() method.
    }

    public function unlink($path)
    {
        // TODO: Implement unlink() method.
    }

    public function url_stat($path, $flags)
    {
        // TODO: Implement url_stat() method.
    }


}

spl_autoload_register(new stream());

$obj = new NonExistClass();

stream_wrapper_register('process', stream::class);

$opts = array('process' => parse_ini_file(PHP_CONFIG_FILE_PATH.'/php.ini', true, INI_SCANNER_TYPED));

stream_context_set_default($opts);

$resource = stream_context_create();


$fp = fopen('process:///home/kkruger/Downloads/image001.png', 'rw');


$resources = get_resources();

$val = $resources;
