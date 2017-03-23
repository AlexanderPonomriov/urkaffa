<?php
$settings['display'] = 'horizontal';
$settings['fields'] = array(
    'data-y' => array(
        'caption' => 'Координаты широта',
        'type' => 'text',
        'width' => '120'
    ),
    'data-x' => array(
        'caption' => 'Координаты долгота',
        'type' => 'text',
        'width' => '120'
    ),
    'address' => array(
        'caption' => 'Адрес',
        'type' => 'text',
        'width' => '480'
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
