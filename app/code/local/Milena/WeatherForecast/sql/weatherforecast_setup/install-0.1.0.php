<?php
    $installer = $this;

    $installer->startSetup();

    $table = $installer->getConnection()
        ->newTable($installer->getTable('weatherforecast/lublinweather'))
        ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'identity'  => true,
            'unsigned'  => true,
            'nullable'  => false,
            'primary'   => true,
        ), 'Id')
        ->addColumn('measurement_date', Varien_Db_Ddl_Table::TYPE_DATE, null, array(
            'nullable'  => false,
        ), 'Data pomiaru')
        ->addColumn('measurement_hour', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'nullable'  => false,
        ), 'Godzina pomiaru')
        ->addColumn('temperature', Varien_Db_Ddl_Table::TYPE_DOUBLE, null, array(
            'nullable'  => false,
        ), 'Temperatura')
        ->addColumn('wind_speed', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'nullable'  => false,
        ), 'Prędkość wiatru')
        ->addColumn('wind_direction', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'nullable'  => false,
        ), 'Kierunek wiatru')
        ->addColumn('humidity', Varien_Db_Ddl_Table::TYPE_DOUBLE, null, array(
            'nullable'  => false,
        ), 'Wilgotność')
        ->addColumn('rain', Varien_Db_Ddl_Table::TYPE_DOUBLE, null, array(
            'nullable'  => false,
        ), 'Suma opadów')
        ->addColumn('pressure', Varien_Db_Ddl_Table::TYPE_DOUBLE, null, array(
            'nullable'  => false,
        ), 'Ciśnienie');
    $installer->getConnection()->createTable($table);

    $installer->endSetup();
