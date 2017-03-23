<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'image' => array(
        'caption' => 'Фото',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'title' => array(
        'caption' => 'Название',
        'type' => 'text'
    ),
    'description' => array(
        'caption' => 'Описание фото',
        'type' => 'text'
    )
    //    ,
    // 'author' => array(
    //     'caption' => 'Author',
    //     'type' => 'text'
    // ),
    // 'id' => array(
    //     'caption' => 'ID',
    //     'type' => 'text',
    //     'default' => 'img{i}'
    // )
);
$settings['templates'] = array(
    'outerTpl' => '<div class="images">[+wrapper+]</div>',
    'rowTpl' => '<div class="image"><div class="copyrightwrapper"><img src="[+image+]" alt="[+legend+]" title="[+title+]" />[+author:ne=``:then=`<p class="copyright">[+author+]</p>`+]</div>[+legend:ne=``:then=`<p class="legend">[+legend:nl2br+]</p>`+]</div>'
);
$settings['configuration'] = array(
    'enablePaste' => false,
    'enableClear' => false    
);