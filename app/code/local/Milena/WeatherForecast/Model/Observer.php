<?php
/**
 * Created by PhpStorm.
 * User: milena
 * Date: 2018-10-28
 * Time: 12:57
 */
class Milena_WeatherForecast_Model_Observer
{

    public function actualizeForecast()
    {
        try {
            $url = 'https://danepubliczne.imgw.pl/api/data/synop/station/lublin';
            $contents = file_get_contents($url);
            $contents = utf8_encode($contents);
            $data = json_decode($contents);
            $weather = Mage::getModel("weatherforecast/lublinweather");
            $weather->addData(array(
                'measurement_date' => $data->data_pomiaru,
                'measurement_hour' => $data->godzina_pomiaru,
                'temperature' => $data->temperatura,
                'wind_speed' => $data->predkosc_wiatru,
                'wind_direction' => $data->kierunek_wiatru,
                'humidity' => $data->wilgotnosc_wzgledna,
                'rain' => $data->suma_opadu,
                'pressure' => $data->cisnienie
            ));
            $weather->save();
        } catch (Exception $e)  {
            Mage::logException($e);
        }
    }


}