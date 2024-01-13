<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest;
use App\Repositories\PaymentRepository;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    public function __construct(
        private readonly PaymentRepository $paymentRepository
    ) {}

    public function processPayment(PaymentRequest $request): JsonResponse
    {
        try {
            $response = $this->paymentRepository->processPayment($request);
            return response()->json($response, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], $th->getCode());
        }
    }
}

