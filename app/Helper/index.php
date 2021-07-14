<?php

/**
 * times_format
 * function for print format time in 24 hour
 *
 * @return void
 */
function timeString()
{
    $timeEnd = 24;
    $times = [];

    for ($time = 7; $time <= $timeEnd; $time++) {
        if (strlen($time) == 1) {
            array_push($times, "0{$time}:00");
        } else {
            array_push($times, "{$time}:00");
        }
    }

    return $times;
}

/**
 * dayInAWeek
 * return day in a week
 *
 * @return void
 */
function dayInAWeek()
{
    return [
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
    ];
}

/**
 * decodeMessage
 * function for decode message whatsapp
 *
 * @param  mixed $message
 * @return void
 */
function decodeMessage($message)
{
    return str_replace('%', ' ', $message);
}

/**
 * encode
 * function for encode message whatsapp
 *
 * @param  mixed $message
 * @return void
 */
function encodeMessage($message)
{
    return str_replace(' ', '%', $message);
}

/**
 * stringSendWhatsappMessage
 * function for string send whatsapp message
 *
 * @param  mixed $message
 * @return void
 */
function stringSendWhatsappMessage($message)
{
    // 'https://web.whatsapp.com/send?text=Halo%20SBJ,%20saya%20mau%20tanya-tanya%20tentang%20Triplek&phone=6287886865050';

    return "https://web.whatsapp.com/send?text=$message";
}
