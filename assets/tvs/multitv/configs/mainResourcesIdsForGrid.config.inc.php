<?php
$settings['display'] = 'horizontal';
$settings['fields'] = array(
    'id-1' => array(
        'caption' => 'id-1',
        'type' => 'number',
        'width' => '80'
    ),
    'id-2' => array(
        'caption' => 'id-2',
        'type' => 'number',
        'width' => '80'
    ),
    'id-3' => array(
        'caption' => 'id-3',
        'type' => 'number',
        'width' => '80'
    ),
    'id-4' => array(
        'caption' => 'id-4',
        'type' => 'number',
        'width' => '80'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div class="events">[+wrapper+]</div>',
    'rowTpl' => '<div class="event">[+event+], [+location+] ([+price+])</div>'
);
$settings['configuration'] = array(
    'enablePaste' => false,
    'enableClear' => false    
);

