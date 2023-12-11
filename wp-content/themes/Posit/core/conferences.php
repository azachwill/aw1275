<?php

function getSingleConferenceStatus($startDate, $startTime, $endDate, $endTime){

    $detailStartDate = strtotime($startDate . ' ' . $startTime);
    $detailEndDate = strtotime($endDate . ' ' . $endTime);

    return getHangoutAndConferenceStatus($detailStartDate, $detailEndDate);
}