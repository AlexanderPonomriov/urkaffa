<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'legend' => array(
        'caption' => 'Описание',
        'type' => 'richtext'
    )    
);
$settings['templates'] = array(
    'outerTpl' => '<div class="images">[+wrapper+]</div>',
    'rowTpl' => '<div class="image"><div class="copyrightwrapper"><img src="[+image+]" alt="[+legend+]" title="[+title+]" />[+author:ne=``:then=`<p class="copyright">[+author+]</p>`+]</div>[+legend:ne=``:then=`<p class="legend">[+legend:nl2br+]</p>`+]</div>'
);
$settings['configuration'] = array(
    'enablePaste' => false,
    'enableClear' => false    
);
