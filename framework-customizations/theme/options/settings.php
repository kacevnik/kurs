<?php

	if (!defined('FW')) die('Forbidden');

	$options = array(
		'kdv_tap_general_opions' => array(
    		'type' => 'tab',
    		'options' => array(
        		'kdv_phone_header' => array(
				    'type'  => 'text',
				    'value' => '8 (926) 321-22-23',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Номер телефона в хедере', '{domain}'),
				    'desc'  => __('Пример: 8 (926) 321-22-23', '{domain}'),
				    'help'  => __('Укажите номер телефона для связи в верхней части сайта', '{domain}'),
				),

				'kdv_phone_header2' => array(
				    'type'  => 'text',
				    'value' => '8 (926) 321-22-23',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Второй номер телефона в хедере', '{domain}'),
				    'desc'  => __('Пример: 8 (926) 321-22-23', '{domain}'),
				    'help'  => __('Укажите второй номер телефона для связи в верхней части сайта. Служба потдержки', '{domain}'),
				),

				'kdv_logo' => array(
				    'type'  => 'upload',
				    'value' => array(
				        /*
				        'attachment_id' => '9',
				        'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
				        */
				        // if value is set in code, it is not considered and not used
				        // because there is no sense to set hardcode attachment_id
				    ),
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Логотип', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Загрузите логотип сайта (разрешенные файлы для загрузки: jpg, png, gif', '{domain}'),
				    /**
				     * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
				     * If set to `false`, the option will allow to upload any file from the media library.
				     */
				    'images_only' => true,
				    /**
				     * An array with allowed files extensions what will filter the media library and the upload files.
				     */
				    'files_ext' => array( 'jpg', 'png', 'gif' ),
				    /**
				     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
				     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
				     * For example: you set rar format to filter, but the filter ignore it , than you must set
				     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
				     */
				    'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
				),

				'kdv_slogan_1' => array(
				    'type'  => 'text',
				    'value' => 'ДОБРО ПОЖАЛОВАТЬ В ASBIS',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Слоган №1', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Слоган на главной страрнице', '{domain}'),
				),

				'kdv_slogan_2' => array(
				    'type'  => 'text',
				    'value' => 'Ознакомтесь с нашими последними курасами',
				    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				    'label' => __('Слоган №2', '{domain}'),
				    'desc'  => __('', '{domain}'),
				    'help'  => __('Нижний слоган на главной страрнице', '{domain}'),
				),
    		),
    		'title' => __('Основные настройки', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
		'kdv_tap_gallary_post_new' => array(
    		'type' => 'tab',
    		'options' => array(
        		'option_id_2'  => array( 'type' => 'text' ),
    		),
    		'title' => __('Галерея постов', '{domain}'),
    		'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
		),
	);

?>