<?php

namespace persistencia\generico;

interface IGenericVO {
    
    function getAttributes();
    function convert($info);
    
}
