<?php namespace Tkj;

class View {

    public static function make( $view, $data=FALSE )
    {
        if( !file_exists($view) )
                throw new \Exception("View file not found: {$view}", 404);

        if( $data && is_array($data) )
                extract($data,EXTR_SKIP);

        ob_start();

        include $view;

        return ob_get_clean();
    }

}