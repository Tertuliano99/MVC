<?php
    namespace Src\Traits;
    trait TraitUrlParser
    {
        function parseUrl()
        {
            //localhost/teste1/teste2/teste3
            return explode("/",rtrim($_GET['url'],FILTER_SANITIZE_URL));
        }
    }
    