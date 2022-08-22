<?php

namespace App\InsertTest;

use App\Models\PendingOrder;
use MCordingley\Regression\Algorithm\LeastSquares;
use MCordingley\Regression\Observations;
use MCordingley\Regression\Predictor\Linear;

class Regression {

  public function analysis()
  {
    $observations = new Observations;
    $query = PendingOrder::query();
    $orders = $query->get();

    collect($orders)->map(function ($order) use ($observations) {
      $observations->add(array_merge([1.0], $order->total_price), $order->status);
    });

    $algorithm = new LeastSquares;
    $coefficients = $algorithm->regress($observations);

    $predictor = new Linear($coefficients);
//    $predictedOutcome = $predictor->predict(array_merge([1.0], $hypotheticalFeatures));
  }
}
